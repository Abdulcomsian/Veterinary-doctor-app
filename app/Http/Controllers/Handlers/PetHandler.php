<?php

namespace App\Http\Controllers\Handlers;
use App\Models\{Pet , Appointment , PetPhoto};
class PetHandler{
 
    public function createPetDetails($request)
    {
        $pet = new Pet;
        $pet->name = $request->petName;
        $pet->age = $request->age;
        $pet->breed = $request->breed;
        $pet->save();

        $previousCheckup = $request->previousChecked; 
        
        if($previousCheckup){
            $previousAppointment = $request->previousAppointmentDate;
            Appointment::create(['pet_id' => $pet->id , 'is_non_schedule' => 1 , 'date' => $previousAppointment]);
        }


        if($request->hasFile('medicalHistory'))
        {
            $medicalHistory = $request->file('medicalHistory');
            $filename = strtotime(date('y-m-d')).'-'.str_replace(" " ,"-",$medicalHistory->getClientOriginalName());
            $medicalHistory->move(public_path('uploads') , $filename);
        }

        $files = [];
        foreach($request->file('petProfilePictures') as $key =>  $petPicture)
        {
            $filename = strtotime(date('y-m-d')).'-'.str_replace(" " ,"-",$petPicture->getClientOriginalName());
            $medicalHistory->move(public_path('uploads') , $filename);
            $files[] = ["pet_id" => $pet->id , 'image' => $filename];
    
        }

        if(count($files))
        {
            PetPhoto::insert($files);
        }

        return ['status' => true , 'msg' => 'Pet added successfully'];
    }
}
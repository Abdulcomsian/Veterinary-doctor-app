<?php

namespace App\Http\Controllers\Handlers;
use App\Models\{Pet , Appointment , PetPhoto , MedicalHistory};
class PetHandler{
 
    public function createPetDetails($request)
    {
        $pet = new Pet;
        $pet->name = $request->petName;
        $pet->age = $request->age;
        $pet->breed = $request->breed;
        $pet->user_id = auth()->user()->id;
        $pet->save();

        $previousCheckup = $request->previousChecked; 
        
        if($previousCheckup){
            $previousAppointment = $request->previousAppointmentDate;
            Appointment::create(['pet_id' => $pet->id , 'is_non_schedule' => 1 , 'date' => $previousAppointment]);
        }


        if($request->hasFile('medicalHistory'))
        {
                $historyFile = $request->file('medicalHistory');
                $filename = strtotime(date('y-m-d')).'-'.str_replace(" " ,"-",$historyFile->getClientOriginalName());
                $historyFile->move(public_path('/uploads') , $filename);
                MedicalHistory::create(['pet_id' => $pet->id , 'file_link' => $filename]);
        }

        if($request->hasFile('petProfilePictures')){
            $files = [];
            foreach($request->file('petProfilePictures') as $key =>  $petPicture)
            {
                $filename = strtotime(date('y-m-d')).'-'.str_replace(" " ,"-",$petPicture->getClientOriginalName());
                $petPicture->move(public_path('uploads') , $filename);
                $files[] = ["pet_id" => $pet->id , 'image' => $filename];
        
            }
            PetPhoto::insert($files);
        }

        return ['status' => true , 'msg' => 'Pet added successfully'];
    }
}
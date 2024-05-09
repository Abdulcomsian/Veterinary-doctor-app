<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Handlers\PetHandler;
use Illuminate\Support\Facades\Validator;

class PetController extends Controller
{
    protected $petHandler;

    function __construct(PetHandler $petHandler)
    {
        $this->petHandler = $petHandler;
    }

    public function addPet(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'petName' => 'required|string',
            "age" => 'required|numeric',
            "breed" => 'required|string',
            "previousChecked" => 'required|boolean',
            "previousAppointmentDate" => 'nullable|date_format:Y-m-d',
            "medicalHistory" => 'nullable|files',
            "petProfilePictures" => 'files|mimes:jpg,png,jpeg'
        ]);


        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(", " , $validator->errors()->all()) ]);
        }

        try{
            $response = $this->petHandler->createPetDetails($request);
            return response()->json($response);
        }catch(\Exception $e){
            return response()->json(['status' => false , 'error' => $e->getMessage() ]);
        }


    }
}

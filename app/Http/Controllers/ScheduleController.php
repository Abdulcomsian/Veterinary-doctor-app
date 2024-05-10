<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Handlers\ScheduleHandler;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    protected $scheduleHandler;

    function __construct(ScheduleHandler $scheduleHandler)
    {
        $this->scheduleHandler = $scheduleHandler;
    }

    public function addAvailabilitySchedule(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'schedule' => 'required|stirng'
        ]);

        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(", " , $validator->errors()->all())]);
        }

        $schedules = json_decode($request->schedule , TRUE);

        $validator = Validator::make($schedules , [
            '*.date.date' => 'required|date',
            '*.date.*.time' => 'required|date_format:H:i'
        ]);

        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(", " , $validator->errors()->all())]);
        }

        try{
            $response = $this->scheduleHandler->createAvailabilitySchedule($request);
            return response()->json($response);
        }catch(\Exception $e){
            return response()->json(['status' => false , 'error' => $e->getMessage()]);
        }

    }

    public function updateAvailabilitySchedule(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'schedule' => 'required|stirng'
        ]);

        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(", " , $validator->errors()->all())]);
        }

        $schedules = json_decode($request->schedule , TRUE);

        $validator = Validator::make($schedules , [
            '*.date.date' => 'required|date',
            '*.date.*.time' => 'required|date_format:H:i',
            '*.date.*.is_unavailable' => 'required|boolean'
        ]);

        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(", " , $validator->errors()->all())]);
        }

        try{
            DB::beginTransaction();
            $response = $this->scheduleHandler->updateAvailabilitySchedule($request);
            DB::commit();
            return response()->json($response);
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['status' => false , 'error' => $e->getMessage()]);
        }

    }

    public function createWeeklySchedule(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'schedule' => 'required|stirng'
        ]);

        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(", " , $validator->errors()->all())]);
        }

        $schedules = json_decode($request->schedule , TRUE);

        $validator = Validator::make($schedules , [
            '*.day' => 'required|numeric',
            '*.time' => 'required|date_format:H:i'
        ]);

        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(", " , $validator->errors()->all())]);
        }

        try{
            $response = $this->scheduleHandler->createWeeklySchedule($request);
            return response()->json($response);
        }catch(\Exception $e){
            return response()->json(['status' => false , 'error' => $e->getMessage()]);
        }
    }

    public function createSchedulePage()
    {
        return view('schedule');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{ AvailabilitySchedule , WeeklySchedule };
use Carbon\Carbon;
class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scheduleList = [];
        for($i=0 ; $i <= 7; $i++)
        {
            $futureDate = Carbon::now()->addDay($i);
            $date = $futureDate->format('Y-m-d');
            if($i != 5)
            {
                $randomNumber = rand(1,5);
                
                
                for($j=1; $j < $randomNumber; $j++)
                {
                    $addingMinutes = $j * 30;
                    $time = Carbon::create(0 , 0 , 0 , 12 , 0 , 0)->addMinutes($addingMinutes)->format("H:i");
                    $scheduleList[] = ['date' => $date , 'time' => $time, 'is_available' => 1];
                }
            }else{
                $scheduleList[] = ['date' => $date , 'time' => null , 'is_available' => 0];
            }
        }

        AvailabilitySchedule::insert($scheduleList);

        $weeklyScheduleList = [];
        $weekDays = [1 , 2, 3 ,4 ,5];
        foreach($weekDays  as $day){
            $randomNumber = rand(1,5);
            for($j=1; $j < $randomNumber; $j++)
            {
                $addingMinutes = $j * 30;
                $time = Carbon::create(0 , 0 , 0 , 12 , 0 , 0)->addMinutes($addingMinutes)->format("H:i");
                $weeklyScheduleList[] = ['day' => $day , 'time' => $time, 'is_available' => 1];
            }
        }

        WeeklySchedule::insert($weeklyScheduleList);


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Handlers\AppointmentHandler;

class AppointmentController extends Controller
{
    protected $appointmentHandler;

    function __construct(AppointmentHandler $appointmentHandler)
    {
        $this->appointmentHandler = $appointmentHandler;
    }

    public function addAppointment(Request $request)
    {
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Handlers\PetHandler;

class PetController extends Controller
{
    protected $petHandler;

    function __construct(PetHandler $petHandler)
    {
        $this->petHandler = $petHandler;
    }
}

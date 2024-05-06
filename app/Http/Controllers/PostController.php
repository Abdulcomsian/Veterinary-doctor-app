<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Handlers\PostHandler;

class PostController extends Controller
{
    protected $postHandler;

    function __construct(PostHandler $postHandler)
    {
        $this->postHandler = $postHandler;
    }
}

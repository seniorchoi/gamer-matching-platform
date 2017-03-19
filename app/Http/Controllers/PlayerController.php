<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    // just an alias for list
    public function index()
    {
        return $this->listing();
    }

    public function listing()
    {
        $list_view = view('player/list');
        
        return $list_view;
    }
}

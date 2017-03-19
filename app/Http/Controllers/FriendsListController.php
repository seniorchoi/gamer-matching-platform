<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendsListController extends Controller
{
    //


        // just an alias for list
        public function index()
        {
            return $this->listing();
        }

        public function listing()
        {
            $list_view = view('friend/list');

            return $list_view;
        }

}

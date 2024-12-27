<?php

namespace App\Controllers;

class ChatController extends BaseController
{

    public function index()
    {
        return view('chatApp/index'); // Directly render the chatApp/index view
      
  }
}
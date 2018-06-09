<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class SubmissionController extends Controller
{
   public function submissionView()
    {
        return view('submission');
    } 
}
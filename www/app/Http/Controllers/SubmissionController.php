<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Submission;

class SubmissionController extends Controller
{
   public function submissionView()
    {
        return view('submission');
    } 

    public function submissionPost(Request $request) 
    {
     $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'fasta' => 'required' ]);
     Submission::create($request->all()); 
    
     Mail::send('email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'fasta' => $request->get('fasta')
        ), function($message)
    {
        $message->from(env('MAIL_FROM_ADDRESS'));
        $message->to(env('MAIL_ADMIN'))->subject('Ion Channel Feedback');
    });
 
     return back()->with('success', 'Thanks for contacting us!'); 
    }
}
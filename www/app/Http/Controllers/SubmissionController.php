<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Submission;
use App\Mail\SubmitTask;

class SubmissionController extends Controller
{
   public function submissionView()
    {
        return view('submission');
    } 

    public function submissionPost(Request $request) 
    {   
    try {
        $content = '';
        if (\Request::hasFile('file') && \Request::file('file')->isValid()) {
            $upload = \Request::file('file');
            $file = $upload->move(storage_path() .'/uploads', rand(11111, 99999) . '.' . $upload->extension());
            $content = \File::get($file);
        } else {
            $content = \Request::get('fasta');
        }
        $task = [
            'name' => \Request::get('name'),
            'email' => \Request::get('email'),
            'status' => 'queue',
            'protein_id' => '',
            'created_at' => new \DateTime()
        ];
        $arr = preg_replace('/>.*/', '{{$0}}', $content);
        $arr = str_replace(["\r", "\n"], '', $arr);
        $arr = explode("{{", $arr);
        array_shift($arr);
        
        if (count($arr)==0)
        return redirect()->back()->withInput()->with('error', 'No fasta data found! Please follow the sample sequences and try again.');

        if (count($arr) > 20)
        return redirect()->back()->with('error', 'You reached the limitation of our web service! Please submit lower or equal 20 proteins per once.');

        foreach ($arr as $emt) {
            $pro = explode("}}", $emt);
            $protein = [
                'name' => $pro[0],
                'sequence' => $pro[1],
                'class_a' => '',
                'class_b' => '',
                'class_c' => '',
                'type' => ''
            ];
            $chk = \DB::table('task_details')->whereSequence($protein['sequence'])->first();
            if ($chk == null) {
                $id = \DB::table('task_details')->insertGetId($protein);
                $task['protein_id'] .= $id . ',';
            } else
                $task['protein_id'] .= $chk->id . ',';
        }
        $task['protein_id'] = substr_replace($task['protein_id'], "", -1);
        $id = \DB::table('tasks')->insertGetId($task);
        $name = \Request::get('name');
        
        \Mail::to($task['email'])->send(new SubmitTask($id,$name));
        return redirect('task/' . $id);
    } catch (Exception $ex) {
            return redirect()->back()->with('error', 'Invalid Data! Please try again!');
        }
    }
}   
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    public $table = 'submission';
 
    public $fillable = ['name','email','fasta'];
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectsController extends Controller
{

    public function listSubjects(){

        return view ('subjects.list-subjects');
    }
    public function AddSubjects(){

        return view ('subjects.add-subjects');
    }

    public function EditSubjects(){

        return view ('subjects.edit-subjects');
    }

}    


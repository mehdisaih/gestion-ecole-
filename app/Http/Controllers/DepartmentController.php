<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Departement;
use Brian2694\Toastr\Facades\Toastr;

class DepartmentController extends Controller
{

    public function listDepartment(){

        return view ('department.list-department');
    }
    /** index page department */
    public function indexDepartment()
    {
        return view('department.add-department');
    }
    
    /** edit record */
    public function editDepartment()
    {
        return view('department.edit-departmen');
    }

 /** Departement save record */
    public function departementSave(Request $request)
    {
    $request->validate([
        'departement_id'       => 'required|string',
        'departement_name'     => 'required|string',
        'head_of_departement'  => 'required|string',
        'no_of_students'       => 'required|string',
        
    ]);
    
    DB::beginTransaction();
    try {
       
        if(!empty($request->upload)) {
            $Departement = new Departement;
            $Departement->departement_id      = $request->departement_id;
            $Departement->departement_name    = $request->departement_name;
            $Departement->head_of_departement = $request->head_of_departement;
            $Departement->no_of_students      = $request->no_of_students;
            $Departement->save();

            Toastr::success('Has been add successfully :)','Success');
            DB::commit();
        }

        return redirect()->back();
       
    } catch(\Exception $e) {
        DB::rollback();
        Toastr::error('fail, Add new departement  :)','Error');
        return redirect()->back();
    }
    }
}
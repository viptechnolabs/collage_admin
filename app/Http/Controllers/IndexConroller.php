<?php

namespace App\Http\Controllers;

use App\DataTables\SchoolDataTable;
use App\Models\College;
use App\Models\School;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class IndexConroller extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function addSchool()
    {
        return view('add_school');
    }

    public function SubmitSchool(Request $request)
    {
        $rules = array(
            'school_name' => 'required',
            'school_code' => 'required|max:10|min:3',
            'school_contact' => 'required|max:13|min:7',
            'school_email' => 'required|max:50|min:7',
            'school_address' => 'required',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }
        else{
            $school = new School();
            $school->name = $request->school_name;
            $school->code = $request->school_code;
            $school->contact_no = $request->school_contact;
            $school->email = $request->school_email;
            $school->address = $request->school_address;
            $school->password = Hash::make('password');
            $school->save();
            session()->flash('message', 'School Add Successfully..!');
            return redirect()->back();

        }
    }

    public function School(SchoolDataTable $dataTable)
    {
        $schools = School::all();
        return $dataTable->render('school', ['schools' => $schools]);
        //return view('school');
    }

    public function addCollege()
    {
        return view('add_college');
    }

    public function College(SchoolDataTable $dataTable)
    {
        $colleges = College::all();
        return $dataTable->render('college', ['colleges' => $colleges]);
    }

    public function SubmitCollege(Request $request)
    {
        $rules = array(
            'college_name' => 'required',
            'college_code' => 'required|max:10|min:3',
            'college_contact' => 'required|max:13|min:7',
            'college_email' => 'required|max:50|min:7',
            'college_address' => 'required',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }
        else{
            $college = new College();
            $college->name = $request->college_name;
            $college->code = $request->college_code;
            $college->contact_no = $request->college_contact;
            $college->email = $request->college_email;
            $college->address = $request->college_address;
            $college->password = Hash::make('password');
            $college->save();
            session()->flash('message', 'College Add Successfully..!');
            return redirect()->back();

        }
    }

    public function addUniversity()
    {
        return view('add_university');
    }

    public function University(SchoolDataTable $dataTable)
    {
        $universities = University::all();
        return $dataTable->render('university', ['universities' => $universities]);
    }

    public function SubmitUniversity(Request $request)
    {
        $rules = array(
            'university_name' => 'required',
            'university_code' => 'required|max:10|min:3',
            'university_contact' => 'required|max:13|min:7',
            'university_email' => 'required|max:50|min:7',
            'university_address' => 'required',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }
        else{
            $university = new University();
            $university->name = $request->university_name;
            $university->code = $request->university_code;
            $university->contact_no = $request->university_contact;
            $university->email = $request->university_email;
            $university->address = $request->university_address;
            $university->password = Hash::make('password');
            $university->save();
            session()->flash('message', 'University Add Successfully..!');
            return redirect()->back();

        }
    }
}

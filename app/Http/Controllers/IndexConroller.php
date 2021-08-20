<?php

namespace App\Http\Controllers;

use App\DataTables\SchoolDataTable;
use App\Models\College;
use App\Models\School;
use App\Models\University;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
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


    public function addUniversity()
    {
        return view('add_university');
    }

    public function University()
    {
        $universities = University::with('user')->get();
        return view('university', ['universities' => $universities]);
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

            $user = new User();
            $user->user_type  ="university";
            $user->email = $request->university_email;
            $user->password = Hash::make('password');
            $user->save();

            $university = new University();
            $university->user_id  = $user->id;
            $university->name = $request->university_name;
            $university->code = $request->university_code;
            $university->contact_no = $request->university_contact;
            $university->address = $request->university_address;
            $university->save();
            session()->flash('message', 'University Add Successfully..!');
            return redirect()->route('university');

        }
    }

    public function addCollege()
    {
        $universities = University::all();
        return view('add_college', ['universities' => $universities]);
    }

    public function College(SchoolDataTable $dataTable)
    {
        $colleges = College::with('user')->get();
        //dd($colleges[0]->user->email);
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

            $user = new User();
            $user->user_type  ="college";
            $user->email = $request->college_email;
            $user->password = Hash::make('password');
            $user->save();


            $college = new College();
            $college->user_id = $user->id;
            $college->name = $request->college_name;
            $college->code = $request->college_code;
            $college->contact_no = $request->college_contact;
            $college->address = $request->college_address;
            $college->save();
            session()->flash('message', 'College Add Successfully..!');
            return redirect()->back();

        }
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

            $user = new User();
            $user->user_type  ="school";
            $user->email = $request->school_email;
            $user->password = Hash::make('password');
            $user->save();


            $school = new School();
            $school->user_id = $user->id;
            $school->name = $request->school_name;
            $school->code = $request->school_code;
            $school->contact_no = $request->school_contact;
            $school->address = $request->school_address;
            $school->save();
            session()->flash('message', 'School Add Successfully..!');
            return redirect()->back();

        }
    }

    public function School(SchoolDataTable $dataTable)
    {
        $schools = School::with('user')->get();
        return $dataTable->render('school', ['schools' => $schools]);
        //return view('school');
    }



}

<?php

namespace App\Http\Controllers;

use App\DataTables\SchoolDataTable;
use App\Models\College;
use App\Models\School;
use App\Models\Student;
use App\Models\University;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class IndexConroller extends Controller
{
    //

    public function login()
    {
        if (Auth::check())
        {
            return redirect()->route('index');
        }
        $users =  User::with('university')->where('user_type', 'admin')->orWhere('user_type', 'university')->get();
        return view('login', ['users' => $users]);
    }

    public function doLogin(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        if($user->user_type === 'admin')
        {
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'user_type' => 'admin'], $request->filled('remember')))
            {
                Session::put('userType', 'admin');
                return redirect()->route('index');
            }
            //Authentication failed...
            session()->flash('message', 'Login failed, please try again!');
            return redirect()
                ->back();
        }
        elseif ($user->user_type === 'university')
        {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'user_type' => 'university'], $request->filled('remember')))
            {
                Session::put('userType', 'university');
                return redirect()->route('index');
            }
            //Authentication failed...
            session()->flash('message', 'Login failed, please try again!');
            return redirect()
                ->back();
        }
        //Authentication failed...
        session()->flash('message', 'Login failed, please try again!');
        return redirect()
            ->back();
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()
            ->route('login')
            ->with('status', 'Logout successfully...!');
    }

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

    public function submitCollage(Request $request)
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
            $college->uni_id = Session::get('userType') === 'admin' ? $request->uni : Auth::user()->university->id;
            $college->name = $request->college_name;
            $college->code = $request->college_code;
            $college->contact_no = $request->college_contact;
            $college->address = $request->college_address;
            $college->save();
            session()->flash('message', 'College Add Successfully..!');
            return redirect()->route('college');

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
            return redirect()->route('school');

        }
    }

    public function School()
    {
        $schools = School::with('user')->get();
        return view('school', ['schools' => $schools]);
        //return view('school');
    }

    public function addStudent()
    {
        $colleges = College::all();
       // dd($colleges[0]->user);
        return view('add_student', ['colleges' => $colleges]);
    }

    public function SubmitStudent(Request $request)
    {
        $rules = array(
            'student_name' => 'required',
            'student_stream' => 'required',
            'student_dob' => 'required',
            'gender' => 'required',
            'student_clg' => 'required',
            'student_contact' => 'required|max:13|min:7',
            'student_email' => 'required|max:50|min:7',
            'student_address' => 'required',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }
        else
        {
            $student = new Student();
            $student->clg_id  = $request->student_clg;
            $student->name = $request->student_name;
            $student->stream = $request->student_stream;
            $student->dob = $request->student_dob;
            $student->email = $request->student_email;
            $student->contact_no = $request->student_contact;
            $student->gender = $request->gender;
            $student->address = $request->student_address;
            $student->save();
            session()->flash('message', 'Student Add Successfully..!');
            return redirect()->route('student');
        }
    }

    public function Student()
    {
        $students = Student::with('college')->get();
        return view('student', ['students' => $students]);
    }




}

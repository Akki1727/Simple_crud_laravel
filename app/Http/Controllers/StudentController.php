<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\BitwiseOr;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            //code...
            // $users = Student::get();  
            // return view('studentview',compact('users'));

            $users = Student::Paginate(10);
            return view('studentview',compact('users'));

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        try {
            //code...
            $data = [
                'fullname'  => $request->fullname,
                'email'  => $request->email,
                'address'  => $request->address,
                'number'  => $request->number,
            ];
            Student::create($data);

            return redirect('student');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $users = DB::table('student')->get();
        // return redirect('studentview',['users'=>$users]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $useredit = Student::findOrFail($id);
        return view('studentedit', compact('useredit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {

        $student = Student::find($id);
        // $useredit = Student::find($id);
        $updatedata = [
            'fullname' => $request->fullname,
            'email' => $request->email,
            'address' => $request->fullname,
            'number' => $request->number,
        ];

        $student->update($updatedata);
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Student::find($id)->delete();
    
        return redirect('student');
    }
}

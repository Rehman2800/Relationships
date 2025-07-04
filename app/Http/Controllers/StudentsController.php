<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Models\StdData;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = students::create([
            'name' => 'Rehman',
        ]);

        $student->stdData()->create([
            'email'=>'rehmanbasharat57@gmail.com',
            'grade' => 'F'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(students $students)
    {
        // $students = students::with('stdData')->get();
        $students = students::with('stdData')->where('id',1)->get();

        //When wehave to apply condition on inner table then we cannot use where directly for this we have to use the following query
        $students = students::withWhereHas('stdData',function($query){
            $query->where('grade','A+');
        })->get();

        //It will search in both tables but will display 

        // $students = students::all();
        return $students;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(students $students)
    {
        //
    }
}

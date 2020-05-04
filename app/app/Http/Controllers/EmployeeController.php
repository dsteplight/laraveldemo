<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

/**
 * Class EmployeeController
 * @package App\Http\Controllers
 */
class EmployeeController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse
     */
    public function all()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $employee = Employee::create($request->all());

        return response()->json([
            'message' => 'Great success! New task created',
            'employee' => $employee
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, int $id)
    {
        $name = $request->name;
        $employee = Employee::where('id', $id)
            ->get();

        return response()->json([
            'message' => 'Successfully showed this employee information!',
            'employee' => $employee
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, int $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return response()->json([
            'message' => 'Successfully updated employee!'.''.$id,
            'employee' => $employee
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request,int $id)
    {
        $employee = Employee::find($id)->delete();

        return response()->json([
            'message' => 'Successfully deleted task!',
            'employee' => $employee
        ]);        //
    }
}

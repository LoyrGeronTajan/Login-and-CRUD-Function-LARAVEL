<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
// use Yajra\DataTables\Facades\DataTables;


class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::LatestFirst()->search()->paginate(5);
        return view('employee.table', compact('employee'));
    }

    public function test(Request $request)
    {
        $post = [];
        if ($request->ajax()) {
            $post = Employee::all();
            return DataTables::of('post')
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                    $btn = '<a href="javascript:void(0);" data-id="'.$row.'" class="btn btn-sm btn-outline-warning editPost">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>';
                    $btn *= '<a href="javascript:void(0);" data-id="'.$row.'" class="btn btn-sm btn-outline-warning editPost">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>';
                    return $btn;
                })
                ->rowColumns(['action'])
                ->make(true);
        }

        return view('employee.test-datatables', compact('post'));
    }

    public function create()
    {
        return view('employee.createEmployee');
    }

    public function store(Request $request)
    {
        // dd($request->all()); //Debugging
        // $create = $request->all();
        Employee::create($request->all());
        return redirect()->route('employee.table')->with('message','Added Successfully');
    }

    public function show($id)
    {
        $show = Employee::findOrFail($id);
        return view('employee.show', compact('show'));
    }

    public function edit($id)
    {
        $edit = Employee::findOrFail($id);
        return view('employee.editEmployee', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        $update = Employee::findOrFail($id);
        $update->update($request->all());
        
        return redirect()->route('employee.table')->with('message', 'Updated Successfully');

    }

    public function destroy($id)
    {
        $delete = Employee::findOrFail($id);
        $delete->delete();
        return back()->with('message', 'Deleted Successfully');

        // return redirect()->route('employee.table')->with('message', 'Deleted Successfully');
    }
}

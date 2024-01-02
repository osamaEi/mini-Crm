<?php

namespace App\Http\Controllers;

use App\Models\ActionType;
use App\Models\Action_Type;
use Illuminate\Http\Request;

class ActionTypeController extends Controller
{
    public function index() {

        $action_types = ActionType::all();

        return view('admin.action.index',compact('action_types'));
    } 

    public function view_employee() {

        $action_types = ActionType::all();

        return view('employee.action.index',compact('action_types'));
    } 

    public function store(Request $request) {


        ActionType::create([

            'name' => $request->name

        ]);

        return redirect()->back();


    }
}

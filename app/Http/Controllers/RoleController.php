<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Illuminate\Support\Facades\Input;
use Auth;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::all();
        return view('admin.role.index',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            // 'id' => 'required|string|max:255',
            'name' => 'required|string',
            'displayName' => 'required|string',
        ]);
            //dd(Input::get("name"));
            $role = new Role;
            $role->user_id = Auth::user()->id;
            $role->name = Input::get("name");     
            $role->displayName = Input::get("displayName");
            $role->save();
            return redirect()->route('roles.index')->with('message','This item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $role = Role::findOrFail($id);
        //dd($staffs);
        //$roles = Role::pluck('name','id')->all();
        return view('admin.role.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            // 'id' => 'required|string|max:255',
            'name' => 'required|string',
            'displayName' => 'required|string',
        ]);
            $role = Role::findOrFail($id);
            $role->name = Input::get("name");     
            $role->displayName = Input::get("displayName");
            $role->save();
            return redirect()->route('roles.index')->with('message','This item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('roles.index')->with('message','This item deleted successfully');
    }
}

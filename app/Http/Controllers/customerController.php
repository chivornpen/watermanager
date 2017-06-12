<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use App\Customer;
use App\User;
use App\Province;
use App\District;
use App\Commune;
use App\Village;
use Auth;
use Illuminate\Support\Facades\Input;
//use vendor\symfony\console\Input\input;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        $user = User::all();
        // dd($customers);
        return view('admin.customer.index',compact('customer','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
         $provinces = Province::pluck('name','id')->all();
         $districts = District::pluck('name','id')->all();
         $communes = Commune::pluck('name','id')->all();
         $villages = Village::pluck('name','id')->all();
        return view('admin.customer.create',compact('provinces','districts','communes','villages'));
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            // 'id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'contactNo' => 'required|numeric|min:8',
            'email' => 'required|string|email|max:255|unique:customers',
            'homeNo' => 'required|string|max:255',
            'streetNo' => 'required|string|max:255',
            'village_id' => 'required',
            'district_id' => 'required',
            'commune_id' => 'required',
            'province_id' => 'required',
            //'cusbc' => 'required|string|max:255',
            //'cusqr' => 'required|string|max:255',
            // 'user_id' => 'required|string|max:255',
            // 'cusStatus' => 'required|string|max:255',
            // 'authorizer' => 'required|string|max:255',
            // 'authorize_date' => 'required|string|max:255',
            // 'recordStatus' => 'required|string|max:255',
            // 'recordNum' => 'required|string|max:255',
        ]);
            // $user = Auth::user()->id;
            // $user->user_id = Input::get('user_id');

            $customer = new Customer;
            $customer->user_id = Auth::user()->id;
            $customer->name = $request->name;
            $customer->contactNo = Input::get("contactNo");
            $customer->email = Input::get("email");
            $customer->homeNo = Input::get("homeNo");
            $customer->streetNo = Input::get("streetNo");
            $customer->village_id = Input::get("village_id");
            $customer->district_id = Input::get("district_id");
            $customer->commune_id = Input::get("commune_id");
            $customer->province_id = Input::get("province_id");
            $customer->cusbc = Input::get("cusbc");
            $customer->cusqr = Input::get("cusqr");
            $customer->cusStatus = Input::get("cusStatus");
            // $customer->user_id = Input::get("user_id");
            // $customer->authorizer = Input::get("authorizer");
            // $customer->authorize_date = Input::get("authorize_date");
            // $customer->recordStatus = Input::get("recordStatus");
            // $customer->recordNum = Input::get("recordNum");
            $customer->save();
            return redirect()->route('customers.index')->with('message','This item created successfully');
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
         $customer = Customer::findOrFail($id);
        //dd($staffs);
        //$roles = Role::pluck('name','id')->all();
         $provinces = Province::pluck('name','id')->all();
         $districts = District::pluck('name','id')->all();
         $communes = Commune::pluck('name','id')->all();
         $villages = Village::pluck('name','id')->all();
        return view('admin.customer.edit',compact('customer','provinces','districts','communes','villages'));
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
            'name' => 'required|string|max:255',
            'contactNo' => 'required|numeric|min:8',
            'homeNo' => 'required|string|max:255',
            'streetNo' => 'required|string|max:255',
            'village_id' => 'required',
            'district_id' => 'required',
            'commune_id' => 'required',
            'province_id' => 'required',
            //'cusbc' => 'required|string|max:255',
            //'cusqr' => 'required|string|max:255',
            // 'user_id' => 'required|string|max:255',
            // 'cusStatus' => 'required|string|max:255',
            // 'authorizer' => 'required|string|max:255',
            // 'authorize_date' => 'required|string|max:255',
            // 'recordStatus' => 'required|string|max:255',
            // 'recordNum' => 'required|string|max:255',
        ]);
            $customer = Customer::findOrFail($id);
            $customer->name = $request->name;
            $customer->contactNo = Input::get("contactNo");
            $customer->homeNo = Input::get("homeNo");
            $customer->streetNo = Input::get("streetNo");
            $customer->village_id = Input::get("village_id");
            $customer->district_id = Input::get("district_id");
            $customer->commune_id = Input::get("commune_id");
            $customer->province_id = Input::get("province_id");
            // $user->cusbc = Input::get("cusbc");
            // $user->cusqr = Input::get("cusqr");
            // $user->user_id = Input::get("user_id");
            // $user->cusStatus = Input::get("cusStatus");
            // $user->authorizer = Input::get("authorizer");
            // $user->authorize_date = Input::get("authorize_date");
            // $user->recordStatus = Input::get("recordStatus");
            // $user->recordNum = Input::get("recordNum");
            $customer->save();
            return redirect()->route('customers.index')->with('message','This item created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index')->with('message','This item deleted successfully');
    }
}

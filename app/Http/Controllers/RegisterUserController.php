<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use App\Models\Industry;
use Illuminate\Http\Request;
use App\Models\ProductIndustry;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegisterUserController extends Controller
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
        $industries = Industry::all();

        $product_industries = ProductIndustry::all();
       return view("register",[
        "industries"=> $industries,
        "product_industries"=> $product_industries
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

$user = User::create([
    "name"=> $request->name,
    "email"=> $request->email,
    "password"=> Hash::make($request->password),
]);

// if($user->id){
//     $customer= Customer::create([

//     ]);
// }

event(new Registered($user));



    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

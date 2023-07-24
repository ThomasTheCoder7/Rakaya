<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('etqan');
    }

    public function save(Request $request){
        //validation rules

        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255'
        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back()->with('message','Profile Updated');
    }

    public function delete(Request $request){
        
        $user = Auth::user();

        if(password_verify($request->password, $user->password)){
            Auth::logout();
            $user->delete();
            return response(201);
        }
        
        return response()->json(['errors'=>'كلمة المرور غير صحيحة'])->setStatusCode(400);

    }
}

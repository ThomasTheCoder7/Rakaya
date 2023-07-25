<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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

    public function save(Request $request)
    {
        //validation rules
        // dd($request);
        $request->validate([
            'name' => 'required|min:4|string|max:255',
            'email' => 'required|email|string|max:255',
            'avatar' => 'image',
            'phone' => ['regex:^5\d{8}$^', Rule::unique('users')->ignore(auth()->user()->id)],
            'user_type' => ['in:consultant,developer,client,intern'],
        ]);
        // if (!$request->hasFile('image')) {
        //     $filename = $request->image->getClientOriginalName();
        //     $request->avatar->storeAs('avatar', $filename, 'public');
        //     dd($request);
        //     User::find(1)->update(['avatar' => $filename]);
        // }
        // dd($request);
        $user = Auth::user();
        if ($request->has('avatar')) {
            // $image = $request->file('avatar');
            // $name = Str::slug($user->id);
            // $folder = '/avatars';
            // $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            $path = Storage::disk('public')->putFileAs(
                'avatars', $request->file('avatar'), $user->id . '.png'
            );
            $user->avatar = $path;
        }

        // $filename = $user->email . 'avatar';
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->user_type = $request['user_type'];
        $user->save();
        return back()->with('message', 'Profile Updated');
    }

    public function destroy(Request $request)
    {

        $user = Auth::user();

        if (password_verify($request->password, $user->password)) {
            Auth::logout();
            $user->delete();
            return response(201);
        }

        return response()->json(['errors' => 'كلمة المرور غير صحيحة'])->setStatusCode(400);

    }
}
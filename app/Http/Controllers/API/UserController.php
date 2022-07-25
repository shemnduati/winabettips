<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
  
    
    public function index()
    {
    
        return User::latest()->paginate(10);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'sometimes|required|min:6',
            'phone' => 'required|string|min:10',

        ]);

        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone'  => $request['phone'],
            'role' => $request['role'],
        ]);
    }
    public function update(Request $request, $id)
            {
         $user = User::FindOrFail($id);   
         $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'phone' => 'required|string|min:10',
            'role' => 'required|string',
        ]);
        $user->update($request->all());
        return ['message' => "Success"];
    }
    public function updateProfile(Request $request)
    {
        $user =  auth()->user();
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'password' => 'sometimes|required|min:6',
        ]);

        if(!empty($request->password)){
            $request->merge(['password' => Hash::make($request['password'])]);
        }


        $user->update($request->all());
        return ['message' => "Success"];
    }
    public function profile()
    {
        return auth('api')->user();
    }
   
    public function destroy($id)
    {
        $user = User::FindOrFail($id);
        $user->delete();
        return ['message' => 'User Deleted'];
    }

}

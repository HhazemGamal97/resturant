<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data =  $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => ['sometimes', 'confirmed'],
            'phone'  => 'required|regex:/^(\+)[0-9]{10,15}$/'

        ]);
    //    $user =  User::Create($data);
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = \Hash::make($request->password);
    $user->phone = $request->phone;
    $user->save();
        return response()->json([
            'message' => 'you are register successfully',
            'token' => $user->createToken('user_token', ['server:show'])->plainTextToken
        ], 201);
    }

    public function Login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $data['email'])->first();
        if(is_null($user) || !\Hash::check($data['password'], $user->password))
        {
            return response()->json([
                'message' => "your login is faild"
            ]);
        }

        return response()->json([
            'message' => 'login successfully',
            'token' => $user->createToken('user_token', ['server:show'])->plainTextToken,
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json([
            'message' => __('message.logged out'),
        ], 200);
    }

    public function show_profile(){
        $user = User::where('id', \Auth::user()->id)->first();
        return response()->json($user);
    }

    public function update_userData(Request $request){
        $data = $request->validate([
            'email' => 'email|nullable|unique:users',
            'name' => 'string|nullable',
            'phone' => 'string|regex:/^(\+)[0-9]{10,15}$/|nullable',
        ]);

        $user = User::where('email', \Auth::user()->email)->first();
        if(!empty($request->email)){
            $user->email = $request->email;
        }
        if(!empty($request->name)){
            $user->name = $request->name;
        }

        if(!empty($request->phone)){
            $user->phone = $request->phone;
        }

        $user->save();
        return response()->json([
            'message' => 'the data updated successfully'
        ],201);
    }

    public function password()
    {
        // validate request
        $this->validate(request(), [
            'password'  => ['required'],
            'new_password'  => ['required'],
        ]);

        // get user
        $user = Auth::user();

        // check if password is correct
        if (!Hash::check(request('password'), $user->password)) {
            return response()->json([
                'message' => 'error in the password',
                'data' => null
            ], 400);
        }

        // update password
        $user->password = bcrypt(request('new_password'));
        $user->save();

        // json response
        return response()->json([
            'message' => 'change_password',
            'data' => null
        ], 200);
    }

}

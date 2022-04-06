<?php
namespace App\Http\Controllers\Api;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class UserController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        if (!auth()->attempt($data)) {
            return response([
                'status' => (bool)auth()->user(),
                'message' => 'you should register first!',
            ]);
        }
        $token = auth()->user()->createToken('API Token')->accessToken;
        return response()->json([
            'status' => (bool)auth()->user(),
            'user'   => auth()->user(),
            'message' => 'success login!' ,
            'token' => $token
        ], 201);
    }


    public function loginAdmin(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        if (!auth()->attempt($data)) {
            return response([
                'status' => (bool)auth()->user(),
                'message' => 'you should register first!',
            ]);
        }
        $token = auth()->user()->createToken('API Token')->accessToken;
        return response()->json([
            'status' => (bool)auth()->user(),
            'user'   => auth()->user(),
            'message' => 'success login!' ,
            'token' => $token
        ], 201);
    }  

    public function logout (Request $request)
    {
        $token =$request->user()->token();
        $token->delete();
        $response =["massage"=>"you have success logout "];
        return response($response,200);
    }

    public function register(Request $request)
    {

        $rules = array(
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'phone'=>'required',
            'collage'=>'required',
            'student_address'=>'required',
            
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return [
                'status' => false,
                'message' => $validator->errors()->first()
            ];
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'collage'=>$request->collage,
            'student_address'=>$request->student_address,
            'password_confirmation'=>$request->password_confirmation,

        ]);
        $token = $user->createToken('API Token')->accessToken;
        return response()->json([
            'status' => (bool) $user,
            'user'   => $user,
            'message' => $user ? 'success register!' : 'an error has occurred',
            'token' => $token
        ], 201);
    }
   

}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\PayloadFactory;
use Tymon\JWTAuth\JWTManager as JWT;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->json()->all() , [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if($validator->fails()){
            $data = '{"status":0,"data":{"msg":'.$validator->errors()->toJson().',"success":0}}';
            return $data;
        }

        $user = User::create([
            'name' => $request->json()->get('username'),
            'email'=> $request->json()->get('email'),
            'password' => Hash::make($request->json()->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        $data = '{"status":0,"data":{"success":1,"token":"'.$token.'","id":'.$user->id.',"name":"'.$user->name.'"}}';
        return $data;

    }

    public function login(Request $request)
    {
        // $data = '{"status":9,"data":{"id":7,"username":"jack"
        //     ,"password":"","email":"jack@163.com","phone":null,"question":null}}';
        // return $data;
        $credentials = $request->json()->all();

        if (! $token = auth('api')->attempt($credentials)) {
            $data = '{"status":0,"data":{"msg":"帳號或密碼錯誤","success":0}}';
            return $data;
        }

        //$this->respondWithToken($token);
        //$atoken = type($token);
        // $aName = auth()->user()->name;
        //$res = response()->json(auth()->user()->name);
        $data = '{"status":0,"data":{"success":1,"token":"'.$token.'","id":'.auth()->user()->id.',"name":"'.auth()->user()->name.'"}}';
        return $data;
    }

    public function logout()
    {
        // $credentials = $request->json()->all();

        // if (! $token = auth()->attempt($credentials)) {
        //     $data = '{"status":0,"data":{"msg":"登出失敗","success":0}}';
        //     return $data;
        // }
        JWTAuth::parseToken()->invalidate();
        // if (! auth()->logout()) {
        //     $data = '{"status":0,"data":{"msg":"登出失敗","success":0}}';
        //     return $data;
        // }

        $data = '{"status":0,"data":{"msg":"登出成功","success":1}}';
        return $data;
    }

    public function getAuthenticatedUser()
    {
        try{
            if(!$user == JWTAuth::parseToken()->authenticate()){
                return response()->json(['user_not_found'], 404);
            }
        }catch(Tymon\JWTAuth\Exceptions\TokenExpireException $e){
            return response()->json(['token_expired'],$e->getStatusCode());
        }catch(Tymon\JWTAuth\Exceptions\TokenExpireException $e){
            return response()->json(['token_invalid'],$e->getStatusCode());
        }catch(Tymon\JWTAuth\Exceptions\TokenExpireException $e){
            return response()->json(['token_absent'],$e->getStatusCode());
        }

        return response()->json(compact('user'));
    }

    protected function respondWithToken($token)
    {
        return '{
            "access_token":"'.$token.'",
            "token_type":"bearer",
            "expires_in":'.(auth()->factory()->getTTL() * 60).'
        }';
    }
}

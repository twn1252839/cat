<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
  // 建構子
  public function __construct()
  {
    // 除 login 之外，其他方法都要納入 auth:api 中介層保護
    $this->middleware('auth:api')->except('login');
  }

  public function login()
  {
    $credentials = request(['email', 'password']);

    try {
      // 嘗試進行登入驗證，成功的話就返回 token
      if (!$token = auth()->guard('api')->attempt($credentials)) {
        return response()->json(['status' => 0, 'message' => '無效的驗證資料'], 401);
      }
    } catch (JWTException $e) {
      return response()->json([
        'error' => '無法建立 Token'
      ], 500);
    }

    // 以 JSON 格式來進行回應，內容為參數
    return response()->json(['status' => 1, 'token' => $token]);
  }

  public function me()
  {
    // auth()->user() 取得登入者的資料
    return response()->json(auth()->user());
  }

  public function logout()
  {
    // 登出
    Auth::logout();
    return response()->json(['status' => 1]);
  }
}
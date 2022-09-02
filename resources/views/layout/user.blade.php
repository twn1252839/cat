@extends('layout.master')

@section('user')
    @if (isset($user))
        @switch($user->permission)
            @case('admin')
                <div class="dropdown">
                    <button class="btn dropdown-toggle membercolorsite" type="button" data-bs-toggle="dropdown"><span
                            class="membercolor1-1   button-44-ac button-44-ac0">會員：</span><span class="membercolor1-2">
                            {{ $user->username }}
                        </span></button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item membercolor" href=" {{ url('/login/edit') }} ">修改會員</a></li>
                        <li><a class="dropdown-item membercolor" href=" {{ url('/login/show') }} ">會員資訊</a></li>
                        <li><a class="dropdown-item membercolor" href=" {{ url('/user/Sponsor') }} ">個人捐款紀錄</a></li>
                        <li><a class="dropdown-item membercolor" href=" {{ url('/') }} ">登出</a></li>
                    </ul>
                </div>
            @break

            @case('user')
                <p>user</p>
            @break

            @default
                <p>default</p>
        @endswitch
    @else
        <a href=" {{ route('login.index') }} " class="button-44-ac"> 登入/註冊 </a>
    @endif
@endsection

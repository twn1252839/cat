@extends('layout.master')

@section('user')
    {{-- {{$username}} --}}
    {{-- <li class="list-unstyled text-center h3">123</li><span class="text-danger">~歡迎登入~</span> --}}

    @if ($user == '123')
        <div class="dropdown">
            <button class="btn dropdown-toggle membercolorsite" type="button" data-bs-toggle="dropdown"><span
                    class="membercolor1-1   button-44-ac button-44-ac0">會員：</span><span class="membercolor1-2">
                    {{ $user }} </span></button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item membercolor" href="#">修改會員</a></li>
                <li><a class="dropdown-item membercolor" href="#">個人捐款紀錄</a></li>
            </ul>
        </div>
    @else
        <a href="#" class="button-44-ac"> 登入/註冊 </a>
    @endif
@endsection

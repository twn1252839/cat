{{-- @extends('layout.master') --}}
@extends('layout.user')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12 title_1">NEWS<span class="title_2">公益活動</span></div>
            <div class="col title_3">CharitableActivities</div>
        </div>
        <div class="row">

            <div class="col-4"><img src="{{ asset('images/menu1.png') }}" class="imgW">
                <h4> $1000 </h4><br>
                <h4> 樣數: <input type="text" name="" id="" placeholder="0"></h4><br>
                <br>
                {{-- {{ url('/animals/sponsor/index', ) }} --}}
                <a href="#" class="btn button-addyin">加入選項</a>
            </div>

        </div>

    </div>
@endsection

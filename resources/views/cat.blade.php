{{-- @extends('layout.master') --}}
@extends('layout.user')

@section('content')
    <div class="container">
        <!-- body -->
        <div class="row">
            <div class="col-12 title_1">NEWS<span class="title_2">汪星人</span></div>
            <div class="col title_3">DOG TRIBE</div>
        </div>
        <!-- 圖片開始 -->
        <div class="row">

            @foreach ($cats as $cat)
                <div class="col-4"><img src=" {{ asset('images/cat1.png') }} " class="imgW">
                    <h4> {{ $cat->remark }} </h4><br>
                    <H6> {{ $cat->remark }} </H6><br>
                    <h5>目前有n位，尚缺n位助養主人<div class="btn button-addyin">加入助養</div>
                    </h5>
                </div>
            @endforeach

        </div>

    </div>
@endsection

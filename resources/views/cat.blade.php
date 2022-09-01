{{-- @extends('layout.master') --}}
@extends('layout.user')

@section('content')
    <div class="container">
        <!-- body -->
        <div class="row">
            <div class="col-12 title_1">NEWS<span class="title_2">喵星人</span></div>
            <div class="col title_3">CAT TRIBE</div>
        </div>
        <!-- 圖片開始 -->
        <div class="row">

            @if (isset($cats))
                @foreach ($cats as $cat)
                    <div class="col-4"><img src="{{ asset($cat->pic) }}" class="imgW">
                        <h4> {{ $cat->remark }} </h4><br>
                        <H6> {{ $cat->aniname }} </H6><br>
                        <br>
                        <h5>目前有n位，尚缺n位助養主人<a href=" {{ url('/animals/sponsor/index', $cat->id) }} "
                                class="btn button-addyin">加入助養</a>
                        </h5>
                    </div>
                @endforeach
            @else
                @foreach ($cats as $cat)
                    <div class="col-4"><img src="{{ asset($cat->pic) }}" class="imgW">
                        <h4> {{ $cat->remark }} </h4><br>
                        <H6> {{ $cat->aniname }} </H6><br>
                        <br>
                        <h5>目前有n位，尚缺n位助養主人<a href=" {{ url('/animals/sponsor/index', $cat->id) }} "
                                class="btn button-addyin">加入助養</a>
                        </h5>
                    </div>
                @endforeach
            @endif


        </div>

    </div>
@endsection

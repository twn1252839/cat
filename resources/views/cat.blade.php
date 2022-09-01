{{-- @extends('layout.master') --}}
@extends('layout.user')

@section('content')
    <div class="container">

        <!-- body -->
        @if (isset($cats))
            <div class="row">
                <div class="col-12 title_1">NEWS<span class="title_2">喵星人</span></div>
                <div class="col title_3">CAT TRIBE</div>
            </div>
            <div class="row">

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
            </div>
        @elseif (isset($dogs))
            <div class="row">
                <div class="col-12 title_1">NEWS<span class="title_2">汪星人</span></div>
                <div class="col title_3">DOG TRIBE</div>
            </div>
            <div class="row">

                @foreach ($dogs as $dog)
                    <div class="col-4"><img src="{{ asset($dog->pic) }}" class="imgW">
                        <h4> {{ $dog->remark }} </h4><br>
                        <H6> {{ $dog->aniname }} </H6><br>
                        <br>
                        <h5>目前有n位，尚缺n位助養主人<a href=" {{ url('/animals/sponsor/index', $dog->id) }} "
                                class="btn button-addyin">加入助養</a>
                        </h5>
                    </div>
                @endforeach
            </div>
        @else
           <div class="row">
                <div class="col-12 title_1">NEWS<span class="title_2">外星人</span></div>
                <div class="col title_3">LIST TRIBE</div>
            </div>
            <div class="row">

                @foreach ($lists as $list)
                    <div class="col-4"><img src="{{ asset($list->pic) }}" class="imgW">
                        <h4> {{ $list->remark }} </h4><br>
                        <H6> {{ $list->aniname }} </H6><br>
                        <br>
                        <h5>目前有n位，尚缺n位助養主人<a href=" {{ url('/animals/sponsor/index', $list->id) }} "
                                class="btn button-addyin">加入助養</a>
                        </h5>
                    </div>
                @endforeach
            </div>
        @endif

    </div>
@endsection

{{-- @extends('layout.master') --}}
@extends('layout.user')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-5"><img src="{{ asset($id->pic) }}" class="img-thumbnail"></div>
            <div class="col-7">
                <div class="row">
                    <div class="col-4"><img src=" {{ asset($id->pic) }} " class="img-thumbnail"></div>
                    <div class="col-4"><img src="{{ asset($id->pic) }}" class="img-thumbnail"></div>
                    <div class="col-4"><img src="{{ asset($id->pic) }}" class="img-thumbnail"></div>
                </div>
                <div class="row">
                    <div class="col-4"><img src="{{ asset($id->pic) }}" class="img-thumbnail"></div>
                    <div class="col-4"><img src="{{ asset($id->pic) }}" class="img-thumbnail"></div>
                    <div class="col-4"><img src="{{ asset($id->pic) }}" class="img-thumbnail"></div>
                </div>
            </div>
        </div>

        <h4>捐款助養流浪貓狗-{{$id->aniname}} 生活費 NT$500-NT$3,000</h4>
        <div class="textarea" style="font-size:12px;">每隻流浪一個月的生活費大約3000元(包含吃/醫療)。 <span
                style="color:red;">可以申請信用卡固定扣款，為他的助養主人。
                於結帳畫面取「定期定款捐款」，選擇一/二/三/五年</span></div><br>
        <h4 style="color:#E8C174">自填金額捐款請點此<br></h4>
        <h5>助養生活費
            <select>
                <option>請選取一個選項</option>
                <option>助養3000元</option>
                <option>助養1000元</option>
                <option>助養500元</option>
            </select>
        </h5>


        <div class="btn button-addyin offset-11">加入助養</div>
    </div>

@endsection

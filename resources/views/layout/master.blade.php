<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="./css/css.css" /> --}}
    <style>
        .AreaSpace_3 {
            height: 60px;
        }

        .imgW {
            width: 320px;
        }

        h4 {
            font-size: 20px;
        }

        h5 {
            font-size: 16px;
        }

        .col-4 {
            line-height: 0px;
        }

        .footerspaceArea {
            height: 40px;
        }


        .button-44 A {
            margin-top: 60px;
            margin-bottom: 60px;
            margin-right: 32px;
            margin-left: 32px;
            color: #b13954;
            background: #fffdff;
            border-radius: 11px;
            border-color: #b13954;
            border: 1px solid;
            box-sizing: border-box;
            cursor: pointer;
            display: flex;
            font-size: 14px;
            font-weight: 700;
            justify-content: center;
            line-height: 16px;
            height: 24px;
            text-align: center;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
            width: 100%;
            padding: 4px 0px;
        }

        .button-44-ac A {
            margin-top: 60px;
            margin-bottom: 60px;
            margin-right: 32px;
            margin-left: 32px;
            color: #ffe1dd;
            background: #f94b55;
            border-radius: 11px;
            border-color: #b13954;
            border: 1px solid;
            box-sizing: border-box;
            cursor: pointer;
            display: flex;
            font-size: 14px;
            font-weight: 700;
            justify-content: center;
            line-height: 16px;
            height: 24px;
            text-align: center;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
            width: 100%;
            padding: 4px 0px;
        }

        A {

            text-decoration: none;
            padding: 8px 15px;
            /* color: #000; */
        }

        .button-addyin {
            background-color: #00C2AE;
            border: 1px solid #2A8387;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            /* line-height: 100%; */
            width: 100px;
            margin-top: 12px;
            outline: 0;
            text-align: center;
        }

        #backpic {
            background-attachment: fixed;
            background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url({{ asset('images/backpic.jpg') }});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 400px;
        }

        .img3s {
            position: relative;

            /* width: 200px;
      height: 200px; */
            padding: .25rem;
            max-width: 100%;
            height: auto;
        }

        .text3s {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: red;
            margin-top: 32px;
        }

        .TextArea {
            margin-top: 72px;
            margin-bottom: 36px;
        }

        .title3 {
            margin-bottom: 16px;
        }

        .button-knowmore {
            background-color: #00c2ae;
            border: 1px solid #2a8387;
            color: #ffffff;
            cursor: pointer;
            display: inline-block;
            /* line-height: 100%; */
            width: 100px;
            margin-top: 12px;
            outline: 0;
            text-align: center;
        }

        .picabout {
            width: 480px;
            height: auto;
        }

        .imgW {
            width: 320px;
        }

        h4 {
            font-size: 20px;
        }

        h5 {
            font-size: 16px;
        }

        .col-4 {
            line-height: 0px;
        }

        .footerspaceArea {
            height: 40px;
        }


        .button-44 {
            color: #b13954;
            background: #fffdff;
            border-radius: 11px;
            border-color: #b13954;
            border: 1px solid;
            box-sizing: border-box;
            cursor: pointer;
            display: flex;
            font-size: 14px;
            font-weight: 700;
            justify-content: center;
            line-height: 16px;
            height: 24px;
            text-align: center;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
            width: 64px;
            padding: 4px 0px;
        }

        .button-44-ac {
            color: #ffe1dd;
            background: #f94b55;
            border-radius: 11px;
            border-color: #b13954;
            border: 1px solid;
            box-sizing: border-box;
            cursor: pointer;
            display: flex;
            font-size: 14px;
            font-weight: 700;
            justify-content: center;
            line-height: 16px;
            height: 24px;
            text-align: center;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
            width: 64px;
            padding: 4px 0px;
        }

        .button-addyin {
            background-color: #00c2ae;
            border: 1px solid #2a8387;
            color: #ffffff;
            cursor: pointer;
            display: inline-block;
            /* line-height: 100%; */
            width: 100px;
            margin-top: 12px;
            outline: 0;
            text-align: center;
        }

        A {
            text-decoration: none;
            /* padding: 8px 15px; */
            /* color: #000; */
        }

        A:hover {
            text-decoration: none;
        }

        /* news */
        .title_1 {
            font-size: 48px;
            color: #feb9c0;
            font-weight: 700;
            margin-bottom: 0px;
            padding-bottom: 0px;
        }

        .title_2 {
            font-size: 24px;
            color: #00c2ae;
            font-weight: 700;
            margin-bottom: 0px;
            padding-bottom: 0px;
        }

        .title_3 {
            position: abosulte;
            top: -20px;
            left: 6px;
            font-size: 12px;
            margin-top: 0px;
            padding-top: 0px;
        }
    </style>
    <link rel="stylesheet" href="/catdog_index.css">
    <link rel="stylesheet" href="{{ asset('cat.css') }} ">
</head>

<body>
    <div class="container-fluid p-0">

        <div class="container">
            <!-- nav -->
            <div class="row">

                <div class="offset-2 col-8 d-flex justify-content-around align-items-center">
                    @section('user')
                        {{-- @parent --}}
                    @show
                    <a href="{{url('Sponsor')}}#" class="button-44">線上捐款</a>
                    <a href="{{url('/')}}"><img src="{{ asset('images\logo.png') }}"></a>
                    <a href="{{url('/')}}" class="button-44">公益活動</a>
                    <a href="{{url('/')}}" class="button-44">查詢助養</a>
                    {{-- <ul class="pt-3">@yield('name')</ul> --}}
                </div>

            </div>
            @yield('title')
        </div>

        @yield('content')
    </div>

    <!-- footer -->
    <div class="container-fluid bg-danger text-white">
        <div class="footerspaceArea"></div>

        <div class="row">
            <div class="offset-0 offset-sm-3 offset-md-3 col-1"><img src="{{ asset('images/logo.png') }}"></div>
            <div class="offset-3 offset-sm-2 offset-md-1 col">
                團隊名稱： 跨平台網頁03組<br>
                隊員介紹： 11何韋賢_19謝志廷_21何松霖
            </div>
        </div>
        <div class="row">
            <div class="col text-center text-white-50">
                版權所有©2020-2025 流浪貓狗助養及募資平台 保留所有權
            </div>
        </div>
        <div class="footerspaceArea"></div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

</html>

{{-- @extends('layout.master') --}}
@extends('layout.user')

@section('content')
    <style>
        * {
            box-sizing: border-box;
            /* font-family: '微軟正黑體'; */
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

        /* nav */


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

        .TITLEBLUE {
            font-size: 36px;
            color: white;
            background-color: #0CB0B7;

        }


        .backgourndout {
            padding: 20px 20px;
            box-sizing: border-box;
        }


        .backgournd4-1 {
            background-color: #FEF3DD;
            box-sizing: border-box;
            /* DISplay: inline-block; */
            /* margin: 10px 10px; */
            /* width: 100px; */
            /* padding: 30px 30px; */
        }

        .backgournd4-2 {
            background-color: #D4EDF2;
            box-sizing: border-box;
            /* DISplay: inline-block; */
            /* margin: 10px 10px; */
            /* width: 240px; */
            /* padding: 30px 30px; */
        }

        .numset {
            color: #CF93A3;
            font-size: 20px;
        }

        .textset {
            color: #CF93A3;
            font-size: 24px;
            text-align: center;
        }

        .textContent {
            font-size: 16px;
        }

        .textContentRed {
            margin-top: 10px;
            padding-bottom: 10px;
            font-size: 12px;
            color: #E982A1;
        }

        .subtitle1 {
            color: #E18259;
            font-size: 26px;
            font-weight: 700;
        }

        .subtitle2 {
            color: #468C85;
            font-size: 26px;
            font-weight: 700;
        }

        #backpic {
            background-image: url("image/backpic.png");
            width: 100%;
            height: 1083px;
            position: absolute;
        }
    </style>
    <div class="container">

        <!-- news -->
        <div class="row">
            <div class="offset-5 col-7 title_1">NEWS<span class="title_2">查詢助養</span></div>
            <div class="offset-5 col title_3">Inquiry about sponsorship</div>
        </div>
        <div class="row">
            <div class="col-6 bg-white">
                <div class=" TITLEBLUE">你的助養, 可以幫助浪孩</div>
                <div class="row">
                    <div class="backgourndout col-6">
                        <div class="backgournd4-1">
                          {{-- 救援醫療 --}}

                            <img src="{{ asset('images/smalllpic4.png') }}" alt=""><span
                                class="subtitle1 align-middle">救援醫療</span><br>
                            <div class="textContent">
                                第一線救援誘捕浪犬貓難度極高，在同地點待命幾週或半夜誘捕是常見之事。遇到重症車禍等還要與時間賽跑搶救。TNVR、意外傷患、慢性病症餵藥，協會一定給予浪孩最好的醫療照顧。</div>
                            <div class="textContentRed">官網有許多重症醫治到痊癒的幸福案例！</div>
                        </div>
                    </div>
                    <div class=" backgourndout col-6">
                        <div class="backgournd4-2">
                            <img src="{{ asset('images/smalllpic4.png') }}" alt=""><span
                                class="subtitle2 align-middle">居住環境</span><br>
                            <div class="textContent">幸福狗承租一個廢棄養豬場打造成收留園區，一有資金就會做以浪孩為優先的建設改良！如幼犬房、隔離房、遮陽延伸、水泥地整治等。</div>
                            <div class="textContentRed">園區原則：<br>
                                1.不關籠、不綁繩，自由活動<br>
                                2.可自由到屋簷避風雨與陽光下玩耍<br>
                                3.不甕擠，每隻自均有3坪空間</div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="backgourndout col-6">
                        <div class="backgournd4-2">
                            <img src="{{ asset('images/smalllpic4.png') }}" alt=""><span class="subtitle2  align-middle">飲食照護</span>
                            <br>
                            <div class="textContent"> 飼料：餵食健康乾糧飼料，每月需約1800公斤。<br>
                                水：園區偏僻沒有自來水，協會十年來每天載20公升給浪孩飲用。<br></div>
                            <div class="textContentRed">小細節也會細心把關，只為保障浪浪健康</div>


                        </div>
                    </div>
                    <div class="backgourndout col-6">
                        <div class="backgournd4-1">
                            <img src="{{ asset('images/smalllpic4.png') }}" alt=""><span
                                class="subtitle1  align-middle">保健預防</span><br>
                            <div class="textContent">每月給與寄生蟲、心絲蟲預防藥，可避免犬隻最常見的幾種傳染病種與死因。大大保證基本健康。<br></div>
                            <div class="textContentRed">所以園區浪浪的皮膚毛色才都這麼健康！</div>

                        </div>
                    </div>
                </div>



                <!-- LeftArea2 -->
                <div class="TITLEBLUE">成為助養主人後, 你可以</div>
                <div class="row">
                    <div class="col-6"><span class="numset">➊</span><span
                            class="textset">成為愛媽愛爸</span><br>成為幸福狗協會的愛媽愛爸一員，每助養一隻浪浪便會收到我們的可抵稅捐款收據。</div>
                    <div class="col-6"><img src="image/rd.png" alt=""><br><span class="numset">❷</span><span
                            class="textset">愛相伴</span><br>
                    </div>
                    <div class="row">
                        <div class="col-6"><img src="{{ asset('images/menu1.png') }}" alt="" class="img-thumbnail"></div>
                        <div class="col-6"><br>您可以抽空到我們園區陪伴牠、餵零食、散步;
                            幫牠洗澡。不僅讓牠獲得關愛，也能加速社會化的適應能力，增加走入家庭的機會。當然，也歡迎有朝一日帶牠走進你的家庭。讓牠成為你生命裡重要的一席之位。<br><img
                                src="image/dd.png" alt="">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-6">
                        <span class="numset">3</span><span class="textset">集結力量大</span><br>
                    </div>
                    <div class="col-6">
                        協會對浪孩的照護非常完善，但目前資源僅靠創辦人陳愛媽一家籌措。資源增加、收容數量才有機會增加。有您的參與，就能多一隻浪浪離幸福的路更近，看見牠們獲得幸福，值得您感到驕傲！</div>

                </div>
            </div>

        </div>

    </div>
@endsection

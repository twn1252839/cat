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


    <link rel="stylesheet" href="/catdog_index.css">
</head>

<body>
    <div class="container">

        <!-- nav -->
        <!-- <div class="offset-1"> -->

        <div class="row">

            <div class="offset-2 col-8 d-flex justify-content-around align-items-center">
                <a href="#" class="button-44-ac">登入註冊</a>
                <a href="#" class="button-44">線上捐款</a>
                <a href="#"><img src="{{ asset('images\logo.png') }}"></a>
                <a href="#" class="button-44">公益活動</a>
                <a href="#" class="button-44">查詢助養</a>
                {{-- <ul class="pt-3">@yield('name')</ul> --}}
            </div>

        </div>

        <!-- </div> -->

        <!-- body -->
        <!-- news -->
        <div class="row">
            <div class="col-12 title_1">NEWS<span class="title_2">汪星人</span></div>
            <div class="col-12 title_3">DOG TRIBE</div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div id="backpic">
            <div class="row">
                <div class="offset-1 col-10">
                    <div class="row AreaSpace_3">
                    </div>
                    <div class="row">
                        <div class="col-4   d-flex justify-content-center align-items-center">
                            <div>
                                <img src="{{ asset('images/menu1.png') }}" alt="" class="img3s"><br>
                                <div class=" text3s">喵星人
                                </div>

                            </div>
                        </div>
                        <div class=" col-4   d-flex justify-content-center align-items-center">
                            <div>
                                <img src="{{ asset('images/menu1.png') }}" alt="" class="img3s""><br>
                                <div class=" text3s">汪星人
                                </div>
                            </div>
                        </div>
                        <div class="col-4   d-flex justify-content-center align-items-center">
                            <div>
                                <img src="{{ asset('images/menu1.png') }}" alt="" class="img3s""><br>
                                <div class=" text3s">捐款名冊
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="texttitle col offset-3" style="font-size:24px; color: #54B0AA;">About the Assocition<span
                    class=" texttitle2" style="font-size:16px; color:#EE9DA1;">
                    <b> 關於協會</b>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-6"><img class="picabout img-fluid" src="{{ asset('images/11.png') }}" alt=""></div>
            <div class="col-6 TextArea">
                <div class="title3" style="font-size:24px; color: #54B0AA;">動機與目的：<br></div>
                <span style="font-size:12px;">
                    雖然現在國人普遍動保意識抬頭，以領養代替購買，努力解決遺棄養的浪浪或是野貓野狗問題，但由於2015動保法修法後，廢除流浪動物安樂死政策，另一個問題也瞬間浮出，各地的動物收容所，包括中途之家都出現收容數量爆滿問題。
                    <br>
                    為了讓大眾更了解流浪動物的問題以及浪浪們的困境，開發此平台供大眾們助養，即使無法領養也可透過募資計劃當遠端愛媽，以長期助養的方式作為領養，更開放大眾線上捐款，來幫助全台更多的流浪貓狗。</span>
                <div class="offset-10 button-knowmore bg-danger justify-content-end" align="right">了解更多>></div>

            </div>
        </div>
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
            <!-- <div class="offset-4 col text-center"> -->
            <div class="col text-center" style="color:#AAAAAA">
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

@extends('layout.master')
@extends('layout.user')

@section('content')
    <div id="backpic">
        <div class="row m-0">
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

    <div class="container">
        <div class="row">
            <div class="texttitle col offset-3" style="font-size:24px; color: #54B0AA;">About the Assocition<span
                    class=" texttitle2" style="font-size:16px; color:#EE9DA1;">
                    <b> 關於協會</b>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-6"><img class="picabout img-fluid" src="{{ asset('images/11.png') }}" alt="">
            </div>
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
@endsection

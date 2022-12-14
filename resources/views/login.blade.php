<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"
    integrity="sha512-vZWT27aGmde93huNyIV/K7YsydxaafHLynlJa/4aPy28/R1a/IxewUH4MWo7As5I33hpQ7JS24kwqy/ciIFgvg=="
    crossorigin="anonymous" />
  <style>
    #spaceArea {
      height: 220px;
    }

    #loginarea div {
      /* width: 1200px; */
      height: 32px;
      line-height: 32px;
      margin-bottom: 32px;
      padding-bottom: 32px;
      display: block;
    }


    .input {
      background-color: #FFEBCC;
      color: #C69030;
      padding: 0px 16px;
      border: 0;
      border-radius: 16px;
    }

    ::placeholder {
      color: #C69030;
      opacity: 1;
      /* Firefox */
    }

    .btn1 {
      width: 450px;
      align-items: center;
      justify-content: center;
      line-height: 40px;
    }

    .reg-btn {
      align-items: center;
      justify-content: center;
      width: 80px;
      appearance: none;
      background-color: #FEEBC0;
      color: #E0A652;
      border: 1px solid rgba(27, 31, 35, .15);
      border-radius: 6px;
      box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
      box-sizing: border-box;

      cursor: pointer;
      display: inline-block;
      font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
      font-size: 14px;
      font-weight: 600;
      line-height: 20px;
      position: relative;
      text-align: center;
      text-decoration: none;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      vertical-align: middle;
      white-space: nowrap;
      margin: 16px 16px;
    }

    /* CSS */
    .button-3 {
      align-items: center;
      justify-content: center;
      width: 450px;
      appearance: none;
      background-color: #FFB236;
      color: #FFF;
      border: 1px solid rgba(27, 31, 35, .15);
      border-radius: 14px;
      box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
      box-sizing: border-box;

      cursor: pointer;
      display: inline-block;
      font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
      font-size: 14px;
      font-weight: 600;
      line-height: 40px;
      padding: 6px 16px;
      position: relative;
      text-align: center;
      text-decoration: none;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      vertical-align: middle;
      white-space: nowrap;
    }

    .button-3:focus:not(:focus-visible):not(.focus-visible) {
      box-shadow: none;
      outline: none;
    }

    .button-3:hover {
      background-color: #2c974b;
    }

    .button-3:focus {
      box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
      outline: none;
    }

    .button-3:disabled {
      background-color: #94d3a2;
      border-color: rgba(27, 31, 35, .1);
      color: rgba(255, 255, 255, .8);
      cursor: default;
    }

    .button-3:active {
      background-color: #298e46;
      box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
    }

    .logo {
      margin: 16px 0px;
    }

    .picleft {
      height: 100vh;
      width: auto;
    }
  </style>
</head>


<div class="container-fluid">
  <div class="row">
    <div class="col-6 p-0">
      <img src="{{asset('images/1.png')}}" alt="" class="h-100">
    </div>
    <div class="col-6">
      <div class="row">

        <a href="{{ url('/') }}" class="col-1 logo"><img src="{{asset('images/logo.png')}}"></a>

        <div class="offset-8 col-1">
          <a href="{{ url('register') }}" class="reg-btn"><i class="fas fa-user-plus "
                style="color:#E0A652">??????</i></a>

        </div>
      </div>
      <div id="spaceArea"></div>
      <form action=" {{ route('index.store') }} " method="post">
        <div id="loginarea" class="textcenter offset-1">
        <div class="offset-1">
          <h3>????????????<br></h3>
        </div>
        <div class="offset-1">
          <input type="text" name="userid" id="userid" class="btn1 input" placeholder="???????????????"><br>
        </div>
        <div class="offset-1">
          <input type="password" name="password" id="password" class="btn1 input" placeholder="????????????"><br>
        </div>
        <div class=" offset-1">
          <input type="submit" value="??????" class="button-3">
        </div>
      </div>
      </form>

    </div>

  </div>
</div>
</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>

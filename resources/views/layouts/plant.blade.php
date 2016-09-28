<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aquaponics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    #header .btn-search {
      width: 140px;
      height: 56px;
      position: absolute;
      top: 15px;
      right: 0px;
      z-index: 2;
    }
    #header.sogo.navi-yes h1 {
      width: 50px;
      height: 64px;
      font-size: 1.0rem;
      position: absolute;
      top:0px;
      left: 12px;
    }
    h1 {
      font-weight: 100;
      font-size: 5.0rem;
      line-height: 1.4;
      text-align: center;
    }

    #header.sogo.navi-yes h1 img, #header.sogo.navi-no h1 img {
      width: 199px;
      height: 55px;
    }
    #header .inner {
      min-width: 945px;
      /* max-width: 1280px; */
      margin: 0 auto;
      position: relative;
    }
    #header {
      width: 100%;
      height: 80px;
      background: rgba(0,0,0,0.84);
      filter: progid:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr=#c2000000,EndColorStr=#c2000000);
      position: fixed;
      top: 0;
      z-index: 9997;
    }
    #header .navi.pc ul {
      text-align: center;
      margin: 0 164px 0 74px;
    }
    ul, menu, dir {
      display: block;
      list-style-type: disc;
      -webkit-margin-before: 1em;
      -webkit-margin-after: 1em;
      -webkit-margin-start: 0px;
      -webkit-margin-end: 0px;
      -webkit-padding-start: 40px;
    }
    li {
      display: list-item;
      text-align: -webkit-match-parent;
    }
    #header .navi.pc ul li {
      height: 80px;
      font-size: 1.0rem;
      color: #FFF;
      line-height: 80px;
      padding: 0 0.5%;
      margin: 0 1%;
      display: inline-block;
      box-sizing: border-box;
    }
    #contents {
      width: 100%;
      min-height: 100%;
      position: relative;
      z-index: 1;
      overflow: hidden;
    }
    #contents .pc {
      display: block;
    }
    h3 {
      font-weight: 100;
      font-size: 4.0rem;
      line-height: 1.4;
      text-align: center;
    }
    #hospitality .detail {
      margin-top: 60px;
      padding-bottom: 40px;
      background-color: #f2dede;
    }
    #hospitality .detail .inner {
      max-width: 1280px;
      margin: 0 auto;
    }
    #hospitality .detail .group {
      position: relative;
      margin: 120px 3.91% 0;
    }
    #hospitality .detail .group-t1 .image {
      width: 57.2%;
    }
    #hospitality .detail .group-fr .image {
      float: right;
    }
    #hospitality .detail .group .image {
      position: relative;
    }
    #hospitality .detail .group .txt .body {
      font-size: 1.6rem;
      margin-top: 40px;
    }
    #hospitality .detail .group-t1 .txt {
      width: 40.1%;
    }
    #hospitality .detail .group-fr .txt {
      float: left;
    }
    #hospitality .detail .group .txt dl {
      margin-top: 30px;
      padding-top: 30px;
      border-top: 1px solid #ce4040;
    }
    #hospitality .detail .group .txt dl dd {
      margin-left: 6.0em;
      font-weight: bold;
      font-size: 16px;
    }
    dl {
      display: block;
      -webkit-margin-before: 1em;
      -webkit-margin-after: 1em;
      -webkit-margin-start: 0px;
      -webkit-margin-end: 0px;
    }
    #hospitality .detail .group .txt dl dt {
      font-weight: bold;
      float: left;
      font-size: 16px;
    }

    #hospitality .detail .inner {
      max-width: 1280px;
      margin: 0 auto;
    }
    #hospitality .detail .group-t1 .txt {
      width: 40.1%;
    }
    #hospitality .detail .group-fl .txt {
      float: right;
    }
    #hospitality .detail .group-t1 .image {
      width: 57.2%;
    }
    #hospitality .detail .group-fl .image {
      float: left;
    }
    #hospitality .detail .group .image {
      position: relative;
    }
    .cf:before, .cf:after {
      content: "";
      display: block;
      overflow: hidden;
      overflow-x: hidden;
      overflow-y: hidden;
    }
    .cf:after {
      clear: both;
    }
    #hospitality .detail .group.line {
      padding-top: 120px;
      border-top: 5px solid #F0F0F0;
    }

    #hospitality .detail .group-t2 {
      padding: 0 5.85%;
    }

    #hospitality .detail .group-t2 .image, #hospitality .detail .group-t2 .txt {
      width: 48.5%;
    }
    #hospitality .detail .group-fl .txt {
      float: right;
    }
    /* Remove the navbar's default margin-bottom and rounded borders */
    /*.navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    */
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

  </style>
</head>
<body>

<header>
  <div id="header" class="sogo navi-yes">
    <div class="inner">
      <h1><a href="{{ url('/') }}"><img src="{{ url('header/icon1.png') }}"alt="魚菜共生"></a></h1>
      <nav>
        <div class="navi pc">
          <ul class="main-menu">
            <li><a href="{{ url('plant_library') }}"><img src="{{ url('header/header1.png') }}"alt="Plant Library" width="130" height="34"></a></li>
            <li><a href="{{ url('myplant.php') }}"><img src="{{ url('header/header2.png') }}"alt="My Plant" width="130" height="34"></a></li>
            <li><a href="{{ url('/還沒填') }}"><img src="{{ url('header/header3.png') }}"alt="Data Analysis" width="130" height="34"></a></li>
            <li><a href="{{ url('/還沒填') }}"><img src="{{ url('header/header4.png') }}"alt="Contact" width="130" height="34"></a></li>
            <li><a href="{{ url('/dashboard') }}"><img src="{{ url('header/header5.png') }}"alt="後台" width="130" height="34"></a></li>
          </ul>
        </div>
      </nav>
      @if(!Auth::check())
      <div class="btn-search"><a href="{{ url('login') }}" class="colorbox-navi cboxElement"><img src="{{ url('header/login.jpg') }}" alt="登入"></a></div>
      @else
      <div class="btn-search"><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img src="{{ url('header/logout.jpg') }}" alt="登出"></a>
      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
      </form>
      @endif
    </div>
  </div>
  <div id="drawer-wrapper" style="display: none;"></div>
</header>

  <!-- 這是你的主要樣板 -->
  @yield('content')



<footer class="container-fluid text-center">
  <p>We love plant</p>
</footer>

</body>
</html>


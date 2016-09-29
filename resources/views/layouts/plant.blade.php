<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aquaponics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ url('css/plant.css') }}">
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


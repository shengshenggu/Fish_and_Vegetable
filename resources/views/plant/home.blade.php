@extends('layouts.plant')

@section('content')
<link rel="stylesheet" href="{{ url('css/home.css') }}">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{ url('index/top1.jpg') }}" alt="歡迎">
        <div class="carousel-caption">
          <h3>Welcome to Aquaponics</h3>
          <p>Enjoy the plant</p>
        </div>
      </div>

      <div class="item">
        <img src="{{ url('index/top2.jpg') }}" alt="分享">
        <div class="carousel-caption">
          <h3>Share your experience</h3>
          <p>Innovation</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<article>
    <div id="contents">
      <div id="hospitality">
        <div id="overview">
          
        </div>

        <div id="detail" class="detail cf">
          <div class="inner">
            <div class="group cf group-fr group-t1">
              <div class="image">
                <div><img src="{{ url('index/title1-1.jpg') }}" alt="自給自足圖" width="675" height="425"></div>
              </div>
              <div class="txt">
                <h3 class="pc"><img src="{{ url('index/title1.png') }}" alt="自給自足" width="473" height="84"></h3>
                <p class="body">吃到新鮮、安心的蔬菜和魚..吃到新鮮、安心的蔬菜和魚吃到新鮮、安心的蔬菜和魚吃到新鮮、安心的蔬菜和魚吃到新鮮、安心的蔬菜和魚吃到新鮮、安心的蔬菜和魚吃到新鮮、安心的蔬菜和魚吃到新鮮、安心的蔬菜和魚吃到新鮮、安心的蔬菜和魚吃到新鮮、安心的蔬菜和魚</p>
                <dl class="shisetsu cfx">
                  <dt>蔬菜</dt>
                  <dd>魚</dd>
                </dl>
              </div>
            </div>
            <div class="group cf group-fl group-t1">
              <div class="image">
                <div><img src="{{ url('index/title2-1.jpg') }}" alt="節約能源圖" width="675" height="425"></div>
              </div>
              <div class="txt">
                <h3 class="pc"><img src="{{ url('index/title2.png') }}" alt="節約能源" width="473" height="84"></h3>
                <p class="body">節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源節約能源</p>
                <dl class="shisetsu cfx">
                  <dt>水資源</dt>
                  <dd>電力</dd>
                </dl>
              </div>
            </div>
            <div class="group cf group-fr group-t1">
              <div class="image">
                <div><img src="{{ url('index/title3-1.jpg') }}" alt="生產高效圖" width="675" height="425"></div>
              </div>
              <div class="txt">
                <h3 class="pc"><img src="{{ url('index/title3.png') }}" alt="生產高效" width="473" height="84"></h3>
                <p class="body">生長快速、植栽多樣化、植栽密度倍增、自動化生產。生長快速、植栽多樣化、植栽密度倍增、自動化生產。生長快速、植栽多樣化、植栽密度倍增、自動化生產。生長快速、植栽多樣化、植栽密度倍增、自動化生產。生長快速、植栽多樣化、植栽密度倍增、自動化生產。生長快速、植栽多樣化、植栽密度倍增、自動化生產。生長快速、植栽多樣化、植栽密度倍增、自動化生產。生長快速、植栽多樣化、植栽密度倍增、自動化生產。</p>
                <dl class="shisetsu cfx">
                  <dt>生長快速</dt>
                  <dd>多元種植</dd>
                </dl>
              </div>
            </div>

            <div class="group cf group-fl group-t1">
              <div class="image">
                <div><img src="{{ url('index/title4-1.jpg') }}" alt="無土栽培圖" width="675" height="425"></div>
              </div>
              <div class="txt">
                <h3 class="pc"><img src="{{ url('index/title4.png') }}" alt="無土栽培"width="473" height="84"></h3>
                <p class="body">無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。無農藥。</p>
                <dl class="shisetsu cfx">
                  <dt>有機</dt>
                  <dd>無農藥</dd>
                </dl>
              </div>
            </div>
            <div class="group cf group-fr group-t1">
              <div class="image">
                <div><img src="{{ url('index/title5-1.jpg') }}" alt="簡單種植圖" width="675" height="425"></div>
              </div>
              <div class="txt">
                <h3 class="pc"><img src="{{ url('index/title5.png') }}" alt="簡單種植" width="473" height="84"></h3>
                <p class="body">所需設備少:OOXXOOXX。很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單很簡單</p>
                <dl class="shisetsu cfx">
                  <dt>設備簡易</dt>
                  <dd>菜箱・魚箱・樹莓派・感測器・菜苗・魚苗・抽水馬達・水管</dd>
                </dl>
              </div>
            </div>
            <div class="group cf group-fl group-t1">
              <div class="image">
                <div><img src="{{ url('index/title6-1.jpg') }}" alt="不限環境圖" width="675" height="425"></div>
              </div>
              <div class="txt">
                <h3 class="pc"><img src="{{ url('index/title6.png') }}" alt="不限環境" width="473" height="84"></h3>
                <p class="body">春夏秋冬、各地。春夏秋冬、各地。春夏秋冬、各地。春夏秋冬、各地。春夏秋冬、各地。春夏秋冬、各地。春夏秋冬、各地。春夏秋冬、各地。春夏秋冬、各地。春夏秋冬、各地。春夏秋冬、各地。春夏秋冬、各地。春夏秋冬、各地。春夏秋冬、各地。春夏秋冬、各地。</p>
                <dl class="shisetsu cfx">
                  <dt>一年四季</dt>
                  <dd>適合各種魚種</dd>
                </dl>
              </div>
            </div>
            <div class="group cf group-fr group-t1">
              <div class="image">
                <div><img src="{{ url('index/title7-1.jpg') }}" alt="即時監控圖" width="675" height="425"></div>
              </div>
              <div class="txt">
                <h3 class="pc"><img src="{{ url('index/title7.png') }}" alt="即時監控" width="473" height="84"></h3>
                <p class="body">植物的即時影像。植物的即時影像。植物的即時影像。植物的即時影像。植物的即時影像。植物的即時影像。植物的即時影像。植物的即時影像。植物的即時影像。植物的即時影像。植物的即時影像。植物的即時影像。植物的即時影像。</p>
                <dl class="shisetsu cfx">
                  <dt>影像紀錄</dt>
                  <dd>生長圖鑑</dd>
                </dl>
              </div>
            </div>
            <div class="group cf group-fl group-t2 line">
              <div class="image">
                <div><img src="{{ url('index/title8-1.jpg') }}" alt="數據分析圖" width="500" height="315"></div>
              </div>
              <div class="txt">
                <h3 class="pc"><img src="{{ url('index/title8.png') }}" alt="數據分析" width="473" height="84"></h3>
                <p class="body">數據分析數據分析數據分析數據分析數據分析數據分析數據分析數據分析數據分析數據分析數據分析數據分析數據分析</p>
                <dl class="shisetsu cfx">
                  <dt>環境紀錄</dt>
                  <dd>對比理想條件</dd>
                </dl>
              </div>
            </div>

            <div class="btn-top">
              <a href="#" class="link-top">Back To Top</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </article>

@endsection
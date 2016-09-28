@extends('layouts.plant')

@section('content')
<style>
    #main{
      background:url('header/plant.jpg');
      width: 100%;
      margin: auto; 
    }
    
  .btn-top {
    margin-top: 120px;
    float: right;
    margin-right: 3.9%;
  }
  a.link-top {
    height: 32px;
    background: url('index/top.png') no-repeat 100% 50%;
    background-size: 32px;
    font-size: 1.8rem;
    line-height: 32px;
    text-align: right;
    padding-right: 46px;
    display: inline-block;
  }
  body {
    width: 100%;
    height: 100%;
    background: #f2dede;
    font-size: 1.8rem;
    line-height: 2.0;
    -webkit-text-size-adjust: 100%;
    /* -webkit-font-smoothing: antialiased; */
    color: #324365;
    overflow-y: scroll;
    position: relative;
    z-index: 0;
  }
  /*搜尋欄*/
    .search{
        background: #a3bcd2;
        height: 75px;
        padding: 15px;
    }

    .dropdown.dropdown-lg .dropdown-menu {
        margin-top: -1px;
        padding: 6px 20px;
    }
    .input-group-btn .btn-group {
        display: flex !important;
    }
    .btn-group .btn {
        border-radius: 0;
        margin-left: -1px;
    }
    .btn-group .btn:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }
    .btn-group .form-horizontal .btn[type="submit"] {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }
    .form-horizontal .form-group {
        margin-left: 0;
        margin-right: 0;
    }
    .form-group .form-control:last-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    @media screen and (min-width: 768px) {
        #adv-search {
            width: 500px;
            margin: 0 auto;
        }
        .dropdown.dropdown-lg {
            position: static !important;
        }
        .dropdown.dropdown-lg .dropdown-menu {
            min-width: 500px;
            }
    }

    /*植物顯示欄*/

    .splt-itm {
        max-height: 200px;
    }
    .splt-itm {
        position: relative;
        background-color: #fcf8e3;
        width: 47%;
        margin: 0 1% 1% 0;
        padding: 1%;
        float: left;
    }

    /*植物圖片*/
    .splt-itm a figure {
        overflow: hidden;
        width: 140px;
        height: 170px;
        /* background-color: #bbbbbb; */
        background-image: url("../images/myflowerpower_default_picture.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top center;
    }
    .splt-itm a figure {
        padding: 0;
        margin: 0;
        float: left;
        margin: 0 20px 0 0;
    }
    .splt-itm a figure img {
        min-width: 140px;
        min-height: 170px;
        height: 170px;
        max-width: inherit;
    }

    img {
        width: auto\9;
        height: auto;
        vertical-align: middle;
        border: 0;
        -ms-interpolation-mode: bicubic;
    }

    /*植物欄中標題*/
    a {
        color: #53b9b6;
        text-decoration: none;
        outline: none;
    }
    .splt-itm a h4 {
        text-align: left;
    }
    .splt-itm a h4 {
        margin: 0;
        padding: 0;
        color: #2c5655;
        font-size: 22px;
        line-height: 28px;
        overflow: hidden;
        margin-bottom: 10px;
    }

    h4 {
        display: block;
        -webkit-margin-before: 1.33em;
        -webkit-margin-after: 1.33em;
        -webkit-margin-start: 0px;
        -webkit-margin-end: 0px;
        font-weight: bold;
    }

    /*Modal*/
    .myModal {
    	top: 200;
    }


  </style>
<div class=jumbotron id="main" style="height:350px;"></div>
<!--Search-->
<div class="search">
    <div class="row">
        <div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Search for all plants" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="filter">Filter by</label>
                                    <select class="form-control">
                                        <option value="0" selected>All Plants</option>
                                        <option value="1">Alphabet</option>
                                        <option value="2">Type</option>
                                        <option value="3">Plant Shape</option>
                                        <option value="4">Season</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Name</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Contains the words</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="upage library">
    <div class="container">         
        <div class="row-fluid">
            <div class="span9">        
                <section class="list-itm clearfix">                                   
                <div id="results-lst"><div id="plant-lst-a">
                    <h3 id="a" style="" class="alpha-ttl"><span>Hydroponics</span></h3>
                    @foreach($plants as $index => $rs)
                    <div class="splt-itm  clearfix {{ $index == 0 ? 'filter-perennial' : '' }} filter-annual filter-bloom-yellow filter-leaf-green filter-irregular">
                        <a class="button" data-toggle="modal" data-target="#myModal{{ $rs->id }}">
                            <figure><img src="{{ url('plantdb/'. $rs->name .'.jpg') }}" alt="{{ $rs->chi_name }}"></figure>
                            <h4>{{ $rs->eng_name }}</h4>
                            <p class="fitalic">{{ $rs->description }}</p>
                            <p class="flight"></p>
                        </a>
                    </div>
                    @endforeach
                </section><!-- END: list-itm -->
            </div><!-- SPAN9 -->
        </div><!-- R COL -->          
    </div><!-- END: G MAP -->
</div>

@foreach($plants as $rs)
<!-- Modal -->
<div class="modal fade myModal" id="myModal{{ $rs->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">{{ $rs->name }}</h4>
        <button type="button" class="btn btn-default" style='position:absolute; top:10px; right:40px;'>
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        <b>Plant Needs</b></br>
        Temperature : {{ $rs->temp_min }} ~ {{ $rs->temp_max }}°C <br>
        pH : {{ $rs->pH_min }} ~ {{ $rs->pH_max }}<br>
        Photo Period : {{ $rs->photoperiod_min }} ~ {{ $rs->photoperiod_max }} hours <br>
        Crop cycle : {{ $rs->cropcycle_min }} ~ {{ $rs->cropcycle_max }} days <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
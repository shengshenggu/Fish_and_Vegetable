@extends('layouts.plant')

@section('content')
<link rel="stylesheet" href="{{ url('css/library.css') }}">

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
@extends('layouts.base')

@section('styles')
  @parent
       <link rel="stylesheet" type="text/css" href="{{asset('css/portfolio.css')}}">
@endsection

@section('name page')

  <h1 class="page_name font-stretch">Портфолио</h1>
  <h2 class="page_title text-center font-stretch">Предлагаю Вам ознакомиться<br>с моими работами</h2>

@endsection


@section('content')

            <div class="portfolio_page col-12">
                    
              <div class="portfolio_sections d-flex justify-content-around flex-wrap">

                  @foreach ($objs as $obj)
                    
                      <a href="{{asset('portfolio/'.$obj->id.'/'.$obj->url)}}" data-id="{{$obj->id}}">

                        <div class="card">
                         	<img class="img-card img-fluid" src="{{asset('storage/'.$obj->image)}}" alt="foto">

                         	<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
							              <line class="top" x1="0" y1="0" x2="990" y2="0"/>
							              <line class="left" x1="0" y1="450" x2="0" y2="-900"/>
							              <line class="bottom" x1="330" y1="450" x2="-660" y2="450"/>
							              <line class="right" x1="330" y1="0" x2="330" y2="1350"/>
						              </svg>
                          
						              <div class="card-img-overlay">
						    	          <div class="camera"><img src="img/camera.svg" alt="camera"></div>
                              <h2 class="card-title font-stretch">{{$obj->name}}</h2>
                            </div>
                        </div>
                      </a>                                      
                 
                  @endforeach

                </div>
            </div>

@endsection

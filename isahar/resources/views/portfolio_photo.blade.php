@extends('layouts.base')

@section('styles')
  @parent
       <link rel="stylesheet" type="text/css" href="{{asset('css/portfolio.css')}}">
@endsection


@section('name page')

  <h1 class="page_name font-stretch">Портфолио</h1>
  <h2 class="page_title text-center font-stretch">{{$obj->name}} фото</h2>

@endsection


@section('content')

            <div class="portfolio_page col-12">    
                <div class="portfolioPhoto_sections">

                @foreach ($photos as $photo)

                    <div class="section col-md-4 col-sm-6 col-12">
                        <a class="modal_screen" href="#" data-toggle="modal" data-target="#full_width">
                    	    <img src="{{asset('storage/'.$photo->image)}}" alt="photo"> 
                        </a>                   
                    </div>
                                                
                @endforeach

                </div>
            </div>


@endsection

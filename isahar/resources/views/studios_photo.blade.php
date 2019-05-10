@extends('layouts.base')


@section('styles')
  @parent
       <link rel="stylesheet" type="text/css" href="{{asset('css/studios.css')}}">
@endsection

@section('name page')

  <h1 class="page_name font-stretch">Фотостудии</h1>
  <h2 class="page_title text-center font-stretch">Фотостудия {{$obj->name}}</h2>

@endsection

      

@section('content')
    <div class="studio col-12">

        <div class="studiosPhoto_sections">

            @foreach ($photos as $photo)
                  <div class="section col-md-4 col-sm-6 col-12">
                    <a class="modal_screen" href="#" data-toggle="modal" data-target="#full_width">
                    	<img src="{{asset('storage/'.$photo->img)}}" alt="photo">
                    </a>                   
                 </div>
            @endforeach
         
        </div>       
    </div>

@endsection
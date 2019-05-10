@extends('layouts.base')

@section('styles')
  @parent
    <link rel="stylesheet" type="text/css" href="{{asset('css/studios.css')}}">
@endsection

@section('name page')
    <h1 class="page_name font-stretch">Фотостудии</h1>
    <h2 class="page_title text-center font-stretch">Популярные фотостудии Минска<br>и цена их аренды</h2>
@endsection


@section('content')
    <div class="studio col-12">
        <div class="studios_sections row m-0">

          @foreach ($objs as $obj)

            <div class="card col-xl-4 col-md-6">
              <div class="card_img">
                  <a href="{{asset('studios/'.$obj->id.'/'.$obj->url)}}" data-id="{{$obj->id}}"><img class="card-img-top" src="{{asset('storage/'.$obj->image)}}" alt="{{$obj->name}}"></a>  
              </div>

              <div class="card-body">
                  <h2 class="card-title text-white font-stretch">{{$obj->name}}</h2>
                  <p class="card-text font-stretch">{!!$obj->description!!}</p>
              </div>
            </div>  
 
          @endforeach 
         
        </div>       
    </div>
@endsection
@extends('layouts.base')

@section('styles')
    @parent
        <link rel="stylesheet" type="text/css" href="{{asset('css/service.css')}}">
@endsection

@section('name page')

    <h1 class="page_name font-stretch">Услуги</h1>
    <h2 class="page_title text-center font-stretch">Выбирите для себя<br>подходящую фотосессию </h2>

@endsection

      

@section('content')
    <div class="services col-12">
        <div class="services_sections row m-0">

            @foreach ($objs as $obj)

                <div class="card col-xl-3 col-md-6 col-sm-12">
                    <div class="card_img">
                    	<img class="card-img-top" src="{{asset('storage/'.$obj->img)}}" alt="">
                    </div>
                    <div class="card-body">
                    	<h2 class="card-title text-white font-stretch">&laquo;{{$obj->name}}&raquo;</h2>
                        <p class="font-stretch card-text text-left ">{!!$obj->text!!}</p>
                    </div>
                </div>                                
                 
            @endforeach 
            
            <p class="services_ps font-stretch">*Если Вы не нашли для себя подходящего пакета - свяжитесь со мной и я сделаю для Вас индивидуальное предложение!</p>
        </div>       
    </div>
@endsection

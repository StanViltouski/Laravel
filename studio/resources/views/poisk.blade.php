@extends('layouts.base')
@section('content')
<section id="poisk_body" class="container-fluid">
    <div class="row-fluid">
       
        <div class="poiskBody_text body_text col-md-12">
      
            <h1>{{__('poisk.h1')}}</h1>
            <h3>{{__('poisk.h3')}} &laquo;{{$search}}&raquo; {{__('poisk.h3_1')}} {{count($news)}}</h3>

			
			@foreach($news as $one)
            <p><a href="{{asset('news/'.$one->id.'/'.$one->title)}}">{{$one->title}}</a></p>
            @endforeach

		
            <h3>{{__('poisk.h3')}} &laquo;{{$search}}&raquo;  {{__('poisk.h3_2')}}{{count($maintexts)}}</h3>

            @foreach($maintexts as $one)
            <p><a href="{{asset('/' . $one->url)}}">{{$one->name}}</a></p>
            @endforeach
			   
     		   
            
            @endsection
        </div>
        
    </div>
</section>
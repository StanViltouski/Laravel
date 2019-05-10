@extends('layouts.'.$temp)

	@section('styles')
	@parent
		   <link rel="stylesheet" type="text/css" href="{{asset('/css/page.cs')}}">
	@endsection
	
@section('content')
	
    {!!$obj->body!!}
	
@endsection
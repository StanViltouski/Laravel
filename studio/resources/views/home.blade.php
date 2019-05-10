@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card body_text text-center"><br /><br />
                <div class="card-header"><h1>{{ Auth::user()->name }}<h1></div><br />

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>{{__('home.message')}}</h3><br /><br />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.'.$temp)

@section('script')
@parent
  <script src="{{asset('/js/modal.js')}}"></script>
@endsection

@section('content')

  <section id="categories_body" class="container-fluid">
     <div class="row-fluid">
	 
	 @foreach ($cats as $cat)
	    <div class="categoriesBody_blocks body_text col-md-12 text-center">
		   <h1>{{$cat->name}}</h1>
		   
	       @foreach ($cat->products()->get() as $one)
		   <div class="row-fluid">
		     <div class="col-md-6">
			 
			  <h3>{{$one->name}}</h3>
			 
			  <div class="thumbnail">
	            @if($one->picture != '')
		        <img class="img-responsive" src="{{asset('uploads/'. $one->picture)}}" alt="img-tovar">
			    <h3 class="text-center">{{$one->price}} {{__('category.ruble')}}</h3>
	            <a href="{{asset('basket/add/'.$one->id)}}" class="btn btn-primary add_card" data-id="{{$one->id}}">{{__('category.add')}}</a>
				<a href="#" class="add_card prod_more btn btn-default" data-id="{{$one->id}}">{{__('category.more')}}</a>
	     	    @endif
			 </div>
			 
			</div>
		  </div>
	       @endforeach
	
		</div>
      @endforeach		
	 </div>
  </section>
  
  @endsection
@extends('layouts.'.$temp)

@section('content')
	
  <section id="basket_body" class="container-fluid">
    <div class="row-fluid">
	   <div class="basketBody_formTable body_text col-md-12">
	   
	      <h1>{{__('basket.basket')}}</h1>
		  
		  @if($products !=[ ])
			  
	      <form method="post" action="{{asset('order')}}">
			{!!csrf_field()!!}

			<?php $itogo = 0;?>
			
		@foreach($arr as $key=>$value)  
			<table class="table">
	
				   @php
				   $summa=$products[$key]->price*$value;
				   $itogo+=$summa;
				   @endphp
				   <tr>
				     <td>
					 @if($products[$key]->picture != '')
		             <img  src="{{asset('uploads/'. $products[$key]->picture)}}" />
	                 @endif  
					 </td>
				     <td style="width: 250px;"><p>{{$products[$key]->name}}</p></td>
				     <td><p>{{$products[$key]->price}} {{__('basket.ruble')}}</p></td>
				     <td><p id="value_{{$key}}"> 
				          <input style="width:45px;" min="1" type="number" name="{{$key}}" value="{{$value}}"/>
				         </p>
					 </td>
                     <td><p><a class="glyphicon glyphicon-trash" href="{{asset('basket/delete/'. $key)}}"></a></p></td>
				</tr>
				
            </table>
			
	@endforeach
			
			<h3 class="text-right">{{__('basket.total')}} {{$itogo}} {{__('basket.ruble')}}</h3>
			<h3 style="color:#000;">{{__('basket.checkout')}}</h3>
			
              <div class="row-fluid">
	
                 <div class="col-md-6">
                   <input type="text" name="name" class="form-control" placeholder="{{__('basket.form_name')}}">
		           @if ($errors->has('name'))
			           <span class="help-block"><strong style="color:red;">{{$errors->first('name')}}</strong></span>
		           @endif
                 </div>
				 
                 <div class="col-md-6">
                   <input type="text" name="surname" class="form-control" placeholder="{{__('basket.form_surname')}}">
                     @if ($errors->has('surname'))
			             <span class="help-block"><strong style="color:red;">{{$errors->first('surname')}}</strong></span>
		             @endif
                 </div>
				 
	             <div class="col-md-6">
                    <br><input type="adress" name="adress" class="form-control"  placeholder="{{__('basket.form_address')}}">
	   	              @if ($errors->has('adress'))
			              <span class="help-block"><strong style="color:red;">{{$errors->first('adress')}}</strong></span>
		              @endif
                 </div>
				              
	             <div class="col-md-6">
                    <br><input type="tel" name="telephone" class="form-control"  placeholder="{{__('basket.form_telephone')}}">
	                 @if ($errors->has('telephone'))
			              <span class="help-block"><strong style="color:red;">{{$errors->first('telephone')}}</strong></span>
		              @endif
                 </div>
	
	             <div class="col-md-6">
                    <br><textarea type="text" name="description" class="form-control" placeholder="{{__('basket.form_comment')}}"></textarea>
                 </div>
	
	             <div class="col-md-12 text-center">
                    <br /><br /><br /><button type="submit" class="btn btn-primary order_button">{{__('basket.button_order')}}</button>
                     <a class="btn btn-default order_button" href="{{asset('basket/deleteAll')}}" type="reset">{{__('basket.button_delete')}}</a>
                 </div>
	     
              </div>
        </form>
	       @else
			   
			<div class="basket_clear text-center">
		      <img src="/img/shopping_cart_delete.svg">
              <p>{{__('basket.mes4empty_basket_1')}}<a href="{{asset('categories')}}">{{__('navigation.category')}}</a>{{__('basket.mes4empty_basket_2')}}</p> 
			</div>
		   
	   @endif
	   </div>
	</div>
  </section>
  
  @endsection
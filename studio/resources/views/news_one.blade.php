@extends('layouts.'.$temp)

@section('content')
            
             <section id="newsArticle_body" class="container-fluid">
                 <div class="row-fluid">
				 
				    <div class="newsArticleBody_blocks body_text">
				      <h3>&nbsp;&nbsp;&nbsp;{{$obj->title}}</h3>
					  <img class="img-responsive" src="{{asset('/img/'.$obj->img)}}" alt="article-img">
				      <p>&nbsp;&nbsp;&nbsp;{!!$obj->body!!}</p>
				    </div> 
					
                 </div>
            </section>          
@endsection
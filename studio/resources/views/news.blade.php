@extends('layouts.base')

@section('content')
            
             <section id="news_body" class="container-fluid">
                 <div class="newsBody_blocks row-fluid">
                    
                     @foreach ($news as $new)
                     <div class="newsBlocks_item body_text col-md-12">
                            <a href="{{asset('news/'.$new->id.'/'.$new->title)}}" data-id="{{$new->id}}"><img class="col-md-4" src="{{asset('/img/'.$new->img)}}" alt="img">
                            <div class="col-md-6">
                            <p>{{$new->date}}</p>
                            <h3>{{$new->title}}</h3>
                            </div>
                            </a>                              
                     </div>
                    @endforeach
                     <div class="newsBlocks_panaginate col-md-12 text-center">
					 {!!$news->links()!!}
                     </div>
                 </div>   
            </section>          
@endsection
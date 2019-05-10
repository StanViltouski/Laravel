@extends('layouts.'.$temp)
@section('content')

<section id="projects_body" class="container-fluid">
    <div class="row-fluid">
  
	   @foreach($projects as $project)

            <div class="projectsBody_cards body_text col-md-4">
              <div class="thumbnail">
                <img src="{{asset('/img/'.$project->img)}}" alt="img-card">
                <div class="caption text-center">
                  <a href="http://{{$project->link}}">{{$project->link}}</a>
                </div>
              </div>
            </div>
      

	  @endforeach
	  
	</div>
</section>




                       
                                             
@endsection
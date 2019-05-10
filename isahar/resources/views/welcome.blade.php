@extends('layouts.base')
@section('content')
         
        		<div id="gallery" class="gallery">
        		     <div class="gallery_block block1">
                     	<img class="img-visible" src="img/gallery/gallery1.jpg" alt="fotoblock1">
                     	<img src="img/gallery/gallery1_1.jpg" alt="fotoblock1">
                     </div>
                     <div class="gallery_block block2">
                     	<img class="img-visible" src="img/gallery/gallery2.png" alt="fotoblock2">
                     	<img src="img/gallery/gallery2_2.jpg" alt="fotoblock2">
                     </div>
                     <div class="gallery_block block3">
                     	<img class="img-visible" src="img/gallery/gallery3.png" alt="fotoblock3">
                     	<img src="img/gallery/gallery3_3.jpg" alt="fotoblock3">
                     </div>
                     <div class="gallery_block block4">
                     	<img class="img-visible" src="img/gallery/gallery4.png" alt="fotoblock4">
                     	<img src="img/gallery/gallery4_4.jpg" alt="fotoblock4">
                     </div>
                     <div class="gallery_block block5">
                     	<img class="img-visible" src="img/gallery/gallery9.png" alt="fotoblock5">
                     	<img src="img/gallery/gallery9_9.jpg" alt="fotoblock5">
                     </div>
                     <div class="gallery_block block6">
                     	<img class="img-visible" src="img/gallery/gallery6.png" alt="fotoblock6">
                     	<img src="img/gallery/gallery6_6.jpg" alt="fotoblock6">
                     </div>
                     <div class="gallery_block block7">
                     	<img class="img-visible" src="img/gallery/gallery7.jpg" alt="fotoblock7">
                     	<img src="img/gallery/gallery7_7.jpg" alt="fotoblock7">
                     </div>
                     <div class="gallery_block block8">
                     	<img class="img-visible" src="img/gallery/gallery8.jpg" alt="fotoblock8">
                     	<img src="img/gallery/gallery8_8.jpg" alt="fotoblock8">
                     </div>
                     <div class="gallery_block block9">
                     	<img class="img-visible" src="img/gallery/gallery5.png" alt="fotoblock9">
                     	<img src="img/gallery/gallery5_5.jpg" alt="fotoblock9">
                     </div>  
        		</div>
   
               
                <div class="portfolio col-12">
                    <h1 class="portfolio_title font-stretch">Портфолио</h1>
                    <div class="portfolio_cards d-flex justify-content-around flex-wrap">
                        
                    @foreach ($objs as $obj)
                    
                        <a href="{{asset('portfolio/'.$obj->id.'/'.$obj->name)}}" data-id="{{$obj->id}}">
                            <div class="card">
                                    <img class="img-card img-fluid" src="{{asset('storage/'.$obj->image)}}" alt="individualnoe">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                                       <line class="top" x1="0" y1="0" x2="1110" y2="0"/>
                                        <line class="left" x1="0" y1="507" x2="0" y2="-1014"/>
                                        <line class="bottom" x1="370" y1="507" x2="-740" y2="507"/>
                                        <line class="right" x1="370" y1="0" x2="370" y2="1521"/>
                                    </svg>

                                <div class="card-img-overlay">
                                    <div class="camera"><img src="img/camera.svg" alt="camera"></div>
                                    <h2 class="card-title font-stretch">{{$obj->name}}</h2>
                                </div>
                           </div>   
                       </a>                                      
                 
                    @endforeach

                     
                     </div>
                </div>



@endsection
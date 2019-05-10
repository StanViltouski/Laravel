<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
@foreach ($objs as $obj)
    <title>{{$obj->title}}</title>
    <meta name="discription" content="{{$obj->description}}">
@endforeach
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @section('styles')
     
    @show

     <!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	 
 
	<div class="wrapper-header">

	 		<header id="header" class="container-fluid">
	 		 <div class="row m-0">
	 		 	<div class="cap col-12 p-0">
	 		 	    <div class="clearfix">

	 		 		    <div class="cap_logo">
	 		 			    <a href="{{asset('/')}}" title="фотограф Ирина Сахар"><img src="{{asset('img/logo.png')}}" alt="фотограф Ирина Сахар"></a>
	 		 		    </div>

	 		 		    <nav class="cap_menu">
	 		 			    <ul>
	 		 			        <li class="capMenu_link font-stretch"><a href="{{asset('portfolio')}}">Портфолио</a></li>
	 		 			        <li class="capMenu_link font-stretch"><a href="{{asset('services')}}">Услуги</a></li>
	 		 			        <li class="capMenu_link font-stretch"><a href="{{asset('studios')}}">Фотостудии</a></li>
	 		 			        <li class="capMenu_link font-stretch"><a href="{{asset('contacts')}}">Контакты</a></li>
	 		 			    </ul>
                        </nav>
                    </div>
	 		 		<div class="cap_contact col-12 d-flex justify-content-end">
	 		 			<h4 class="font-stretch phone">+375(25)775-44-94</h4>
	 		 			<a href="https://vk.com/id114182321"><img src="{{asset('img/vk_black.svg')}}" alt="vkontakte"></a>
	 		 			<a href="https://www.instagram.com/?hl=ru"><img src="{{asset('img/insta_black.svg')}}" alt="instagam"></a>
	 		 		</div>

                      <nav id="mobile_nav">
   
                            <a href="#mobile_menu" data-toggle="collapse">
                                <div id="nav-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>

                            <ul id="mobile_menu" class="collapse">
                                <li class="mobMenu_link font-stretch"><a href="{{asset('portfolio')}}">Портфолио</a></li>
                                <li class="mobMenu_link font-stretch"><a href="{{asset('services')}}">Услуги</a></li>
                                <li class="mobMenu_link font-stretch"><a href="{{asset('studios')}}">Фотостудии</a></li>
                                <li class="mobMenu_link font-stretch"><a href="{{asset('contacts')}}">Контакты</a></li>
                            </ul>
                        </nav>

                    <div class="page_description ">

                        @yield('name page')

                    </div>
	 		      
	 		 	</div>
	 		 </div>
	 	   </header>
	 </div>


   <!-- Pages From Data Base -->

   <div class="wrapper-content">
        <main id="main" class="container-fluid">
         <div class="row">
        		@yield('content')
        	</div>
        </main>
    </div>


        <div class="wrapper-footer">
	       <footer id="footer" class="footer container-fluid">
        	<div class="row m-0">
        		<div class="col-12 p-0">

        			<h4 class="font-stretch">По любым вопросам свяжитесь со мной</h4>

        		    <div class="footer_button col-12 p-0">
        			    <a class="btn" href="{{asset('contacts')}}"><h3 class="font-stretch">Связаться</h3></a>
        		    </div>

        		    <div class="footer_social col-12">
        		    	<a href="https://vk.com/id114182321"><img src="{{asset('img/vk_white.svg')}}" alt="vkontakte"></a>
        		    	<a href="#"><img src="{{asset('img/insta_white.svg')}}" alt="instagram"></a>
        		    </div>

        		    <p class="font-stretch">&copy; 2019 Ирина Сахар | Все права защищены</p>

        		</div>
        	</div>
      </footer>
    </div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>


<!--  JS -->


<script src="{{asset('js/gallery.js')}}"></script>
<script src="{{asset('js/gallery_adaptive.js')}}"></script>
<script src="{{asset('js/portfolio.js')}}"></script>
<script src="{{asset('js/modal.js')}}"></script>
<script src="{{asset('js/menu.js')}}"></script>


<!-- Modal -->
    

    <div id="full_width" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
      
        </div>
    </div>
    </div>

  </body>
</html>
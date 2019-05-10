<!DOCTYPE html>
<html lang="en">

<head>
    <title>mysite</title>
    <meta charset="UTF-8">
    <meta name="discription" content="123">
    <meta name="keywords" content="123">
    <meta name="Viltouski" content="123">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/reset.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
 	@section('styles')
	 
	@show

    <!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

    <div class="container container-fluid">

        <header id="header" class="row">

            <div id="header_logo" class="col-md-3 col-sm-4 col-xs-6">
                <a class="navbar-brand links_img menu_crmb subMenu_crmb"  href="{{asset('/')}}" title="SVsonate"><img class="img-responsive" src="{{asset('/img/logo.png')}}" alt="logo"></a>
            </div>

            <div id="header_adress" class="col-md-6 col-sm-4 col-xs-6 text-center">
                <address>
                   <h2 class="adress_h2">{{__('main.address_h2')}}</h2>
                   <p class="adress_p">{{__('main.address_p')}}</p>
                   <p class="adress_p">+375(29)543-23-43</p>
                   <p class="adress_p">+375(29)543-24-42</p>
                </address>
            </div>

            <div id="header_panel" class="col-md-3 col-sm-4 col-xs-12">
             
             <div class="basket col-md-7 pull-left text-left">
                 <span class="glyphicon glyphicon-shopping-cart basket_icon"></span>
                  <a class="basket_link" href="{{asset('basket')}}">
                  <span>{{__('navigation.basket')}}</span><span class="basket_count">{{$counts}}</span></a>
             </div>
             
              <div class="col-md-4 pull-right panel_lang">
               <nav>
                   <ul class="nav-pills">
                       <li id="nav_list-hover" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{$lang}}<span class="caret"></span></a>
                           <ul class="dropdown-menu dropdown-menu-right">
                               <li><a href="/?lang=en">en</a></li>
                               <li><a href="/?lang=ru">ru</a></li>

                           </ul>
                   </ul>
               </nav>
            </div>
            
            <form method="get" action="{{asset('poisk')}}" class="hform form-inline pull-right">
                    
                    {!!csrf_field()!!}

                    <div class="input-group">
                        <input class="form-control" id="searchInput" type="text" name="search" placeholder="{{__('navigation.search')}}">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-primary button-width">{{__('navigation.find')}}</button>
                        </div>
                    </div>
                
                </form>
                
            </div>
			 
        </header>

       
        <nav id="nav" class="navbar navbar-inverse">
		
            <ul class="nav-pills">
                <li class="nav_list"><a class="menu_link menu_crmb" data-body="{{__('main.abountData_body')}}" data-picture="minsk" href="{{asset('abount')}}">{{__('navigation.abount')}}</a></li>
                <li id="nav_list-hover" class="nav_list dropdown"><a class="menu_link menu_crmb" data-body="{{__('main.serviceData_body')}}" data-picture="page" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> {{__('navigation.service')}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="subMenu_crmb" href="{{asset('design')}}">{{__('navigation.design')}}</a></li>
                        <li><a class="subMenu_crmb" href="{{asset('development')}}">{{__('navigation.development')}}</a></li>
                        <li><a class="subMenu_crmb" href="{{asset('promotion')}}">{{__('navigation.promotion')}}</a></li>
                        <li><a class="subMenu_crmb" href="{{asset('support')}}">{{__('navigation.support')}}</a></li>
                    </ul>
                <li class="nav_list"><a class="menu_link menu_crmb" data-body="{{__('main.projectsData_body')}}" data-picture="minsk" href="{{asset('projects')}}">{{__('navigation.projects')}}</a></li>
                <li class="nav_list"><a class="menu_link menu_crmb" data-body="{{__('main.newsData_body')}}" data-picture="page" href="{{asset('news')}}">{{__('navigation.news')}}</a></li>
                <li class="nav_list"><a class="menu_link menu_crmb" data-body="{{__('main.contactsData_body')}}" data-picture="minsk"  href="{{asset('contact')}}">{{__('navigation.contacts')}}</a></li>
                <li class="nav_list"><a class="menu_link menu_crmb" data-body="{{__('main.categoryData_body')}}" data-picture="page" href="{{asset('categories')}}">{{__('navigation.category')}}</a></li> 	
				
              <!-- Authentication Links -->
                        @guest
                           <span class="formreg_link-right pull-right">
                            <li class="nav_list">
                               <a class="nav-link" href="{{ route('login') }}">{{__('navigation.enter')}}</a>
                            </li>
                            <li class="nav_list">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{__('navigation.register')}}</a>
                                @endif
                            </li>
                            </span>
                        @else
                            <li class="nav_list nav-item dropdown pull-right">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit()">
                                        {{__('navigation.logout')}}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
                                    </form>
									
                                </div>
                            </li>
                        @endguest
                      
            </ul>
            
        </nav>
 
        <nav>
            <ol class="breadcrumb">
                <li><a href="/">{{__('navigation.main')}}</a></li>
                <li class="active">{{$page}}</li>
                <li class="active">{{$page2}}</li>
				
			    <a class="button_print glyphicon glyphicon-print"  href="{{$_SERVER['REQUEST_URI'].'?print=Y'}}"></a>	
            </ol>
        </nav>
       
       
       
       
       
        <main id="main" class="row">

            <aside id="aside" class="col-md-3 col-sm-4 col-xs-12">

                <div class="aside_submenu">
				   <h1></h1>
				   <a class="btn btn-primary button_link" href="http://blackstar.by/brief.doc" download >{{__('main.asideSubmenu_button')}}</a>
                </div>


                <div class="aside_market hidden-xs">
                    <a href="https://callbackhunter.com/"><img id="market_banner" class="img-responsive" src="{{asset('/img/banner.gif')}}" title="call2bhunter" alt="banner"></a>
                </div>
				         
            </aside>

           
           
           
           
         <!-- Download Pages from DB -->    
           
            <div id="download_pages" class="col-md-9 col-sm-8 col-xs-12">
@yield('content')
            </div>
        </main>

       
       
       
        <footer id="footer" class="row">

            <div class="col-sm-4 col-xs-12 text-center">
                <p class="copyright_text">copyright &copy; <?php echo date('Y');?></p>
            </div>

            <div id="ftrmenu" class="col-sm-4 col-xs-12">

                <div class="row">
                    <span class="col-md-3 col-sm-2 col-xs-4"></span>
                    <h4 id="map_title" class="col-md-6 col-sm-8 col-xs-4 text-center">{{__('main.map_title')}}</h4>
                    <span class="col-md-3 col-sm-2 col-xs-4"></span>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-xs-12 text-center">
                        <a class="map_link" href="{{asset('abount')}}">{{__('navigation.abount')}}</a>
                        <a class="map_link" href="{{asset('design')}}">{{__('navigation.design')}}</a>
                        <a class="map_link" href="#">{{__('navigation.development')}}</a>
                        <a class="map_link" href="#">{{__('navigation.promotion')}}</a>
                    </div>

                    <div class="col-sm-6 col-xs-12 text-center">
                        <a class="map_link" href="#">{{__('navigation.support')}}</a>
                        <a class="map_link" href="{{asset('projects')}}">{{__('navigation.projects')}}</a>
                        <a class="map_link" href="{{asset('news')}}">{{__('navigation.news')}}</a>
                        <a class="map_link" href="{{asset('contact')}}">{{__('navigation.contacts')}}</a>
                        <a class="map_link" href="{{asset('categories')}}">{{__('navigation.category')}}</a>
                    </div>
                </div>
            </div>

           
            <div id="socialnet" class="col-sm-4 col-xs-12">


                <div class="row text-center">
                    <span class="col-md-2 col-sm-1 col-xs-4"></span>
                    <h2 id="socialnet_title" class="col-md-8 col-sm-10 col-xs-4">{{__('main.socialnet_title')}}</h2>
                    <span class="col-md-2 col-sm-1 col-xs-4"></span>
                </div>

                <div class="row">
                    <span class="col-md-3 col-sm-2 col-xs-3"></span>
                    <a class="col-md-2 col-sm-3 col-xs-2" title="vk" href="http://vk.com"><img class="img-responsive ftrimg_link" src="{{asset('/img/vk.png')}}" alt="vk"></a>

                    <a class="col-md-2 col-sm-3 col-xs-2" title="fb" href="http://facebook.com"><img class="img-responsive ftrimg_link" src="{{asset('/img/fb.png')}}" alt="fb"></a>

                    <a class="col-md-2 col-sm-3 col-xs-2" title="telegram" href="http://twitter.com"><img class="img-responsive ftrimg_link" src="{{asset('/img/tw.png')}}" alt="twitter"></a>

                    <span class="col-md-3 col-sm-1 col-xs-3"></span>
                </div>
                
            </div>
        </footer>
    </div>

  
  
  
   <!-- Modal -->

<div class="modal fade bd-example-modal" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header card-header modal_text">{{__('form.title')}}</div>

            <div class="modal-body">
                <form name="test" method="post" action="{{asset('request_call')}}" class="card text-center">
                     {!!csrf_field()!!}
                    <div class="card-body">
					
                        <input type="text" name="name" class="form-control" id="inlineFormInput" placeholder="{{__('form.form_fio')}}">
                   @if ($errors->has('name'))
			           <span class="help-block text-left"><strong style="color:red;">{{$errors->first('name')}}</strong></span>
		           @endif
                        <br><input type="tel" pattern="^[0-9]+$" name="telephone" class="form-control" id="inlineFormInputGroup" placeholder="{{__('form.form_telephone')}}">
						
					@if ($errors->has('telephone'))
			              <span class="help-block text-left"><strong style="color:red;">{{$errors->first('telephone')}}</strong></span>
		            @endif
                       
                        <br><button type="submit" class="btn btn-primary button_link">{{__('form.button')}}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
         
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
 
	@section('script')
	    <script src="{{asset('/js/main.js')}}"></script>
	    <script src="{{asset('/js/design.js')}}"></script>
	@show
    
</body>
</html>

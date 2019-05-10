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
	<div id="download_pages" class="print_version col-md-12">
          <h1><img src="/img/logo.png"></h1>
		  @yield('content')  
    </div>
          
    </div>
</div>
        
</body>
</html>

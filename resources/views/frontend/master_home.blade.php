<!DOCTYPE html>

<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Kards</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{asset('frontend/css/base.css')}}">  
   <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/css/vendor.css')}}">  
   
     <!-- message toaster
   ================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"> 

   <!-- script
   ================================================== -->   
	<script src="{{asset('frontend/js/modernizr.js')}}"></script>
	<script src="{{asset('frontend/js/pace.min.js')}}"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="{{asset('frontend/favicon.png')}}">
   
    @foreach ($backgrounds as $background )
<style>
  
   #intro {
    background: #151515 url('{{asset($background->background_img)}}') no-repeat center bottom;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    width: 100%;
    height: 100%;
    min-height: 720px;
    display: table;
    position: relative;
    text-align: center;
}
</style>
 @endforeach
</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="index.html">KARDS</a>
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
						<li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>
						<li><a class="smoothscroll"  href="#services" title="">Services</a></li>					
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>	
									
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

   @yield('main_content')


     <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			      <li><a href="#"><i class="fa fa-behance"></i></a></li>
			      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
			      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>© Copyright Kards 2016.</span> 
		        	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="{{asset('frontend/js/jquery-2.1.3.min.js')}}"></script>
   <script src="{{asset('frontend/js/plugins.js')}}"></script>
   <script src="{{asset('frontend/js/main.js')}}"></script>

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if (Session::has('message')){
        var type = "{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info' :
                toastr.info("{{Session::get('message')}}");
                break;
            case 'success' :
            toastr.success("{{Session::get('message')}}");
            break;
            case 'warning' :
                toastr.warning("{{Session::get('message')}}");
                break;
            case 'error' :
                toastr.error("{{Session::get('message')}}");
                break;    
        }
    }
        
    @endif
</script>

</body>

</html>
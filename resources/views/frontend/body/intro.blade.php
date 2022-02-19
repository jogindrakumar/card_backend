	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Hello, World.</h5>
				   @foreach ($abouts as $about )
	   			<h1>I'm {{$about->name}}.</h1>

	

	   			<p class="intro-position">
	   				<span>{{$about->position_first}}</span>
	   				<span>{{$about->position_second}}</span> 
	   			</p>
		@endforeach
	   			<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">      
		   @foreach ($socialmedias as $socialmedia)
			   
		   
         <li><a href="#"><i class="{{$socialmedia->icon}}"></i></a></li>
         @endforeach  
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->
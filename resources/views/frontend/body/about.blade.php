<!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1>Let me introduce myself.</h1>

   			<div class="intro-info">
  @foreach ($abouts as $about )
   				<img src="{{asset($about->img)}}" alt="Profile Picture">

   				<p class="lead">{{$about->desp}}</p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Profile</h3>
   			{{-- <p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.</p> --}}

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span>{{$about->name}}</span>
   				</li>
   				{{-- <li>
   					<strong>Birth Date:</strong>
   					<span>September 28, 1987</span>
   				</li> --}}
   				<li>
   					<strong>Job:</strong>
   					<span>{{$about->job}}</span>
   				</li>
   				<li>
   					<strong>Website:</strong>
   					<span>www.jogindrakumar.com</span>
   				</li>
   				<li>
   					<strong>Email:</strong>
   					<span>{{$about->email}}</span>
   				</li>

   			</ul> <!-- /info-list -->
		@endforeach
   		</div>

   		<div class="col-six tab-full">

   			<h3>Skills</h3>
   			<p></p>
	@foreach ($skills as $skill )
				<ul class="skill-bars">	
				   <li>
					
				   	<div class="progress percent{{$skill->skill_per}}"></div>
				   	<strong>{{$skill->skill_name}}</strong>
				   </li>
			
				   
      
				</ul> <!-- /skill-bars -->		
	@endforeach
   		</div>
		   <div class="progress" style="height: 20px;">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
   			<a href="#" title="Download CV" class="button button-primary">Download CV</a>
   		</div>   		
   	</div>

   </section> <!-- /process-->    
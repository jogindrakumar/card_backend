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
   			<p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.</p>

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span>{{$about->name}}</span>
   				</li>
   				<li>
   					<strong>Birth Date:</strong>
   					<span>September 28, 1987</span>
   				</li>
   				<li>
   					<strong>Job:</strong>
   					<span>{{$about->job}}</span>
   				</li>
   				<li>
   					<strong>Website:</strong>
   					<span>www.kardswebsite.com</span>
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

				<ul class="skill-bars">
					@foreach ($skills as $skill )
						
					
				   <li>
				   	<div class="progress percent90"><span>{{$skill->skill_per}}%</span></div>
				   	<strong>{{$skill->skill_name}}</strong>
				   </li>
				@endforeach
				   
      
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
   			<a href="#" title="Download CV" class="button button-primary">Download CV</a>
   		</div>   		
   	</div>

   </section> <!-- /process-->    
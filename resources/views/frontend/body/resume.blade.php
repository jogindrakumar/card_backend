<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Resume</h5>
   			<h1>More of my credentials.</h1>


   			<p class="lead"></p>

   			

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Work Experience</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

				@foreach ($works as $work )
					
				
   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>{{$work->post_name}}</h3>
	   					{{-- <p>July 2015 - Present</p> --}}
	   				</div>

	   				<div class="timeline-content">
	   					<h4>{{$work->company_name}}</h4>
	   					<p>{{$work->desp}}</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   		@endforeach

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
   	
   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Education</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">


				@foreach ($educations as $education)
					
				
   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>{{$education->degree_name}}</h3>
	   					{{-- <p>July 2015 - Present</p> --}}
	   				</div>

	   				<div class="timeline-content">
	   					<h4>{{$education->from}}</h4>
	   					<p>{{$education->desp}}</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			@endforeach

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
		
	</section> <!-- /features -->
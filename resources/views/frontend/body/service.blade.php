<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Services</h5>
   			<h1>What Can I Do For You?</h1>

   			<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row services-content">

   		<div id="owl-slider" class="owl-carousel services-list">


			@foreach ($services as $service)
				
			
	      	<div class="service">	

	      		<span class="icon"><i class="{{$service->service_icon}}"></i></span>            

	            <div class="service-content">	

	            	 <h3>{{$service->service_name}}</h3>

		            <p class="desc">{{$service->service_desp}}
	         		</p>
	         		
	         	</div> 	         	 

				</div> <!-- /service -->

				@endforeach


				


			   

	      </div> <!-- /services-list -->
   		
   	</div> <!-- /services-content -->
		
	</section>
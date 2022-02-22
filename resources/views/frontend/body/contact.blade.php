	<section id="contact">
       @if (Session::has('success'))
<div class="alert alert-success" role="alert">
  {{Session::get('success')}}
</div>
  
@endif
 @if (Session::has('error'))
<div class="alert alert-danger" role="alert">
  {{Session::get('error')}}
</div>
  
@endif
		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1>I'd Love To Hear From You.</h1>

<<<<<<< HEAD
   			<p class="lead">No Matter How big or small project you have .. we'll discuss . Feel Free to send Message :) </p>
=======
   			{{-- <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p> --}}
>>>>>>> 05b88ca611dca2d3397893524a8821991b4d4820

   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
            <form   method="post" action="{{route('message.store')}}">
			@csrf
      			<fieldset>

                  <div class="form-field">
 						   <input name="name" type="text"  placeholder="Name" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="email" type="email"  placeholder="Email" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="subject" type="text"  placeholder="Subject" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="msg"  placeholder="message" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button class="submitform" type="submit">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">            	
            </div>            
            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>
@foreach ($abouts as $about )
   			<p>
            {{$about->address}}
            </p>
@endforeach
   		</div>

   		<div class="col-four tab-full collapse">

			{{-- @php
				 $abouts =  App\Models\About::latest()->get();
			@endphp --}}

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>
@foreach ($abouts as $about )
	

   			<p>{{$about->email}}			     
			   </p>
@endforeach
   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>
@foreach ($abouts as $about )
   			<p>{{$about->mobile}}
			   </p>
@endforeach
   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> 
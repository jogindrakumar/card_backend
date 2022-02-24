<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Portfolio</h5>
   			<h1>Check Out Some of My Works.</h1>

   			{{-- <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p> --}}

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row portfolio-content">

   		<div class="col-twelve">

   			<!-- portfolio-wrapper -->
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">
@foreach ($portfolios as $portfolio)
	

	         	<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="{{asset($portfolio->project_img)}}" alt="Liberty">
	                  <a href="#modal-{{$portfolio->id}}" class="overlay">	                  	           
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
		     					       <h3 class="folio-title">{{$portfolio->project_name}}</h3>	     					    
		     					    	 <span class="folio-types">
		     					       	  {{$portfolio->project_tech}}
		     					       </span>
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>	               
	        		</div> <!-- /folio-item -->

	        		@endforeach

	            
	              
	        		</div> <!-- /folio-item -->   
@foreach ($portfolios as $portfolio)
	            <!-- modal popups - begin
	            ============================================================= -->
	            <div id="modal-{{$portfolio->id}}" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="{{asset($portfolio->model_img)}}" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>{{$portfolio->project_name}}</h4>		      
					      <p></p>

					      <div class="categories"> {{$portfolio->project_tech}}</div>			               
					   </div>

			         <div class="link-box">
			            <a href="{{$portfolio->project_link}}" target="_blank">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-01 -->
<!-- /modal-06 -->
	@endforeach

				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper --> 

   		</div>  <!-- /twelve -->   

   	</div> <!-- /portfolio-content --> 
		
	</section>
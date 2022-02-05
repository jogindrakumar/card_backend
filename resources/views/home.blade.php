@extends('frontend.master_home')
@section('main_content')


@include('frontend.body.intro')

   @include('frontend.body.about')


   <!-- resume Section
   ================================================== -->
	
@include('frontend.body.resume')

	<!-- Portfolio Section
   ================================================== -->
	 <!-- /portfolio --> 
@include('frontend.body.portfolio')

	<!-- CTA Section
   ================================================== -->
	@include('frontend.body.cta')
   <!-- /cta --> 

	
	<!-- services Section
   ================================================== -->
	
   @include('frontend.body.service')
   <!-- /services -->	


	<!-- stats Section
   ================================================== -->
	@include('frontend.body.stats')
   <!-- /stats -->

	
   <!-- contact
   ================================================== -->

@include('frontend.body.contact')
   <!-- /contact -->


 @endsection
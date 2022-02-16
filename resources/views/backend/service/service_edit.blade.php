 
 @extends('admin.admin_master')
@section('main_content')

 {{-- Add About form here  --}}

            	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Service</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('service.update',$services->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
      
    
        <div class="form-group">
        <h5>Service Name<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="service_name" class="form-control"  value="{{$services->service_name}}"  > 
		@error('service_name')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
     <div class="form-group">
        <h5>Description<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="service_desp" class="form-control"  value="{{$services->service_desp}}"  > 
		@error('service_desp')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	 <div class="form-group">
        <h5>Icon<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="service_icon" class="form-control"  value="{{$services->service_icon}}"  > 
		@error('service_icon')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	 
	
   

             
   
    <div class="text-xs-right">
        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
       
    </div>
</form>
			</div>
			</div>
			
		  </div>
		  
		</section>
		
	  
	  </div>
      @endsection
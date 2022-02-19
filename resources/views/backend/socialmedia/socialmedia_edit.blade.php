 
 @extends('admin.admin_master')
@section('main_content')

 {{-- Add About form here  --}}

            	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Social media</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('socialmedia.update',$socialmedias->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
      
    
        <div class="form-group">
        <h5>Icon<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="icon" class="form-control"  value="{{$socialmedias->icon}}"  > 
		@error('icon')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
     <div class="form-group">
        <h5>Name<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="name" class="form-control"  value="{{$socialmedias->name}}"  > 
		@error('name')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	 <div class="form-group">
        <h5>Link<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="link" class="form-control"  value="{{$socialmedias->link}}"  > 
		@error('link')
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
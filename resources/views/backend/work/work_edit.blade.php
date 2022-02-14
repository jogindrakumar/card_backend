 
 @extends('admin.admin_master')
@section('main_content')

 {{-- Add About form here  --}}

            	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Update work</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('work.update',$works->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
      
    
        <div class="form-group">
        <h5>Post Name<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="post_name" value="{{$works->post_name}}" class="form-control"  value=""  > 
		@error('post_name')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
     <div class="form-group">
        <h5>Compnay Name<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="company_name" value="{{$works->company_name}}" class="form-control"> 
		@error('company_name')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	 <div class="form-group">
        <h5>Description<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="desp" class="form-control" value="{{$works->desp}}" > 
		@error('desp')
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
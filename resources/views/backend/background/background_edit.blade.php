 
 @extends('admin.admin_master')
@section('main_content')

 {{-- Add About form here  --}}

            	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Education</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('background.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
      
    <input type="hidden" name="old_image" value="{{$backgrounds->background_img}}">
        <div class="form-group">
        <h5>Background Image<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="file" name="background_img" class="form-control"  value="{{$backgrounds->background_img}}"  > 
		@error('background_img')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
           
    <div class="text-xs-right">
        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">
       
    </div>
</form>
			</div>
			</div>
			
		  </div>
		  
		</section>
		
	  
	  </div>
      @endsection
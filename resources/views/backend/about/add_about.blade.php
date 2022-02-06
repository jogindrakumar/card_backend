 
 @extends('admin.admin_master')
@section('main_content')

 {{-- Add About form here  --}}

            	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add About</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="" method="POST" enctype="multipart/form-data">
        @csrf
      
    
        <div class="form-group">
        <h5>Brand Name English<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="brand_name_en" class="form-control"  value=""  > 
		@error('brand_name_en')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
    <div class="form-group">
        <h5>Brand Name Hindi<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="brand_name_hin" class="form-control"  value=""  >
		@error('brand_name_hin')
		<span class="text-danger">{{$message}}</span>
		@enderror
	 </div>
    </div>
    <div class="form-group">
        <h5>Brand Image<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="file" name="brand_image"  class="form-control"  value=""  > 
	@error('brand_image')
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
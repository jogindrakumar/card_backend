 
 @extends('admin.admin_master')
@section('main_content')

 {{-- Add About form here  --}}

            	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Update Portfolio</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('portfolio.update',$portfolios->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
      
    
        <div class="form-group">
        <h5>Project Name<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="project_name" class="form-control"  value="{{$portfolios->project_name}}"  > 
		@error('project_name')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	 <div class="form-group">
        <h5>Project technology<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="project_tech" class="form-control"  value="{{$portfolios->project_tech}}"  > 
		@error('project_tech')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	<input type="hidden" name="old_image" value="{{$portfolios->project_img}}">
	<div class="form-group">
        <h5>Project img<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="file" name="project_img"  class="form-control"  value="{{$portfolios->project_img}}"  > 
	@error('project_img')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
	<input type="hidden" name="old_model_image" value="{{$portfolios->model_img}}">
	<div class="form-group">
        <h5>Model img<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="file" name="model_img"  class="form-control"  value="{{$portfolios->model_img}}"  > 
	@error('model_img')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
     <div class="form-group">
        <h5>Project Link<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="project_link" class="form-control" value="{{$portfolios->project_link}}" > 
		@error('project_link')
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
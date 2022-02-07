 
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
        <h5>Name<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="name" class="form-control"  value=""  > 
		@error('name')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	 <div class="form-group">
        <h5>position First<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="position_first" class="form-control"  value=""  > 
		@error('position_first')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	<div class="form-group">
        <h5>Position second<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="position_second" class="form-control"  value=""  > 
		@error('position_first')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
    <div class="form-group">
        <h5>Email<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="email" name="email" class="form-control"  value=""  >
		@error('email')
		<span class="text-danger">{{$message}}</span>
		@enderror
	 </div>
    </div>
    <div class="form-group">
        <h5>Description<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="desp"  class="form-control"  value=""  > 
	@error('desp')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
	<div class="form-group">
        <h5>job<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="job"  class="form-control"  value=""  > 
	@error('job')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
	<div class="form-group">
        <h5>skill_name<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="skill_name"  class="form-control"  value=""  > 
	@error('skill_name')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
   
	<div class="form-group">
        <h5>skill_per<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="skill_per"  class="form-control"  value=""  > 
	@error('skill_per')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
	<div class="form-group">
        <h5>Profile pic<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="file" name="img"  class="form-control"  value=""  > 
	@error('img')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
	<div class="form-group">
        <h5>CV<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="file" name="cv"  class="form-control"  value=""  > 
	@error('img')
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
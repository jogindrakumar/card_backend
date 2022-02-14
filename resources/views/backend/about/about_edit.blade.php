 
 @extends('admin.admin_master')
@section('main_content')

 {{-- Add About form here  --}}

            	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit About</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('about.update',$abouts->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
      
    
        <div class="form-group">
        <h5>Name<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="name" value="{{$abouts->name}}" class="form-control"  value=""  > 
		@error('name')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	 <div class="form-group">
        <h5>Address<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="address" value="{{$abouts->address}}" class="form-control"  value=""  > 
		@error('address')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	 <div class="form-group">
        <h5>position First<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="position_first" value="{{$abouts->position_first}}" class="form-control"  value=""  > 
		@error('position_first')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	<div class="form-group">
        <h5>Position second<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="position_second" value="{{$abouts->position_second}}" class="form-control" > 
		@error('position_second')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
    <div class="form-group">
        <h5>Email<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="email" name="email" value="{{$abouts->email}}" class="form-control"  value=""  >
		@error('email')
		<span class="text-danger">{{$message}}</span>
		@enderror
	 </div>
    </div>
	<div class="form-group">
        <h5>Mobile<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="mobile" value="{{$abouts->mobile}}" class="form-control" >
		@error('mobile')
		<span class="text-danger">{{$message}}</span>
		@enderror
	 </div>
    </div>
    <div class="form-group">
        <h5>Description<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="desp" value="{{$abouts->desp}}" class="form-control"  value=""  > 
	@error('desp')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
	<div class="form-group">
        <h5>job<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="job" value="{{$abouts->job}}" class="form-control"  value=""  > 
	@error('job')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
	<div class="form-group">
        <h5>Profile pic<span class="text-danger">*</span></h5>
        <img src="{{asset($abouts->img)}}" alt="" style="width:70px; height:40px;">
		<input type="hidden" name="old_img" class="form-control"  value="{{$abouts->img}}">
        
        <div class="controls">
        <input type="file" name="img"  class="form-control"  value="{{$abouts->img}}"  > 
	@error('img')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
	<div class="form-group">
        <h5>CV<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="file" name="cv"  class="form-control"  value="{{$abouts->cv}}"  > 
	@error('cv')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>

             
   
    <div class="text-xs-right">
        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="update">
       
    </div>
</form>
			</div>
			</div>
			
		  </div>
		  
		</section>
		
	  
	  </div>
      @endsection
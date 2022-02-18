 
 @extends('admin.admin_master')
@section('main_content')

 {{-- Add About form here  --}}

            	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Target</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('target.update',$targets->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
      
    
        <div class="form-group">
        <h5>Icon<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="icon" class="form-control"  value="{{$targets->icon}}"  > 
		@error('icon')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
     <div class="form-group">
        <h5>Count<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="count" class="form-control"  value="{{$targets->count}}"  > 
		@error('count')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	 <div class="form-group">
        <h5>Title<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="title" class="form-control"  value="{{$targets->title}}"  > 
		@error('title')
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
 
 @extends('admin.admin_master')
@section('main_content')

 {{-- Add About form here  --}}

            	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Target</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('target.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
      
    
        <div class="form-group">
        <h5>Icon<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="icon" class="form-control"  value=""  > 
		@error('icon')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
     <div class="form-group">
        <h5>Count<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="count" class="form-control"  value=""  > 
		@error('count')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	 <div class="form-group">
        <h5>Title<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="title" class="form-control"  value=""  > 
		@error('title')
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
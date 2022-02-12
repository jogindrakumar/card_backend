 
 @extends('admin.admin_master')
@section('main_content')

 {{-- Add About form here  --}}

            	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Skill</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('skill.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
      
    
        <div class="form-group">
        <h5>Skill Name<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="skill_name" class="form-control"  value=""  > 
		@error('skill_name')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	 <div class="form-group">
        <h5>Skill Percentage<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="skill_per" class="form-control"  value=""  > 
		@error('skill_per')
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
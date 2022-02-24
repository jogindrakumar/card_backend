@extends('admin.admin_master')
@section('main_content')


	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Background Image</h3>
                  <br>
                  <br>
                   <a href="{{route('add.background')}}" class="btn btn-success btn-sm" title="Add Background"><i class="fa fa-plus"></i></a>
				</div>
                <div>
                   
                </div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								
								<th>background Image</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
                           
                                
 @foreach ($backgrounds as $background)                         
<tr>
	<td><img src="{{asset($background->background_img)}}" alt="" style="width: 70px; height:70px"></td>	
	

<td>
		 	@if($background->status == 1)
		 	<span class="badge badge-pill badge-success"> Active </span>
		 	@else
           <span class="badge badge-pill badge-danger"> InActive </span>
		 	@endif

		 </td>

		<td width="30%">
  <a href="{{ route('background.edit',$background->id) }}" class="btn btn-info btn-sm" title="Edit Data"><i class="fa fa-pencil"></i> </a>

 <a href="{{ route('background.delete',$background->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
 	<i class="fa fa-trash"></i></a>

@if($background->status == 1)
 <a href="{{ route('background.inactive',$background->id) }}" class="btn btn-danger btn-sm" title="Inactive Now"><i class="fa fa-arrow-down"></i> </a>
	 @else
 <a href="{{ route('background.active',$background->id) }}" class="btn btn-success btn-sm" title="Active Now"><i class="fa fa-arrow-up"></i> </a>
	 @endif

		</td>

	 </tr>
	  @endforeach    
        </tr>
         
							
						</tbody>
					
					  </table>
					</div>
				</div>
				
			  </div>
			        
			</div>



           
  

@endsection
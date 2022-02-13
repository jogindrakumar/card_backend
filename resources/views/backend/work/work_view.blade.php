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
				  <h3 class="box-title">Work</h3>
                  <br>
                  <br>
                   <a href="{{route('add.work')}}" class="btn btn-success" title="Add Work"><i class="fa fa-plus"></i></a>
				</div>
                <div>
                   
                </div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								
								<th>Post Name</th>
								<th>Company Name</th>
								<th>Description</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                           
                                
 @foreach ($works as $work)                         
<tr>
	
	<td>{{$work->post_name}}</td>
	<td>{{$work->company_name}}</td>	
	<td>{{$work->desp}}</td>	
<td>
<a href="{{route('work.edit',$work->id)}}" class="btn btn-warning" title="Edit Data"><i class="fa fa-edit"></i></a>
<a href="{{route('work.delete',$work->id)}}" class="btn btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
</td>
      @endforeach      
        </tr>
         
							
						</tbody>
					
					  </table>
					</div>
				</div>
				
			  </div>
			        
			</div>



           
  

@endsection
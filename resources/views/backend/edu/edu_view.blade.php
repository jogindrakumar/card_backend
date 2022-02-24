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
				  <h3 class="box-title">Education</h3>
                  <br>
                  <br>
                   <a href="{{route('add.edu')}}" class="btn btn-success btn-sm" title="Add Education"><i class="fa fa-plus"></i></a>
				</div>
                <div>
                   
                </div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								
								<th>Degree Name</th>
								<th>From</th>
								<th>Description</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                           
                                
 @foreach ($edus as $edu)                         
<tr>
	
	<td>{{$edu->degree_name}}</td>
	<td>{{$edu->from}}</td>	
	<td>{{$edu->desp}}</td>	
<td>
<a href="{{route('edu.edit',$edu->id)}}" class="btn btn-warning btn-sm" title="Edit Data"><i class="fa fa-edit"></i></a>
<a href="{{route('edu.delete',$edu->id)}}" class="btn btn-danger btn-sm" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
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
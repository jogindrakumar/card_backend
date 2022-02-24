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
				  <h3 class="box-title">Social Media</h3>
                  <br>
                  <br>
                   <a href="{{route('add.socialmedia')}}" class="btn btn-success btn-sm" title="Add Social Media"><i class="fa fa-plus"></i></a>
				</div>
                <div>
                   
                </div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								
								<th>Icon</th>
								<th>Name</th>
                                <th>Link</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                           
                                
 @foreach ($socialmedias as $socialmedia)                         
<tr>
	
	<td>{{$socialmedia->icon}}</td>
	<td>{{$socialmedia->name}}</td>	
	<td>{{$socialmedia->link}}</td>	
<td>
<a href="{{route('socialmedia.edit',$socialmedia->id)}}" class="btn btn-warning btn-sm" title="Edit Data"><i class="fa fa-edit"></i></a>
<a href="{{route('socialmedia.delete',$socialmedia->id)}}" class="btn btn-danger btn-sm" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
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
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
                   <a href="{{route('add.bg')}}" class="btn btn-success" title="Add Edu"><i class="fa fa-plus"></i></a>
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
								
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                           
                                
 @foreach ($edus as $edu)                         
<tr>
	
	<td>{{$edu->background_img}}</td>

<td>
<a href="{{route('bg.edit',$background_img->id)}}" class="btn btn-warning" title="Edit Data"><i class="fa fa-edit"></i></a>
<a href="{{route('bg.delete',$background_img->id)}}" class="btn btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
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
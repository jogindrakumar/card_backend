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
				  <h3 class="box-title">Portfolio</h3>
                  <br>
                  <br>
                   <a href="{{route('add.portfolio')}}" class="btn btn-success btn-sm" title="Add Portfolio"><i class="fa fa-plus"></i></a>
				</div>
                <div>
                   
                </div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Image</th>
								<th>Model img</th>
								<th>Project Name</th>
								<th>Tech</th>
								<th>Link</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                           
                            
 @foreach ($portfolios as $portfolio)                         
<tr>
	<td><img src="{{asset($portfolio->project_img)}}" alt="" style="width: 70px; height:70px"></td>	
	<td><img src="{{asset($portfolio->model_img)}}" alt="" style="width: 70px; height:70px"></td>	
	<td>{{$portfolio->project_name}}</td>
	<td>{{$portfolio->project_tech}}</td>	
	<td>{{$portfolio->project_link}}</td>	
	
<td>
<a href="{{route('portfolio.edit',$portfolio->id)}}" class="btn btn-warning btn-sm" title="Edit Data"><i class="fa fa-edit"></i></a>
<a href="{{route('portfolio.delete',$portfolio->id)}}" class="btn btn-danger btn-sm" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
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
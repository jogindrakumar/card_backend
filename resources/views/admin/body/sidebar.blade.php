<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/logo-dark.png')}}" alt="">
						  <h3><b>Admin</b>-Dashboard</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="/admin/dashboard">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		 <li class="treeview">
          <a href="#">
            <i data-feather="image"></i>
            <span>Background Image </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('all.background')}}"><i class="ti-more"></i>View</a></li>
            <li><a href="{{route('add.background')}}"><i class="ti-more"></i>Add</a></li>
           
          </ul>
        </li> 

         <li class="treeview">
          <a href="#">
            <i data-feather="file-text"></i>
            <span>About</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('all.about')}}"><i class="ti-more"></i>View</a></li>
            <li><a href="{{route('add.about')}}"><i class="ti-more"></i>Add</a></li>
           
          </ul>
          
        </li> 
         <li class="treeview">
          <a href="#">
            <i data-feather="aperture"></i>
            <span>Skill</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('all.skill')}}"><i class="ti-more"></i>View</a></li>
            <li><a href="{{route('add.skill')}}"><i class="ti-more"></i>Add</a></li>
           
          </ul>
          
        </li> 
        
        <li class="treeview">
          <a href="#">
            <i data-feather="award"></i>
            <span>Work Experience</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('all.work')}}"><i class="ti-more"></i>View</a></li>
            <li><a href="{{route('add.work')}}"><i class="ti-more"></i>Add</a></li>
           
          </ul>
          
        </li> 
         <li class="treeview">
          <a href="#">
            <i data-feather="book-open"></i>
            <span>Education</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('all.edu')}}"><i class="ti-more"></i>View</a></li>
            <li><a href="{{route('add.edu')}}"><i class="ti-more"></i>Add</a></li>
           
          </ul>
          
        </li> 
        <li class="treeview">
          <a href="#">
            <i data-feather="box"></i>
            <span>Portfolio</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('all.portfolio')}}"><i class="ti-more"></i>View</a></li>
            <li><a href="{{route('add.portfolio')}}"><i class="ti-more"></i>Add</a></li>
           
          </ul>
        </li> 
         <li class="treeview">
          <a href="#">
            <i data-feather="layers"></i>
            <span>Service</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('all.service')}}"><i class="ti-more"></i>View</a></li>
            <li><a href="{{route('add.service')}}"><i class="ti-more"></i>Add</a></li>
           
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i data-feather="target"></i>
            <span>Target</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('all.target')}}"><i class="ti-more"></i>View</a></li>
            <li><a href="{{route('add.target')}}"><i class="ti-more"></i>Add</a></li>
           
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i data-feather="facebook"></i>
            <span>Social Media</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('all.socialmedia')}}"><i class="ti-more"></i>View</a></li>
            <li><a href="{{route('add.socialmedia')}}"><i class="ti-more"></i>Add</a></li>
           
          </ul>
        </li> 

          <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Message</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('all.message')}}"><i class="ti-more"></i>View</a></li>
          </ul>
        </li> 
      
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
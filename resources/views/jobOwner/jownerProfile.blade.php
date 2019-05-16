@include('layouts.partial.loading')



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style type="text/css">
    
    
  </style>

</head>
@if(Auth::user()->role_id == 2)
 <div class="page">
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/back-end">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user-shield"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/back-end">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

     
     
 @if(Auth::user()->role_id == 1)

<li class="nav-item">
        <a class="nav-link" href="/jobseekerlist">
         <i class="fas fa-list"></i>
          <span>Job Seeker List</span></a>
      </li>

<li class="nav-item">
        <a class="nav-link" href="/adminapplylist">
         <i class="fas fa-list"></i>
          <span>Job Applied List</span></a>
      </li>

<li class="nav-item">
        <a class="nav-link" href="/jobownerlist">
        <i class="fas fa-list"></i>
          <span>Job Owner List</span></a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="/industry">
          <i class="fas fa-plus-square"></i>
          <span>Create Industry</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/log-viewer">
         <i class="fas fa-bookmark"></i>
          <span>Log Viewer</span></a>
      </li>
  <li class="nav-item">
        <a class="nav-link" href="/adminreport">
         <i class="fas fa-book"></i>
          <span>Report</span></a>
      </li>    

</ul>
       @endif  

        @if(Auth::user()->role_id == 2)

 <li class="nav-item">
        <a class="nav-link" href="/jobseekerlist">
         <i class="fas fa-list"></i>
          <span>Job Seeker List</span></a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="/postjob">
          <i class="fas fa-plus-square"></i>
          <span>Job Create</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/joblist">
         <i class="fas fa-list"></i>
          <span>Job List</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/jobexpire">
       <i class="fas fa-table"></i>
          <span>Job Expired</span></a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="/applylist">
         <i class="fas fa-list"></i>
          <span>Job Applied List</span></a>
      </li>
 <li class="nav-item">
        <a class="nav-link" href="/ownerreport">
         <i class="fas fa-book"></i>
          <span>Report</span></a>
      </li> 
<li class="nav-item">
        <a class="nav-link" href="/">
      <i class="fas fa-home"></i>
          <span>View Page</span></a>
      </li> 
       @endif 
      <!-- Nav Item - Tables -->
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            
            <!-- Nav Item - Messages -->
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
               @if(Auth::user()->role_id==1)
                <img class="img-profile rounded-circle" src="https://www.freeiconspng.com/uploads/businessman-icon-16.jpg">
                @endif
                 @if(Auth::user()->role_id==2)
                <img class="img-profile rounded-circle" src="https://cdn.dribbble.com/users/722246/screenshots/2076327/character-animated-2.gif">
                @endif
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/viewjobowner">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
         <div class="container">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View Profile</h1>
            
          </div>
        @endif
                 @if(Session::get('u'))
      <div class="alert alert-success" role="alert">
    {{Session::get('u')}}

    </div>
      @endif

      {{Session::forget('u')}}

      @foreach($errors->all() as $error)
      <div class="alert alert-danger" role="alert"id="alert">
 

    *{{$error}}<br>
    

    </div>
    @endforeach

    
              @if(Session::get('update'))
<div class="alert alert-success" role="alert"id="alert">

  Profile Successfully Updated!!!
</div>
@endif

{{Session::forget('update')}}
              </div>

             
            </div>


            <div class="container"style="overflow-x:auto;">
             
            <div class="row"> 
              <div class="col-md-4 text-center">
                <img src="/upload/{{Auth::user()->pic_path}}" class="avatar img-thumbnail" alt="avatar"width="200px">
                     
                    
       
          
        <?php
    echo Form::open(array('url' =>'/uploadowner','files'=>'true'));
  
    echo Form::file('image',['class' => 'form-control']);  
    echo "<br>";

    echo Form::submit('Upload Company Logo',['class' => 'btn btn-primary']);
    echo Form::close();

    ?>
                <br> 
            
              </div>
               <div class="col-lg-4">
              <form method="post"action="/viewjobowner">
            {{ csrf_field() }}
                <div class="form-group">
                  <label for="user_last_name">Name*</label>
                  <input type="text"name="name"class="form-control"value="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                  <label for="user_first_name">Nrc*</label>
                  <input type="text"name="nrc"value="{{Auth::user()->nrc}}" class="form-control" >
                </div>

                <div class="form-group">
                  <label for="user_middle_name">Email*</label>
                  <input type="text"name="email"value="{{Auth::user()->email}}"class="form-control">
                </div>

                 <div class="form-group">
                  <label for="user_first_name">Password*</label>
                  <input type="password"name="password"id="myInput"value="{{Auth::user()->password}}"class="form-control" >
                  <input type="checkbox" onclick="myFunction()">show password
                </div>
                 <div class="form-group">
                  <label for="user_first_name">Number Of Employee*</label>
                  @foreach($users as $u)
                  @endforeach
                  <select class="form-control"name="emp">
                    <option>{{$u->no_employee}}</option>
                    <option>100</option>
                    <option>200</option>
                    <option>300</option>
                    <option>400</option>
                     <option>500</option>
                  </select>
                 
                </div>
                 <div class="form-group">
                  <label for="user_first_name">Phone*</label>
                  <input type="text"value="{{Auth::user()->phno}}"name="phno"class="form-control" >
                </div>
                 <div class="form-group">
                  <label for="user_first_name">Company*</label>
                  <input type="text" value="{{$u->company_name}}"name="com"class="form-control">
                </div>
                 <div class="form-group">
                  <label for="user_first_name">Address</label>
                  <input type="text"value="{{Auth::user()->address}}"name="address"class="form-control" >
                </div>
                <hr>
                <button type="submit"class="btn btn-primary pull-right"><i class="glyphicon glyphicon-floppy-disk"></i> Update</button>
              </div>
           
          
    
                
              </div>
           
        </form>
       
     
    

  
  

@if(Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
</div>

<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; AI Project Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a href="route('logout')" class="btn btn-primary btn-flat"

        onclick="event.preventDefault();

          document.getElementById('logout-form').submit();">  {{__('Logout') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>   
        </div>
      </div>
    </div>
  </div>
  </div>
  <div id="loading"></div>
 @endif

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script type="text/javascript">
  setTimeout(function(){
 
    $(".alert").hide("20")
 
    }, 1000);


  function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>
</body>

</html>


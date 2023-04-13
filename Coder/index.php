<?php 
session_start();
$current_user_type =  "ANYOM" ;  // defin
$current_user_name = "ANYOM" ; 
$isAuth = FALSE ; 
if (isset($_SESSION["usertype"])){ 
  $current_user_type = $_SESSION["usertype"]; 
  $current_user_name = $_SESSION["username"];  
  if ( $current_user_type  == "Coder") 
       $isAuth = TRUE ;  

}
if (!$isAuth)
  header("Location: ../Auth.php");

?> 

<!DOCTYPE html>
<html lang="en">
  <head>




<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">

<title>
  
 coder
  

</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />





  </head>


  <body class="g-sidenav-show  bg-gray-100">
    

    

    
      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="#" target="_blank">
      <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Coder </span>
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      
 
  
<li class="nav-item">
  <a class="nav-link text-white " href="#">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>
    
    <span class="nav-link-text ms-1">Dashboard</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="#">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">table_view</i>
      </div>
    
    <span class="nav-link-text ms-1">Projects</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="#">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">receipt_long</i>
      </div>
    
    <span class="nav-link-text ms-1">User managemant</span>
  </a>
</li>



  
  
<li class="nav-item">
  <a class="nav-link text-white " href="#">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">notifications</i>
      </div>
    
    <span class="nav-link-text ms-1">Notifications</span>
  </a>
</li>

  
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
    </li>
  
<li class="nav-item">
  <a class="nav-link text-white " href="./profile.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">person</i>
      </div>
    
    <span class="nav-link-text ms-1">Profile</span>
  </a>
</li>

  


  
<li class="nav-item">
  <a class="nav-link text-white " href="$">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">assignment</i>
      </div>
    
    <span class="nav-link-text ms-1">Sign out</span>
  </a>
</li>



          

        
      
    </ul>
  </div>
  
 
    
  </div>
  
</aside>

      <main class="main-content border-radius-lg ">
        <!-- Navbar -->



        


            <div class="container-fluid py-4">
                




<div class="row">
  <div class="col-lg-7 position-relative z-index-2">
    <div class="card card-plain mb-4">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-lg-6">
            <div class="d-flex flex-column h-100">
  <h2 class="font-weight-bolder mb-0">General Statistics</h2>

</div>

          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-5 col-sm-5">
        <div class="card  mb-2">
  <div class="card-header p-3 pt-2">
    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
      <i class="material-icons opacity-10">weekend</i>
    </div>
    <div class="text-end pt-1">
      <p class="text-sm mb-0 text-capitalize">reports</p>
      <h4 class="mb-0">4</h4>
    </div>
  </div>

  <hr class="dark horizontal my-0">
  <div class="card-footer p-3">
    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">3 + </span>RTM Files included </p>
  </div>
</div>

        <div class="card  mb-2">
  <div class="card-header p-3 pt-2">
    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
      <i class="material-icons opacity-10">leaderboard</i>
    </div>
    <div class="text-end pt-1">
      <p class="text-sm mb-0 text-capitalize">Completed Projects </p>
      <h4 class="mb-0"> 2 </h4>
    </div>
  </div>

  <hr class="dark horizontal my-0">
  <div class="card-footer p-3">
  </div>
</div>

      </div>
      <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">
        <div class="card  mb-2">
  <div class="card-header p-3 pt-2 bg-transparent">
    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
      <i class="material-icons opacity-10"> dashboard</i>
    </div>
    <div class="text-end pt-1">
      <p class="text-sm mb-0 text-capitalize ">Projects</p>
      <h4 class="mb-0 ">6</h4>
    </div>
  </div>

  <hr class="horizontal my-0 dark">
  <div class="card-footer p-3">
  </div>
</div>

        <div class="card ">
  <div class="card-header p-3 pt-2 bg-transparent">
    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
      <i class="material-icons opacity-10">person</i>
    </div>
    <div class="text-end pt-1">
      <p class="text-sm mb-0 text-capitalize ">users</p>
      <h4 class="mb-0 ">7</h4>
    </div>
  </div>

  <hr class="horizontal my-0 dark">
  <div class="card-footer p-3">
    <p class="mb-0 ">Just updated</p>
  </div>
</div>

      </div>
    </div>



      
      















<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js" ></script>
<script src="../assets/js/core/bootstrap.min.js" ></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js" ></script>
















































<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>



<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
  </body>

</html>

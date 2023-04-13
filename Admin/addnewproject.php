<?php 
include "./UAuth.php" ; 

?> 
<!DOCTYPE html>
<html lang="en">
  <head>




<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">

<title>
  
Create New Project  
  

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
    

    <!-- Side Bar --> 
    <?php  include "./sideBar.php" ; ?>

  
    <main class="main-content border-radius-lg ">
    <!-- Navbar -->




    <div class="clear">
      .
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-dark shadow-primary border-radius-lg pt-4 pb-3 ">
              <h6 class="text-white text-capitalize ps-3"> Create New Project </h6>
            </div>

          </div>
        </div>
      </div>
    </div>

    <form role="form" style="width: 80%; margin: 10px;;" method="post" action="addingProject.php" >
      <div class="input-group input-group-outline mb-3">
        <br/>
        <input type="text" class="form-control" name ="Title" placeholder="Project Title" >
      </div>
      <div class="input-group input-group-outline mb-3">
        <label class="form-label"></label>
        <input type="Textarea" class="form-control" placeholder="Brief description" name = "disc" >
      </div>
      <label for="Deadline">DeadLine </label> 

      <div class="input-group input-group-outline mb-3">
        

        <br>
  <input class="form-label" type="datetime-local" id="Deadline" name="Deadline">

      </div>
      <div class="input-group input-group-outline mb-3">
      <div class="text-center">
        <button type="submit" class="btn btn-lg bg-gradient-dark btn-lg w-100 mt-4 mb-0"> Create New Project  </button>
      </div>
 
      </div>
      
   
    
    
     
    </form>

  </main>




    
  





<!--   Core JS Files   -->






































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

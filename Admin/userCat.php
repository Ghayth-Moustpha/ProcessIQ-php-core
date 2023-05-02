<?php include "./UAuth.php" ; ?>  
<?php 
$pageTitle = "Reports" ;
include "./headers.php" ; 
?> 
<?php include "./sideBar.php" ; ?>   
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
                  <h6 class="text-white text-capitalize ps-3">  User Type </h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descripton </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2"></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
///include "../connect.php" ; 
                      //  $sql = "SELECT * FROM projects order by ID DESC" ; 
                      //  $res = $con->query($sql) ; 
                       // while ($Project = $res->fetch_assoc() ) {
                            ///include "projectRow.php" ; 
                       // }


                      ?>
                      
                     
                       
                    
                    
                    </tbody>
                  </table>
                  <div class="text-center"> <a href="./createusertype.php" > 
        <button type="button" class="btn btn-lg bg-gradient-dark btn-lg w-50 mt-4 mb-0"> Create New Rules  </button>
                      </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>





      </main>

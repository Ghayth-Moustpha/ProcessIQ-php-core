<?php 
include "./UAuth.php" ; 

?> 
<?php 
if (isset ($_GET["type"])){
    include "../connect.php" ; 
    $sql = "SELECT id, username, firstname , lastname  , type, image  from users"; 
    $res = $con->query($sql) ; 

    while ($user = $res->fetch_assoc() ){
        echo json_encode ($user) . "{#}" ; 
        
        }
    exit ();
}
?> 
<?php 
$pageTitle = "Users List " ;
include "./headers.php" ; 
include "../connect.php" ; 

?> 


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
                  <h6 class="text-white text-capitalize ps-3">  users List</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-dark font-weight-bolder ">image </th>
                        <th class="text-uppercase text-dark  font-weight-bolder text-center"> name </th>
                        <th class="text-uppercase text-dark  font-weight-bolder text-center ">mail</th>
                        <th class="text-uppercase text-dark font-weight-bolder text-center">Type</th>

                        <th></th>
                      </tr>
                    </thead>
                    <tbody id ="usertable" >
                        <template>
                    <tr class="temp" >
                    <td c>
                     <img src="../defulte.avif" class="avatar avatar-sm me-3 border-radius-lg " alt="user1" width="50px">
                    </td>

                    <td class="userName mb-0 font-weight-bold text-dark  text-center primar">
                    </td>
                      
                    <td class="userMail   font-weight-bold text-info text-center" >
                         
                    </td>

                        <td class="userType align-middle text-center  text-center">
                         
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0">
                            <i class="fa fa-ellipsis-v text-xs"></i>
                          </button>
                        </td>
</tr>

</template>

                      
                      
                     
                       
                    
                    
                    </tbody>
                  </table>
                
                </div>
              </div>
            </div>
          </div>
        </div>





      </main>



    
  <script> 

        userarry = []  ;
    window.onload = showuser ; 
    function showuser() {
    var xmlhttp = new XMLHttpRequest(); 

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         response = this.responseText ;
         users =  response.split("{#}") ; 
        for (let user of  users ) {
            if (user.length ==0) break;
            js_user = JSON.parse(user); 
            temp = document.getElementsByTagName("template")[0];
            var row = temp.content.querySelector (".temp") ; 
            var copyofRow = row.cloneNode(true) ; 
            userImage = copyofRow.querySelector("img") ; 
            userImage.src = js_user["image"] ; 

            userName = copyofRow.querySelector(".userName") ; 
            userName.textContent = js_user["firstname"] + " " + js_user["lastname"] ;

            usermail = copyofRow.querySelector(".userMail") ; 
            usermail.textContent = js_user["username"] ;  

            userType = copyofRow.querySelector(".userType") ; 
            userType.textContent = js_user["type"]
            usertable = document.getElementById("usertable") ; 
            usertable.appendChild(copyofRow); 
        }
         

      }
    };

    xmlhttp.open("GET", "users.php?type=userlist", true);
    xmlhttp.send();
  
}
  </script> 





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

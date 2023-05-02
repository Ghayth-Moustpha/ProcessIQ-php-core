<<<<<<< HEAD
<?php include "./UAuth.php" ; ?> 
 
<?php 
$pageTitle = " Add User" ;
include "./headers.php" ; 
include "../connect.php" ; 

?> 
<?php 
function GeneratRandomLink($length = 16)
{
    $stringSpace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pieces = [];
    $max = mb_strlen($stringSpace, '8bit') - 1;
    for ($i = 0; $i < $length; ++ $i) {
        $pieces[] = $stringSpace[random_int(0, $max)];
    }
    return implode('', $pieces);
}

// Form Post Requiest 
if (isset ($_POST["fName"])) { 
include "../connect.php" ; 

$ext = pathinfo($_FILES["userimage"]["name"], PATHINFO_EXTENSION); 
$reandom_new_name = GeneratRandomLink () ; 

if ($ext != "" ) {
    $profile = "../uploads/" .$reandom_new_name  . "." . $ext;
    move_uploaded_file($_FILES["userimage"]["tmp_name"], $profile) ;

}else $profile ="../defulte.avif" ;  

$fanme = $_POST["fName"] ; 
$lname = $_POST["lName"] ; 
$Add = $_POST["address"] ;  
$phone = $_POST["phone"] ; 
$mail = $_POST["usermail"] ; 
$pass = $_POST["pass"] ; 
$git = $_POST["gitlink"]; 
$createDate= date("Y:m:d") ;  
$usertype = $_POST["usertype"] ;  
$sql = "INSERT INTO users (
username,
pass	,
firstname	,
lastname	,
type	,
CDate	,
image	, 
githublink,	
status ,
Address	, 
Phone) VALUES ( 
  '$mail' , '$pass' , 
  '$fanme' , '$lname' , '$usertype' , '$createDate' , '$profile', '$git' , '1', '$Add' , '$phone' ) 
	" ; 

$con->query($sql) ; 
header("Location: ./users.php");

}
?> 

<body class="g-sidenav-show  bg-gray-100">
    
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
              <h6 class="text-white text-capitalize ps-3"> Create New User </h6>
            </div>

            <form role="form" style="width: 80%; margin: 10px;;" method="post" action="./adduser.php"  enctype="multipart/form-data" >
 <!-- user informatio --> 
    <label for="fName">user Information  </label> 

    <div class="input-group input-group-outline mb-3">
        <br/>
        <input type="text" class="form-control" name ="fName" placeholder="first name" >
      </div>
      <div class="input-group input-group-outline mb-3">
        <label class="form-label"></label>
        <input type="text" class="form-control" placeholder="last name" name = "lName" >

      </div>
      <div class="input-group input-group-outline mb-3">
        <label class="form-label"></label>
        <input type="text" class="form-control" placeholder="Address" name = "address" >

      </div>
      <div class="input-group input-group-outline mb-3">
        <label class="form-label"></label>
        <input type="text" class="form-control" placeholder="Phone" name = "phone" >

      </div>
      <img src="../defulte.avif" alt="def_image" width= "200px" hight="200px" for="stu-image"accept="image/png, image/jpeg" id="profileImage" > 

      <div class="input-group input-group-outline mb-6"> 
      <p class=" "> Personal Image -   </p> 
      <br/>
      <p  class=" "style="color:red"> 4 x 4 image , white background </p>

      <input type="file" name="userimage" id="stu-image" class="w-100 pb-3" onchange="updateImg ('stu-image', 'profileImage' )" >
 
    </div>
    <hr style="border-top:0.5px solid black" />

    <div class="input-group input-group-outline mb-3">
        <br/>
        <input type="text" class="form-control" name ="gitlink" placeholder="GithubKInk" >
      </div>
      <label for="Deadline">User Account  </label> 

      <div class="input-group input-group-outline mb-3">
        <br/>
        <input type="text" class="form-control" name ="usermail" placeholder="User mail" >
      </div>
      <div class="input-group input-group-outline mb-3">
        <label class="form-label"></label>
        <input type="Textarea" class="form-control" placeholder="Password" name = "pass" >
      </div>
      <label for="Deadline">user Type  </label> 

      <div class="input-group input-group-outline mb-3">
        

        <br>
      <select class="w-50 input-group-outline p-3" name ="usertype" >
        <option> Select User Type  </option> 
        <?php 
         include "../connect.php" ; 
          $sql  = "SELECT * FROM usertype" ; 
          $res= $con->query($sql) ; 
          while ($type = mysqli_fetch_assoc ($res))  {
            echo "<option value ='"  .   $type["id"] . "'>" . $type['Title'] . "</option> "  ; 
          }

        ?> 
      </select> 

      </div>
      <div class="input-group input-group-outline mb-3">
      <div class="text-center">
        <button type="submit" class="btn btn-lg bg-gradient-dark btn-lg w-100 mt-4 mb-0"> ADD New User   </button>
      </div>
 
      </div>
      
   
    
    
     
    </form>
          </div>
        </div>
      </div>
    </div>


  </main>

  <script>
    function updateImg ( filesource , imagehoulder ) {
        let fileInp = document.getElementById(filesource); 
        let output = document.getElementById (imagehoulder);  
        output.src =URL.createObjectURL(fileInp.files[0]); ; 
    }
    </script> 


</body>

</html>
=======
<?php include "./UAuth.php" ; ?> 
 
<?php 
$pageTitle = " Add User" ;
include "./headers.php" ; 
include "../connect.php" ; 

?> 
<?php 
function GeneratRandomLink($length = 16)
{
    $stringSpace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pieces = [];
    $max = mb_strlen($stringSpace, '8bit') - 1;
    for ($i = 0; $i < $length; ++ $i) {
        $pieces[] = $stringSpace[random_int(0, $max)];
    }
    return implode('', $pieces);
}

// Form Post Requiest 
if (isset ($_POST["fName"])) { 
include "../connect.php" ; 

$ext = pathinfo($_FILES["userimage"]["name"], PATHINFO_EXTENSION); 
$reandom_new_name = GeneratRandomLink () ; 

if ($ext != "" ) {
    $profile = "../uploads/" .$reandom_new_name  . "." . $ext;
    move_uploaded_file($_FILES["userimage"]["tmp_name"], $profile) ;

}else $profile ="../defulte.avif" ;  

$fanme = $_POST["fName"] ; 
$lname = $_POST["lName"] ; 
$Add = $_POST["address"] ;  
$phone = $_POST["phone"] ; 
$mail = $_POST["usermail"] ; 
$pass = $_POST["pass"] ; 
$git = $_POST["gitlink"]; 
$createDate= date("Y:m:d") ;  
$usertype = $_POST["usertype"] ;  
$sql = "INSERT INTO users (
username,
pass	,
firstname	,
lastname	,
type	,
CDate	,
image	, 
githublink,	
status ,
Address	, 
Phone) VALUES ( 
  '$mail' , '$pass' , 
  '$fanme' , '$lname' , '$usertype' , '$createDate' , '$profile', '$git' , '1', '$Add' , '$phone' ) 
	" ; 

$con->query($sql) ; 
header("Location: ./users.php");

}
?> 

<body class="g-sidenav-show  bg-gray-100">
    
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
              <h6 class="text-white text-capitalize ps-3"> Create New User </h6>
            </div>

            <form role="form" style="width: 80%; margin: 10px;;" method="post" action="./adduser.php"  enctype="multipart/form-data" >
 <!-- user informatio --> 
    <label for="fName">user Information  </label> 

    <div class="input-group input-group-outline mb-3">
        <br/>
        <input type="text" class="form-control" name ="fName" placeholder="first name" >
      </div>
      <div class="input-group input-group-outline mb-3">
        <label class="form-label"></label>
        <input type="text" class="form-control" placeholder="last name" name = "lName" >

      </div>
      <div class="input-group input-group-outline mb-3">
        <label class="form-label"></label>
        <input type="text" class="form-control" placeholder="Address" name = "address" >

      </div>
      <div class="input-group input-group-outline mb-3">
        <label class="form-label"></label>
        <input type="text" class="form-control" placeholder="Phone" name = "phone" >

      </div>
      <img src="../defulte.avif" alt="def_image" width= "200px" hight="200px" for="stu-image"accept="image/png, image/jpeg" id="profileImage" > 

      <div class="input-group input-group-outline mb-6"> 
      <p class=" "> Personal Image -   </p> 
      <br/>
      <p  class=" "style="color:red"> 4 x 4 image , white background </p>

      <input type="file" name="userimage" id="stu-image" class="w-100 pb-3" onchange="updateImg ('stu-image', 'profileImage' )" >
 
    </div>
    <hr style="border-top:0.5px solid black" />

    <div class="input-group input-group-outline mb-3">
        <br/>
        <input type="text" class="form-control" name ="gitlink" placeholder="GithubKInk" >
      </div>
      <label for="Deadline">User Account  </label> 

      <div class="input-group input-group-outline mb-3">
        <br/>
        <input type="text" class="form-control" name ="usermail" placeholder="User mail" >
      </div>
      <div class="input-group input-group-outline mb-3">
        <label class="form-label"></label>
        <input type="Textarea" class="form-control" placeholder="Password" name = "pass" >
      </div>
      <label for="Deadline">user Type  </label> 

      <div class="input-group input-group-outline mb-3">
        

        <br>
      <select class="w-50 input-group-outline p-3" name ="usertype" >
        <option> Select User Type  </option> 
        <?php 
         include "../connect.php" ; 
          $sql  = "SELECT * FROM usertype" ; 
          $res= $con->query($sql) ; 
          while ($type = mysqli_fetch_assoc ($res))  {
            echo "<option value ='"  .   $type["id"] . "'>" . $type['Title'] . "</option> "  ; 
          }

        ?> 
      </select> 

      </div>
      <div class="input-group input-group-outline mb-3">
      <div class="text-center">
        <button type="submit" class="btn btn-lg bg-gradient-dark btn-lg w-100 mt-4 mb-0"> ADD New User   </button>
      </div>
 
      </div>
      
   
    
    
     
    </form>
          </div>
        </div>
      </div>
    </div>


  </main>

  <script>
    function updateImg ( filesource , imagehoulder ) {
        let fileInp = document.getElementById(filesource); 
        let output = document.getElementById (imagehoulder);  
        output.src =URL.createObjectURL(fileInp.files[0]); ; 
    }
    </script> 


</body>

</html>
>>>>>>> c981a0dc5ebf0873a25eacb9f9e49090f3424746

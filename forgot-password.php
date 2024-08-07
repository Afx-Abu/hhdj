<?php 
ob_start();
session_start();
if($_SESSION['frontuserid']=="")
{header("location:login.php");exit();}
include("include/connection.php");
$userid= $_SESSION['frontuserid'];
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include'head.php' ?>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/css/style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="assets/css/login.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


<style>
#alert .modal-dialog{padding:20px; margin-top:130px;}
#alert2 .modal-dialog{padding:20px; margin-top:130px;}

.textbox {
      width: 100%;
    height: 50px;
    padding-left: 20px;
    border: none;
    margin-top: 16px;
    background: #fff;
}
.OTP{
            width: 100%;
            display: flex;
            align-items: flex-end;
        }
        .G-OTP{
            padding: 10px 4px !important;
            background: #52ad93 !important;
            height: 50px !important;
            width: 80px !important;
            color: aliceblue !important;
            text-align: center !important;
            font-size: 14px !important;
        }
        button{
            width: 100% !important;
            height: 40px !important;
            border: none !important;
            background: #52ad93 !important;
            color: aliceblue !important;
        }
body{
    background: #EAE8E9;
}
.appHeader1 {
    background: #EAE8E9;
    width: 100%;
    /* background-image: linear-gradient(90deg,#cd0103,#f64841); */
    color: #fff;
    z-index: 999;
    padding: 0 24px;
    height: 45px;
    text-align: center;
    
}
 .inner-addon{
border: 2px solid #FBCCCA;
        border-radius:10px;
        display: flex;
    align-items: center;
       
 }
 .inner-addon .icon{
        padding:15px 12px;
        font-size: 22px;
        
    }
    /*.left-addon.custom-left  input{*/
    /*    padding-left:40px;*/
    /*}*/
    .number-img img{
        position: absolute;
     height:22px;
     
     
        
        top: 15px;
        left: 13px
       
    }
    
    
   .textbox1{
      /*margin-left:30px;*/
     
   }
   .textbox2
   {
      margin-left:5px;
   }
   .textbox
   {
      /*font-size:17px;*/
      /*  width:auto;*/
      /*  background: transparent;*/
      /*  margin:0;*/
      /*  width: 100% !important;*/
   }
   .submitbtn {
    width: 100%;
    font-size: 18px;
    height: 45px;
    border: none;
    /* margin: 0 auto; */
    /* border: 1px solid #cd0103; */
    /* color: #fff; */
    /* background-color: #cd0103; */
    /* box-shadow: 0 0 4px 3px rgb(207 0 69 / 20%); */
    background: #296df2;
    color: #fff;
    box-shadow: 0 0 10px hsla(0,0%,92.5%,.1);
}
.number-img{
        padding: 10px;
        color: #296df2;
}
.G-OTP{
    padding: 15px 30px;
}
*{
    color:#333 !important;
}
</style>
</head>

<body>



<!-- App Header -->
<div class="appHeader1">
<div class="left">
           <a href="myaccount.php" onClick="goBack();" class="icon goBack">
                <!--<img  src="assets/img/back.png" class="back"> -->
                 <span style="color: black !important;font-size: 18px;" class="material-symbols-outlined back">arrow_back_ios</span>
                </a>
           
        </div>
  <div class="pageTitle">Reset Password</div>
  <div class="right ">
           <!--<a href="help.php" class="icon goBack"> <img  src="images/icons/headphone.png" class="back"> </a>-->
           
        </div>
</div>

<!-- searchBox --> 

<!-- * searchBox --> 
<!-- * App Header --> 

<!-- App Capsule -->
<div id="appCapsule" class="pb-2">
  <div class="appContent1 pb-0">
    <form action="#" id="changepasswordform">
        
          <!--<p style="color:#959595; font-size:16px; font-weight:400;padding-bottom:10px;">phone number format: +91</p>-->
   
        
     <!--<div class="inner-addon left-addon custom-left">-->
         
          <!--   <div class="number-img">-->
          <!--  <span class="material-symbols-outlined">lock</span>-->
          <!--</div>-->
        <!--<input type="password" name="opassword" id="opassword" class=" textbox" placeholder="Enter Old Password">-->
      <!--</div>-->
     <!--<div class="inner-addon left-addon custom-left">-->
         
     <!--        <div class="number-img">-->
     <!--       <span class="material-symbols-outlined">lock</span>-->
     <!--     </div>-->
        <input type="password" name="npassword" id="npassword" class=" textbox" placeholder="Enter New Password">
      <!--</div>-->
    <!--<div class="inner-addon left-addon custom-left">-->
         
    <!--         <div class="number-img">-->
    <!--        <span class="material-symbols-outlined">lock</span>-->
    <!--      </div>-->
        <input type="password" name="cpassword" id="cpassword" class=" textbox" placeholder="Confirm Password">
        
      <!--</div>-->
      
       <!--<div class="inner-addon left-addon custom-left">-->
         
       <!--      <div class="number-img">-->
       <!--     <span class="material-symbols-outlined">lock</span>-->
       <!--   </div>-->
        
        <input type="email"   name="email" id="email" class="textbox"   value="<?php echo user($con,'email',$userid);?>" disabled required>
      <!--</div>-->
      
      <div class="OTP">
                 <input type="number"  name="otp" id="otp" class="textbox"  required placeholder="Enter OTP ">
                 <a class="G-OTP" id="getOtp" onClick="getOtp(); timer();" style="">OTP</a>
                    <button class="G-OTP" id="countdown" style="display:none;" disabled></button>
            </div>
            <input type="hidden" name="mobile" id="mobile" required value="<?php echo user($con,'mobile',$userid);?>">
      <input type="hidden" name="userid" id="userid" value="<?php echo $_SESSION['frontuserid'];?>">
      <input type="hidden" name="action" id="action" value="change">
          <div class="text-center mt-5" style="">
              
        <button type="submit" class="submitbtn">Submit</button>
      
     
        </div>
    </form>
  </div>
</div>
<!-- appCapsule -->
<div id="alert2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body" id="alertmessage2"> </div>
      <div class="text-center pb-1">
    <a href="logout.php" type="button" class="text-info" >OK</a>
    </div> 
    </div>
  </div>
</div>
<div id="alert" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body" id="alertmessage"> </div>
      <div class="text-center pb-1">
    <a type="button" class="text-info" data-dismiss="modal">OK</a>
    </div> 
    </div>
  </div>
</div>
 <div id="registertoast" class="modal" role="dialog" >
        <div class="regLog" role="document">
           <div class=" regContent">
              <div class="" >
                 <div class="text-center" id="regtoast">
                 </div>
              </div>
           </div>
        </div>
     </div>

    
    <script>
function getOtp() {
   var email = $("#email").val();
   var mobile = $("#mobile").val();
   var password = $("#cpassword").val();

   if (email != '' && mobile != '') {
       $.ajax({
           type: "POST",
           url: "sendotp.php",
           data: {
               email: email,
               mobile: mobile
           },
           cache: false,
           success: function(data) {
               if (data == 1) {
                   document.getElementById("email").readOnly = true;
                   document.getElementById("mobile").readOnly = true;

                   document.getElementById('alertmessage').innerHTML = ('<font size="4" style="color:#000;">OTP Sent To Email!</font>');
                   $('#alert').modal({ backdrop: 'static', keyboard: false })
                   $('#alert').modal('show');

                   // Call timer function here
                   timer();
               } else if (data == 0) {
                   document.getElementById('alertmessage').innerHTML = ('<font size="4" style="color:#000;">Unable to Sent OTP !</font>');
                   $('#alert').modal({ backdrop: 'static', keyboard: false })
                   $('#alert').modal('show');
               }
           },
           error: function(xhr, status, error) {
               console.error(xhr);
           }
       });

   } else {
       document.getElementById('alertmessage').innerHTML = ('<font size="4" style="color:#000;">Please Enter Valid Email & Mobile Number!</font>');
       $('#alert').modal({ backdrop: 'static', keyboard: false })
       $('#alert').modal('show');
   }
}

function timer() {
   document.getElementById("getOtp").style.display = 'none';
   document.getElementById("countdown").style.display = 'block';
   var timeleft = 60;
   var downloadTimer = setInterval(function() {
       if (timeleft <= 0) {
           clearInterval(downloadTimer);
           document.getElementById("getOtp").style.display = 'block';
           document.getElementById("countdown").style.display = 'none';
       } else {
           document.getElementById("countdown").innerHTML = timeleft + " Sec";
       }
       timeleft -= 1;
   }, 1000);
}
</script>
 <?php include("include/footer.php");?>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script><!-- Jquery --> 
<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/forgot-password.js"></script>
<script src="assets/js/account.js"></script>
</body>
</html>
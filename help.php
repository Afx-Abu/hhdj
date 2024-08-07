<?php 
   ob_start();
   session_start();
 if (isset($_SESSION['frontuserid'])) {
       $frontUserId = $_SESSION['frontuserid'];}
  else{header("location:login.php");exit();}?>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <?php include'head.php' ?>
      <link rel="stylesheet" href="assets/css/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
      <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
      <meta name="description" content="Bitter Mobile Template">
      <meta name="keywords" content="bootstrap, mobile template, bootstrap 4, mobile, html, responsive" />
      <link rel="stylesheet" href="assets/css/login.css">
      <style>
         .appContent3 .back{
         position: absolute;
         top: 5%;
         left: 0.6rem;
         height: 30px;
         }
         .appContent3 .logo{
             position: absolute;
    /* top: 40%; */
    bottom: 0px;
    /* right: 1rem; */
    /* height: 80px; */
    width: 500px;
         }
         .appContent1{
         position: relative;
         z-index: 9;
         padding: 18px;
         border-radius: 25px 25px 0 0;
         margin-top: -0.53333rem;
         background-color: #fff;
         }   
         .inner-addon{
         border: 2px solid #FBCCCA;
         border-radius:10px;
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
         top: 12px;
         left: 13px
         }
         .appContent3{
         position: relative;
          background: linear-gradient(90deg,#f95a5a 0%,#ff998e 100%) no-repeat top;
         background-size: cover;
         height:250px;
         }
         .textbox1{
         margin-left:30px;
         }
         .textbox2
         {
         margin-left:5px;
         }
         .textbox
         {
         font-size:17px;
         width:auto;
         }
         .accordion {
         border-radius:10px;}
         .accordion .btn-link {
         box-shadow:none;
         margin:0px 0px;
         color: #333 !important;
         font-size: 16px;
         font-weight: normal;
         }
         .accordion .collapsed {
         background: #fff;
         box-shadow: 0 1px 2px 3px #f0f1f1;
         padding:10px;
         margin-bottom:20px;
         font-size:18px;
         }
         .accordion .show {
         }
         .accordion .sub-link {
         box-shadow:none;
         color: #333 !important;
         font-size: 14px;
         font-weight: normal;
         display:block;
         }
         .accordion .sub-link:hover {
         color:#00F !important;
         }
         .accordion .btn-link:hover {
         background:#F5F5F5;
         }
         .accordion .btn-link {
         position: relative;
         }
         .accordion .btn-link::after {
         content: "\f105";
         color: #545E68;
         top: 18px;
         right: 15px;
         position: absolute;
         font-family: "FontAwesome";
         font-size:30px;
         }
         .imggg{
         width:41px;
         margin-right:10px;
         }
         .accordion .card-header .btn {
         height:auto !important;
         border-radius:7px !important;
         padding:10px 40px 10px 20px;
         display:block;
         width:100%;
         display:block !important;
         text-align:left
         }
.appHeader1 {
    width: 100%;
    background-image: none;
    background: linear-gradient(90deg,#f95a5a 0%,#ff998e 100%);
    color: #fff;
    z-index: 999;
    padding: 0 24px;
    height: 55px;
    text-align: center;
}
body{
    background:#f7f8ff;
}
.imr {
    width: 100%;
    display: flex;
    justify-content: center;
}
      </style>
   </head>
   <body style="background:#F9FAFB">
      <?php
         include("include/connection.php");
         
         $userid=$_SESSION['frontuserid'];
         $selectruser=mysqli_query($con,"select * from `tbl_user` where `id`='".$userid."'");
         $userresult=mysqli_fetch_array($selectruser);
         $selectwallet=mysqli_query($con,"select * from `tbl_wallet` where `userid`='".$userid."'");
         $walletResult=mysqli_fetch_array($selectwallet);
         ?>
      <div class="appHeader1">
         <div class="left">
            <a href="main.php" class="icon goBack" onClick="goBack();"> <img  src="./images/icons8-arrow-50.png" class="back"> </a>
         </div>
         <div class="pageTitle">Customer Service</div>
      </div>
      <div class="appContent3 text-white">
         <div   class="imr">
            <img  src="images/customerBg-660c5552.png" class="logo">
         </div>
      </div>
      <div style=""  id="appCapsule">
         <div style="background:#f7f8ff; " class="appContent1">
            <div class="accordion" id="accordionExample">
               <!--<div class="card-header cardheader">-->
               <!--   <h3 class="mb-0"> <a href="/complaint.php" class="btn btn-link collapsed"><img  class="imggg" src="images/icons/live.png">Live Chat</a> </h3>-->
               <!--</div>-->
               
                
               
            <!--   <div class="card-header cardheader">
                  <h3 class="mb-0"> <a href="https://wa.me/+91<?php $sqlget = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM setting WHERE id  =  1"));
                $whatsapp = $sqlget['whatsapp']; echo $whatsapp;?>" class="btn btn-link collapsed"><img  class="imggg" src="images/icons/whatsapp.png">Whatsapp</a> </h3>
               </div>-->
               <div class="card-header cardheader">
                  <h3 class="mb-0"> <a href="https://telegram.dog/<?php $sqlget = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM setting WHERE id  =  1"));
                $telegram = $sqlget['telegram']; echo $telegram;?>" class="btn btn-link collapsed"><img  class="imggg" src="images/icons/telegram.png">Telegram</a> </h3>
               </div>
            </div>
         </div>
      </div>
      <div id="registertoast" class="modal fade" role="dialog">
         <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content ">
               <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                  <div class="text-center" id="regtoast">          
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
      <!-- Bootstrap--> 
      <script src="assets/js/lib/popper.min.js"></script> 
      <script src="assets/js/lib/bootstrap.min.js"></script> 
      <!-- Owl Carousel --> 
      <script src="assets/js/plugins/owl.carousel.min.js"></script> 
      <!-- Main Js File --> 
      <script src="assets/js/app.js"></script>
      <script src="assets/js/jquery.validate.min.js"></script>
      <script src="assets/js/account.js"></script>
      <?php  include("include/pagestrick.php");?>
      
   </body>
</html>
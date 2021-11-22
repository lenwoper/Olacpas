<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olacaps </title>

  <style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  .banner {
    background-image: url("Ola images/ola bg image.jpg");
    background-position: center;
    background-size: cover;
    position: relative;
    height: 100vh;
    background-repeat: no-repeat;


  }

  .layerBlack {
    height: 100vh;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.2);
    position: absolute;
    z-index: 1;
  }

  .banner_descri {
    padding-top: 30px;
    color: white;
    text-align: center;
    margin-left: 10%;

    margin-right: 10%;
  }

  .banner_descri h1 {
    font-weight: bolder;
    font-size: 45px;
  }

  .distination_board {
    width: 25%;
    position: absolute;
    z-index: 2;
    border-radius: 5px;
    top: 23%;
    background-color: white;
    left: 3%;

  }

  .distination_board .buttons {
    background-color: white;
    border-radius: 5px;
    /* lien-height:40px; */
    width: 100%;

    border: none;
    height: 40px;
    box-shadow: 0 0 1px #c0c0c0;


  }

  .distination_board .buttons button a {
    font-size: 10px;
    transition: all, 0.3s ease;
    text-decoration: none;
    color: black;
    font-weight: bold;
  }

  .distination_board .buttons button:hover a {
    color: #cddc39;
  }

  .distination_board .buttons button {
    width: 30%;
    box-shadow: 0 0 3px #c0c0c0;
    float: left;
    margin-top: 7px;


    padding-top: 5px;
    padding-bottom: 5px;
    font-size: 13px;
    border: none;
    border-radius: 11px;
    margin-left: 1.6%;
    margin-right: 1.6%;



  }

  .distination_bdivbuttons button:first-child {
    background-color: #cddc39;

  }

  /* functional part */
  .distination_board .optionFunctional {
    position: relative;
    overflow: auto;
  }

  .distination_board .optionFunctional div .first {
    font-size: 9px;
    cursor: pointer;
    color: #a2a2a2b3;
    font-weight: bold;
    padding-right: 20px;

    padding-left: 5px;
  }

  .distination_board .optionFunctional .search_cabs {
    background-color: #cddc39;
    border: none;
    line-height: 40px;
    margin-bottom: 5px;
    border-radius: 3px;
    font-size: 18px;
    outline: none;
    font-weight: bold;
    width: 96%;
    margin-left: 2%;
    margin-right: 2%;
  }

  .distination_board .optionFunctional div {
    background-color: #c0c0c06b;
    line-height: 40px;
    margin-bottom: 5px;
    border-radius: 3px;

    width: 96%;
    margin-left: 2%;
    margin-right: 2%;

  }

  /* location share ______=======++++++ */

  #secaddress {
    height: auto;
    position: absolute;
    width: 100%;
    background-color: white;
    display: none;
    height: 100%;
    pointer-events: stroke;
    z-index: 2;
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    transition: all, 0.3s ease-in-out;
  }

  #currentLoc {
    height: auto;
    position: absolute;
    width: 100%;
    background-color: white;
    display: none;
    pointer-events: stroke;
    transition: all, 0.3s ease-in-out;
    z-index: 5;
    height: 100%;
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
  }


  .optionFunctional .currentLocation input {
    background-color: #c0c0c06b;
    line-height: 40px;
    margin-bottom: 5px;
    border-radius: 3px;
    width: 96%;
    margin-left: 2%;
    outline: none;
    font-weight: bold;
    font-size: 14px;
    border: none;
    padding-left: 30px;
    margin-right: 2%;

  }

  .optionFunctional .currentLocation .exits {
    margin-left: 7px;
    cursor: pointer;
    pointer-events: stroke;


    font-size: 22px;
    margin-bottom: 20px;
    font-weight: bolder;

  }

  /* image slider here  */
  #carouselExampleControls {
    width: 80%;
    margin-right: 10%;
    margin-left: 10%;
    box-shadow: 0 0 5px #c0c0c0;
    position: absolute;
    top: 99vh;
    overflow: auto;
    border-radius: 5px;
    background-color: white;
    z-index: 6;

  }

  .desk {
    width: 50%;
    float: left;
    background-color: white;
    text-align: center;
    border: none;


  }

  .desk .imgIcon {
    margin-top: 25px;

  }



  .desk .imgContent {
    width: 80%;
    text-align: center;
    border: none;
    padding-left: 10px;
    padding-right: 10px;
    padding-top:
      5px;

    float: left;

  }

  .desk .imgIcon {
    float: left;
    width: 20%;
    text-align: center;
  }

  .desk .imgContent article h5 {
    font-size: 22px;
    color: #759fc5;


  }

  .desk .imgContent article a {
    text-decoration: none;
  }

  .desk .imgContent article a p {
    font-size: 15px;
    text-decoration: none;
    color: #797979ab;
  }

  .carousel-control-next-icon,
  .carousel-control-prev-icon {

    background-color: #c0c0c0 !important;

    border-radius: 5px;
  }

  /* card  */
  .card {
    box-shadow: 0 0 7px #c0c0c0;
    border-radius: 4px;
    overflow: auto;

  }

  .card .absImg img {
    width: 53px;
    border-radius: 50%;
    height: 53px;
  }

  .card .absImg {
    width: 60px;
    box-shadow: 0 0 3px #c0c0c0;

    height: 60px;
    border-radius: 50%;
    overflow: auto;
    position: absolute;
    top: 40%;
    right: 10px;
    background-color: white;
    border: 3px solid #cddc39;
  }

  .three_card {
    margin-left: 10%;
    margin-top: 50px;
    margin-right: 10%;
  }

  .three_card .card_top_desc h2 {
    font-size: 23px;

  }

  .three_card .card_top_desc p {
    font-size: 14px;
    color: #797979ab;
    font-style: italic;
  }

  .cardComponent {

    width: 100%;
  }

  .cardComponent .card {
    position: relative;
    width: 30%;
    float: left;



  }

  .card .text article {
    padding-left: 10px;
  }

  .card .text article h5 {
    color: #858181;
    font-size: 18px;
  }

  .cardComponent .card:nth-child(2) {
    margin-left: 5%;
    margin-right: 5%;
  }

  /* ========== why ola =========== */
  .why_ola_section {
    width: 80%;
    margin-left: 10%;
    margin-top: 20px;
    overflow: auto;
    margin-right: 10%;

  }

  .whyolaHeader {
    margin-left: 0%;
    margin-right: 0%;
    width: 80%;
  }

  .whyolaHeader article h2 {
    font-size: 23px;

  }

  .whyolaHeader article p {
    font-size: 14px;

    color: #797979ab;
  }


  .why_ola_section .whyolades {
    width:
      100%;


  }

  .why_ola_section .whyolaFloat {

    float: left;
    width: 50%;
  }


  .why_ola_section >.whyolaFloat >.imgContentHolder .firstwhyola {
    width: 30%;
    float: left;
  }

  .why_ola_section > .whyolaFloat> .imgContentHolder .whyOlacontent {
    width: 70%;
    padding-left: 20px;
    padding-right: 20px;
    float: left;
  }


  .why_ola_section .whyolaFloat .imgContentHolder .whyOlacontent h3 {

    font-size: 15px;
  }

  .why_ola_section .whyolaFloat .imgContentHolder .whyOlacontent:hover {
    background-color: #7979792b;
  }

  .why_ola_section .whyolaFloat .imgContentHolder:hover h3 {
    color: #cddc39;

  }

  .why_ola_section .whyolaFloat .imgContentHolder .whyOlacontent p {
    font-size: 14px;
  }

  /* car feature img  */

  .tabCarFeature .allimgAsbutton {
    width:
      80%;
    margin-left: 10%;

    margin-right: 10%;

  }

  .tabCarFeature .allimgAsbutton .buttoncarfeature {
    width: 19%;
    display: inline-block;



  }

  .tabCarFeature .allimgAsbutton .buttoncarfeature img {
    width: 90px;
    transition: all, 0.4s ease-in-out;
    border-radius: 50%;
    border: 2px solid #cddc39;
    height: auto;

  }

  .tabCarFeature .allimgAsbutton .buttoncarfeature img:hover {
    transform: scale(0.967);
  }

  .innerparentHolder {
    margin-left: 2%;
    margin-right: 2%;
  }

  .firstHoldertext {
    float: left;
    width: 50%;
    padding-left: 20px;
    padding-top: 90px;
    padding-right: 90px;
  }

  .firstHolderimg {
    float: left;
    width: 50%;
  }

  /* get application for the android and ios devices  */
  .getApp {
    
   width: 100%;
    padding-left: 4%;
    padding-right: 4%;
    background-color: #dedddd;
    overflow: auto;
  }

  .getappbutton {
    text-align: center;
   float: left;
   padding: 30px 30px 0px 30px ;
   width: 
   50%;
  }
  .secbutton{
    float: left;
  }

  @media  screen and (max-width: 543px) {

    .banner_descri {
      display: none;

    }

    .distination_board {
      top: 0px;
      border-radius: 0px;
      width: 100%;
      left: 0px;
    }

    .buttons {
      border-radius: 0px;
      box-shadow: 0 0 6px #c0c0c0;
    }

    .layerBlack {
      background: white;
    }

    /* image slider hide one part */
    .mobilehide {
      display: none;
    }

    /* image slider here  */
    #carouselExampleControls {
      width: 100%;

      box-shadow: 0 0 5px #c0c0c0;
      position: absolute;
      top: 92vh;
      overflow: auto;
      border-radius: 0px;
      background-color: white;
      z-index: 6;
      margin-right: 0%;
      margin-left: 0%;

    }

    .desk {
      width: 100%;
      float: none;
      background-color: white;
      text-align: center;
      border: none;


    }

    .three_card {
      margin-left: 0%;
      margin-top: 0px;
      margin-right: 0%;
    }

    .three_card .card_top_desc {
      padding-left: 20px;
    }

    .three_card .card_top_desc h2 {
      font-size: 17px;



    }

    .three_card .card_top_desc p {
      font-size: 10px;
      color: #797979ab;
      font-style: italic;
    }

    /* card  */
    .card {
      box-shadow: 0 0 7px #c0c0c0;
      border-radius: 4px;
      overflow: auto;
    }

    .three_card {
      margin-left: 10%;
      margin-top: 50px;
      margin-right: 10%;
    }

    .three_card .card_top_desc h2 {
      font-size: 23px;

    }

    .three_card .card_top_desc p {
      font-size: 14px;
      color: #797979ab;
      font-style: italic;
    }

    .cardComponent {
      width: 100%;
    }

    .cardComponent .card {
      position: relative;
      width: 95%;

      float: none;
      margin-left: 2.5%;
      margin-right: 2.5%;
      margin-bottom: 20px;



    }

    .cardComponent .card:nth-child(2) {
      margin-left: 2.5%;
      margin-right: 0%;
    }

    .card .text article p {
      font-size: 15px;
    }

    /* why ola section  */
    .whyolaHeader {
    margin-left: 3%;
    margin-right: 3%;
    width: 80%;
  }


    .why_ola_section {
      width: 100%;
      margin-left: 0%;
      margin-top: 20px;
      margin-right: 0%;

    }

    .why_ola_section .whyolaFloat {

      float: none;
      width: 92%;
      margin-left: 4%;
      margin-right: 4%;
    }


    .why_ola_section .whyolaFloat .imgContentHolder .whyOlacontent p {
      font-size: 12px;
    }

    .why_ola_section .whyolaFloat .imgContentHolder .whyOlacontent h3 {

      font-size: 14px;
    }

    /* car feature here starting in respoisve for the mobile phone devices  */
    .tabCarFeature .allimgAsbutton {
      width:
        80%;
      margin-left: 10%;
      margin-right: 10%;

    }

    .tabCarFeature .allimgAsbutton .buttoncarfeature {
      width: 18%;
      display: inline-block;
      overflow: auto;


    }

    .tabCarFeature .allimgAsbutton .buttoncarfeature img {
      width: 50px;
      transition: all, 0.4s ease-in-out;
      border-radius: 50%;
      border: 2px solid #cddc39;
      height: auto;

    }

    .tabCarFeature .allimgAsbutton .buttoncarfeature img:hover {
      transform: scale(0.967);
    }

    /* that is car feature details*/
    .innerparentHolder {
      margin-left: 2%;
      margin-right: 2%;
    }

    .firstHoldertext {
      float: none;
      width: 100%;
      padding-left: 10px;
      padding-top: 0px;
      padding-right: 0px;
    }

    .firstHolderimg {
      float: none;
      width: 100%;
    }

    .firstHoldertext article h2 {
      font-size: 23px;
    }

    .firstHoldertext article p {
      font-size: 14px;
    }

    .getApp {
    
    width: 100%;
     padding-left: 4%;
     padding-right: 4%;
     background-color: #dedddd;
     overflow: auto;
   }

   .getappbutton {
     text-align: center;
    float: left;
    padding: 30px 5px 0px 5px ;
    width: 
    100%;
   }
   .getappbutton article h2{
     font-size: 20px;

   }
   .getappbutton article p{
     color: #a8a5a5;
     font-size: 14px;
   }

  }


  </style>

</head>

<body>
  <?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Header::class, []); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3)): ?>
<?php $component = $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3; ?>
<?php unset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  <!-- that is banner  -->
  <div class="banner">

    <!-- it is a layer like black -->
    <div class="layerBlack">

    </div>

    <!-- it is a banner descri  -->
    <div class="banner_descri">
      <h1>Book a City Taxi to your distination in town</h1>
      <p>Choose from a range of categories and price</p>

    </div>




    <!-- that is  board of distination here  -->
    <div class="distination_board">
      <div class="buttons">
        <button name="button" style="background-color: #cddc39; "> <a href="#"> CITY NEXT</a></button>
        <button name="button"> <a href="#"> OUTSTATION </a></button>
        <button name="button"> <a href="#"> RENTALS </a></button>

      </div>

      <!-- here we 'll select location  -->
      <div class="optionFunctional">


        <!--it is  location sharing block  -->

        <form class="currentLocation" id="currentLoc" action="" method="get">
          <a class="exits" onclick="currentLocationhide()">&#8592; <h5 style="text-align: center; margin-bottom:9px;">Enter pickup location</h5> </a>


          <div class="cuLocation" style="padding-left: 20px;">Current Location </div>

          <input type="text" name="" placeholder="Enter address..." id="">

        </form>
        <!-- that is second form here for the current location sharing  -->
        <form class="currentLocation" id="secaddress" action="" method="get">
          <a class="exits" onclick="secaddress()">&#8592; <h5 style="text-align: center; margin-bottom:9px;">Enter drop location</h5></a>
          <input type="text" name="" placeholder="Enter address..." id="">



        </form>




        <!-- it is the location sharing input here finished  -->
        <!-- some des -->
        <br>
        <p style="text-align: center; margin-left:15px; "> <strong>Your everyday travel partner </strong> <br>
          AC Cabs for point to point travel</p>
        <br>

        <!-- this is functional button   -->
        <div onclick="currentLocation()"> <span class="first"> PICKUP</span> <span class=""> Current Loaction</div>
        <div onclick="driveEstimet()"> <span class="first"> DROP</span> <span class="" style="color: #a2a2a2de; font-weight:bold; "> Enter drop for ride estimate</div>
        <div> <span class="first"> WHEN</span> <span class=""> Now </span> </div>

        <button class="search_cabs"><a href="" style="text-decoration: none; color:black"> Search Cabs</a></button>

      </div>

    </div>





  </div>
  <!-- image slider  -->
  <!-- in two block first for the mobile and desktop that 'll same  -->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="desk">
          <span class="imgIcon"> <i class="fa fa-star" style="font-size:36px"></i></span> <span class="imgContent">
            <article>
              <h5>Ola with entertainment</h5>
              <a href="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum minima esse.</p>
              </a>
            </article>
          </span>
        </div>
        <div class="desk mobilehide">
          <span class="imgIcon"><i class="fa fa-telegram" style="font-size:36px"></i></span></span> <span class="imgContent">
            <article>
              <h5>Ola with entertainment</h5>
              <a href="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum minima esse.</p>
              </a>
            </article>
          </span>
        </div>
      </div>
      <div class="carousel-item">
        <div class="desk">
          <span class="imgIcon"><i class="fa fa-address-card" style="font-size:36px"></i> </span> <span class="imgContent">
            <article>
              <h5>Ola with entertainment</h5>
              <a href="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum minima esse.</p>
              </a>
            </article>
          </span>
        </div>
        <div class="desk mobilehide">
          <span class="imgIcon"> <i class="fa fa-lock" style="font-size:36px"></i> </span> <span class="imgContent">
            <article>
              <h5>Ola with entertainment</h5>
              <a href="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum minima esse.</p>
              </a>
            </article>
          </span>
        </div>
      </div>
      <div class="carousel-item">
        <div class="desk mobilehide">
          <span class="imgIcon"><i class="fa fa-telegram" style="font-size:36px"></i></span> <span class="imgContent">
            <article>
              <h5>Ola with entertainment</h5>
              <a href="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum minima esse.</p>
              </a>
            </article>
          </span>
        </div>
        <div class="desk">
          <span class="imgIcon"><i class="fa fa-address-card" style="font-size:36px"></i></span> <span class="imgContent">
            <article>
              <h5>Ola with entertainment</h5>
              <a href="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum minima esse.</p>
              </a>
            </article>
          </span>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon " aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- image slider finished here  -->

  <div class="three_card ">
    <section class="card_top_desc">
      <h2>A card for every occasion </h2>
      <p>Ola offer city taxis , inter city cabs , and local cabs at hourly packages </p>
    </section>


    <!-- css line 324 -->

    <div class="cardComponent">

      <div class="card">
        <img src="Ola images/service des 3.jpg" class="" alt="" srcset="">
        <!-- absolute image here  -->
        <div class="absImg">
          <img src="Ola images/car icon img/download.png" alt="" srcset="">
        </div>

        <!-- section for the text -->

        <section class="text">

          <article>
            <h5>CIRY TAXI</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nobis explicabo
              culpa blanditiis cumque rerum fugiat qui dignissimos? Adipisci, praesentium.</p>
          </article>
        </section>

      </div>
      <!-- 2 -->
      <div class="card">
        <img src="Ola images/service des.jpg" class="imgCard" alt="" srcset="">
        <!-- absolute image here  -->
        <div class="absImg">
          <img src="Ola images/car icon img/download.png" alt="" srcset="">
        </div>

        <!-- section for the text -->
        <section class="text">

          <article>
            <h5>RENTALS</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nobis explicabo
              culpa blanditiis cumque rerum fugiat qui dignissimos? Adipisci, praesentium.</p>
          </article>
        </section>

      </div>
      <!-- 3 -->
      <div class="card">
        <img src="Ola images/service des1.jpg" class="imgCard" alt="" srcset="">
        <!-- absolute image here  -->
        <div class="absImg">
          <img src="Ola images/car icon img/download.png" alt="" srcset="">
        </div>

        <!-- section for the text -->
        <section class="text">

          <article>
            <h5>OUTSTANDING</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nobis explicabo
              culpa blanditiis cumque rerum fugiat qui dignissimos? Adipisci, praesentium.</p>
          </article>
        </section>

      </div>
    </div>
  </div>

  <!-- why ola seection -->

  <div class="why_ola_section">
    <section class="whyolaHeader">
      <article>
        <h2>Why ride with Ola ?</h2>
        <p>The beest way to ride to your distination </p>
      </article>
    </section>

    <div class="whyolaFloat">
      <section class="imgContentHolder">
        <!-- IMG -->
        <span class="firstwhyola">
          <img style="width: 100%; height: auto; border-radius:4px;" src="Ola images/why_ola/00000000368.jpg" alt="" srcset="">
        </span>
        <!-- CONTENT -->
        <span class="whyOlacontent">
          <h3> Cabs for Every Pocket</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Est voluptatum nihil necessitatibus, velit sint recusandae atque?</p>

        </span>
      </section>


      <section class="imgContentHolder">
        <!-- IMG -->
        <span class="firstwhyola">
          <img style="width: 100%; height: auto; border-radius:4px;" src="Ola images/why_ola/why_ola_3.jpg" alt="" srcset="">
        </span>
        <!-- CONTENT -->
        <span class="whyOlacontent">
          <h3> Cabs for Every Pocket</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Est voluptatum nihil necessitatibus, velit sint recusandae atque?</p>

        </span>
      </section>


      <section class="imgContentHolder">
        <!-- IMG -->
        <span class="firstwhyola">
          <img style="width: 100%; height: auto; border-radius:4px;" src="Ola images/why_ola/why_ola_4.jpg" alt="" srcset="">
        </span>
        <!-- CONTENT -->
        <span class="whyOlacontent">
          <h3> Cabs for Every Pocket</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Est voluptatum nihil necessitatibus, velit sint recusandae atque?</p>

        </span>
      </section>



    </div>

    <div class="whyolaFloat">
      <section class="imgContentHolder">
        <!-- IMG -->
        <span class="firstwhyola">
          <img style="width: 100%; height: auto; border-radius:4px;" src="Ola images/why_ola/why_ola_5.jpg" alt="" srcset="">
        </span>
        <!-- CONTENT -->
        <span class="whyOlacontent">
          <h3> Cabs for Every Pocket</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Est voluptatum nihil necessitatibus, velit sint recusandae atque?</p>

        </span>
      </section>


      <section class="imgContentHolder">
        <!-- IMG -->
        <span class="firstwhyola">
          <img style="width: 100%; height: auto; border-radius:4px;" src="Ola images/why_ola/why_ola_6.jpg" alt="" srcset="">
        </span>
        <!-- CONTENT -->
        <span class="whyOlacontent">
          <h3> Cabs for Every Pocket</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Est voluptatum nihil necessitatibus, velit sint recusandae atque?</p>

        </span>
      </section>


      <section class="imgContentHolder">
        <!-- IMG -->
        <span class="firstwhyola">
          <img style="width: 100%; height: auto; border-radius:4px;" src="Ola images/why_ola/why_ola_1.jpg" alt="" srcset="">
        </span>
        <!-- CONTENT -->
        <span class="whyOlacontent">
          <h3> Cabs for Every Pocket</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Est voluptatum nihil necessitatibus, velit sint recusandae atque?</p>

        </span>
      </section>


    </div>


  </div>


  <!-- why ola 've been finished  here  -->

  <!-- ******all car feature in tab section start frrom here******  -->

  <div class="why_ola_section">
    <section class="whyolaHeader">
      <article>
        <h2>Why ride with Ola ?</h2>
        <p>The beest way to ride to your distination </p>
      </article>
    </section>
  </div>
 
  <div class="tabCarFeature">

    <div class="allimgAsbutton">
      <div class="buttoncarfeature" id="defaultOpen" onclick="carfeature(event, 'first')">
        <img src="Ola images/car icon img/download.png" alt="unable to loading.." srcset="">

      </div>
      <div class="buttoncarfeature" onclick="carfeature(event, 'second')">
        <img src="Ola images/car icon img/download (1).png" alt="unable to loading.." srcset="">

      </div>
      <div class="buttoncarfeature" onclick=" carfeature(event, 'third')">
        <img src="Ola images/car icon img/download (2).png" alt="unable to loading.." srcset="">

      </div>
      <div class="buttoncarfeature" onclick="carfeature(event , 'fourth') ">
        <img src="Ola images/car icon img/download (3).png" alt="unable to loading.." srcset="">

      </div>
      <div class="buttoncarfeature" onclick="carfeature(event, 'fifth')">
        <img src="Ola images/car icon img/download (4).png" alt="unable to loading.." srcset="">

      </div>


    </div>

    <!-- here all div  -->

    <div class="imgAndDesHolderParent">
      <div class="innerparentHolder" id="first">
        <div class="firstHolderimg">
          <!-- img -->
          <img style="width: 100%;" src="Ola images/one_car2.png" alt="">

        </div>
        <div class="firstHoldertext">
          <article>
            <h2>abhijeet kumar tell me about </h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci aut ab maiores nulla molestiae dolorum facere quam debitis sunt harum.</p>
          </article>
        </div>
      </div>
      <!-- 2 -->
      <div class="innerparentHolder" id="second">
        <div class="firstHolderimg">
          <img style="width: 100%;" src="Ola images/one_car.png" alt="">

        </div>
        <div class="firstHoldertext">
          <article>
            <h2>abhijeet tell me about second 2</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci aut ab maiores nulla molestiae dolorum facere quam debitis sunt harum.</p>
          </article>
        </div>
      </div>
      <!-- third  -->
      <div class="innerparentHolder" id="third">
        <div class="firstHolderimg">
          <img style="width: 100%;" src="Ola images/one_car4.png" alt="">

        </div>
        <div class="firstHoldertext">
          <article>
            <h2>abhijeet kumar tell me about 3</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci aut ab maiores nulla molestiae dolorum facere quam debitis sunt harum.</p>
          </article>
        </div>
      </div>
      <div class="innerparentHolder" id="fourth">
        <div class="firstHolderimg">

          <img style="width: 100%;" src="Ola images/one_car7.png" alt="">
        </div>
        <div class="firstHoldertext">
          <article>
            <h2>abhijeet kumar tell me about 4</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci aut ab maiores nulla molestiae dolorum facere quam debitis sunt harum.</p>
          </article>
        </div>
      </div>
      <!-- fifth -->
      <div class="innerparentHolder" id="fifth">
        <div class="firstHolderimg">
          <img style="width: 100%;" src="Ola images/one_car6.png" alt="">


        </div>
        <div class="firstHoldertext">
          <article>
            <h2>abhijeet kumar tell me about 5</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci aut ab maiores nulla molestiae dolorum facere quam debitis sunt harum.</p>
          </article>
        </div>
      </div>



    </div>
  </div>

  <!-- get android and ios application section -->
  <br>
  <div class="getApp" id="getApp">
    <div class="getappbutton">
      <article>
        <h2>Book an Ola from the App</h2>
        <p>download the app for exclusive deals of booking</p>
      </article>
      <br>
      <img style="width: 100%; height:auto ;" src="Ola images/app_logo.png" alt="Opps..">
    </div>
    <div class="getappbutton secbutton">
     <a href=""> <img style="width: 100%; height:auto ;" src="Ola images/ola-booking ios and android app.png" alt="Opps.."></a>
    </div>
  </div>






  <!-- this js all about for the controlling search of the location here  -->

  <script>
    // first here 
    function currentLocation() {
      document.getElementById("currentLoc").style.display = "block";
    }

    function currentLocationhide() {
      document.getElementById("currentLoc").style.display = "none";
    }

    function driveEstimet() {
      document.getElementById("secaddress").style.display = "block";
    }
    const secaddress = () => {
      document.getElementById("secaddress").style.display = "none";
    }

    // it is the scritping language

    function carfeature(evt, name) {
      var i;
      var tab = document.getElementsByClassName("innerparentHolder");
      var button = document.getElementsByClassName("buttoncarfeature");
      for (i = 0; i < tab.length; i++) {
        tab[i].style.display = "none";
      }
      for (i = 0; i < button.length; i++) {
        button[i].className.replace = button[i].className.replace('active', '');

      }
      document.getElementById(name).style.display = "block";
      evt.targetCurrent.className += "active";
    }

    document.getElementById("defaultOpen").click();
  </script>



<?php if (isset($component)) { $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Footer::class, []); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf)): ?>
<?php $component = $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf; ?>
<?php unset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</body>

</html><?php /**PATH C:\web_php_stream\htdocs\abhi\resources\views/welcome.blade.php ENDPATH**/ ?>
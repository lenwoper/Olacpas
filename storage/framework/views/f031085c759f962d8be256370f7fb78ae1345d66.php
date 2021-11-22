<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ola Lading page here </title>

    <style media="screen">
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .Header_desk {
            padding-left: 6%;
            padding-right: 6%;
            line-height: 50px;
            height: 50px;
            position: relative;
           z-index: 182;
            box-shadow: 0 0 3px #c0c0c0;


        }

        .Header_desk .button_under {

            float: right;
        }

        .button_under li {
            float: left;
            cursor: pointer;
            width: 90px;
            text-align: center;
            border: white 2px solid;

            margin-top: 9px;
            margin-bottom: 10px;
            list-style: none;
            line-height: 30px;
            margin-right: 8px;

            color: black;

            font-weight: bold;
        }

        .button_under li:last-child {
            color: black;
            border-radius: 8px;
            box-shadow: 0 0 6px #c0c0c0;
            border: #ffffff91 2px solid;
            background-color: #9fef3b;
        }

        .button_under li:hover {
            color: black;
            border-radius: 8px;
            box-shadow: 0 0 6px #c0c0c0;
            border: #ffffff91 2px solid;
            background-color: #9fef3b;



        }

        .banner_here {
            background-image: url("ola bg image.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            background-position: center;
        }

        /* mobile menu icon here  */

        .mobile_menu {
            display: none;

        }

        #menulayer {
            display: none;
            width: 0%;
            background-color: white;
            position: fixed;
            border: none;
            border-right: 0.2px solid #7a78785e;
            height: 100vh;
            overflow: hidden;
            z-index: 1999;
            padding-top: 6px;
            transition: all, 0.2s ease-in-out;

            top: 0px;



        }

        #hide_memu_layer {
            position: absolute;
            top: 10px;
            left: 20px;


            font-size: 23px;
            font-weight: bold;
        }

        #menulayer li a {
            color: black;
            text-decoration: none;
        }

        #menulayer li {
            padding-left: 25px;
            width: 100%;
            list-style: none;
            line-height: 30px;

            font-size: 13px;
        }

        #menulayer li:hover {
            background-color: #67666640;
        }


        /* it's icon  */
        #ola_header_logo {

            position: absolute;
            top: 5px;
            width: 100px;
            height: 40px;


        }

        /* mobile responsive here  */

        @media  screen and (max-width: 543px) {

            .button_under {
                display: none;

            }

            .Header_desk {
                padding-left: 0;
                padding-right: 0;
                position: relative;
            }

            .mobile_menu {

                display: block;
                width: 50px;
                text-align: center;
                position: absolute;
                font-size: 22px;


            }

            #menulayer {
                display: block;
            }

            .mobile_menu:hover {
                font-weight: bold;
                background-color: #67666640;
            }

            #ola_header_logo {
                transform: translate(-50% -50%);
                left: 37%;
                position: absolute;
                top: 5px;
                width: 100px;
                height: 40px;


            }


            /* .ola_logo{
  position: absolute;

  left: 50%;
  bottom: 0px;
  transform: translate(-50% , -50%);
} */


        }
    </style>
</head>


<body>
    <header class="Header_desk" id="heaader_desk">


        <a id="mobile_menu" onclick="myMenu()" class="mobile_menu">&#9776;</a>
        <!-- it is ola log here  -->
        <a href="#" class="ola_logo" id="ola_logo"> <img src="Ola images/footerlogo.png" id="ola_header_logo" alt="Logo"> </a>

        <!-- menul alayer here  -->





        <!-- right side button in desktop only  -->
        <nav class="button_under" >

         <li>Ola Fleet</li>
            <li>Price</li>
            <li>Book Now</li>
            <li>About</li>
            <li> <a href="<?php echo e(url('/about')); ?>" style="text-decoration: none; color:black;" >  About</a></li>
          

        </nav>


    </header>

    <nav id="menulayer">
        <!-- that is a times for hide option in the menulayer right  -->
        <a id="hide_memu_layer" onclick="hide_menu()">&times;</a>

        <li style="margin-top: 40px;"> <a href="">Ola Drive </a> </li>
        <li> <a href="">Ola Select </a> </li>
        <li> <a href="">Ola Fleet </a> </li>
        <li> <a href="">Faetures </a> </li>
        <li> <a href="">Book Now </a> </li>
        <li> <a href="">Drive with Ola </a> </li>
        <li> <a href="">Ola Money </a> </li>
        <li> <a href="">Share </a> </li>
        <li> <a href="">Ola Corporate </a> </li>
        <li> <a href="">Offers </a> </li>
        <li> <a href="">Support </a> </li>
        <li> <a href="<?php echo e(url('/about')); ?>" >  About</a></li>



    </nav>

    <!-- menu controlling js  -->
    <script>
        const myMenu = () => {

            var getLayer = document.getElementById("menulayer");

            if (getLayer.style.width == "0px") {
                getLayer.style.width = "75%";

            } else {
                getLayer.style.width = "0px";
            }
        }

        function hide_menu() {
            document.getElementById("menulayer").style.width = "0%";

        }
    </script>





</body>

</html><?php /**PATH C:\web_php_stream\htdocs\abhi\resources\views/components/header.blade.php ENDPATH**/ ?>
<?php
session_start();
require_once 'inc/db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Vallidate User Data
    if (empty($name) || empty($email) || empty($message)) {
        $_SESSION['error'] = '<div class="flex p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">Warning!</span> Your Field Are Required
        </div>
      </div>
      ';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = '<div class="w-[400px] flex p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800" role="alert">
         <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
         <span class="sr-only">Info</span>
       <div>
           <span class="font-medium">Warning!</span> Invallid Email Address
         </div>
       </div>';
    }



    $query = "INSERT INTO contact(name, email, message) VALUES ('$name','$email','$message')";
    $insert = $conn->query($query);
    if($insert){
        $_SESSION['error'] = '<div id="alert-border-3" class="flex justify-center w-[400px] rounded p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800  " role="alert">
        <div>
        <i class="fa-solid fa-check text-lg"></i>
        </div>
        <div class="ml-3 text-sm font-medium">
          Your Message Successfully Send 
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
          <span class="sr-only">Dismiss</span>
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>';
    
    }
}



?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | JB Blog</title>
    <link href='https://fonts.googleapis.com/css?family=Federo' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>


    <style type="text/tailwindcss">
        @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
</head>

<body>

    <!-- Header -->
    <?php

    require_once 'inc/header.php';

    ?>

    <div class="flex justify-center">

    
        <?php

        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
        unset($_SESSION['error']);

        ?>
    </div>

    <!-- Hero Section -->
    <!-- For Small -->
    <section class="text-gray-600 body-font px-5 header-big pb-20">
        <div class="container mx-auto flex px-5 py-5 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="assets/img/contactHero.png">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center lg:ms-16 ">
                <h1 class="font-semibold title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 mt-5">Contact,
                    <br class="hidden lg:inline-block">With Me For Everything
                </h1>
                <p class="mb-8 leading-relaxed">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, recusandae eius, quis quasi voluptatum pariatur cumque maxime numquam molestiae, consectetur alias fuga blanditiis</p>
                <div class="flex justify-center">
                    <button class="hero-btn bg-[#790AE1] nav-btn inline-flex items-center border-0 py-2 px-4 focus:outline-none hover:bg-[#E426DA] rounded text-white mt-4 md:mt-0 transition duration-200 ease-out hover:ease-in">
                        Connect <i class="fa-solid fa-arrow-right pl-3"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>






    <!-- Contact -->
    <section class="text-gray-600 body-font relative">
        <div class="absolute inset-0 bg-gray-300 overflow-hidden">
            <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=800&amp;hl=en&amp;q=Dhaka,%20bangladesh+(JB%20Blog)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="800" frameborder="0"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe></div>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <div class="lg:w-2/4 md:w-2/3 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h1 class="text-gray-900 text-2xl mb-1 font-semibold title-font">Contact Us</h1>
                <p class="leading-relaxed mb-5 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="text" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <input type="submit" name="submit" value="submit" class="hero-btn bg-[#790AE1] nav-btn inline-flex items-center border-0 py-2 px-4 focus:outline-none hover:bg-[#E426DA] text-sm rounded text-white mt-4 md:mt-0 transition duration-200 ease-out hover:ease-in text-lg">

                </form>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <?php require 'inc/footer.php' ?>





    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/0e5659ef6a.js" crossorigin="anonymous"></script>
</body>

</html>
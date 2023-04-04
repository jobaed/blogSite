<?php
session_start();
require_once 'inc/db.php';

if (isset($_GET['id'])) {
    $id =  $_GET['id'];

    $select = "SELECT * FROM blog WHERE id= '$id' LIMIT 1";
    $blogExe = $conn->query($select);
    $row = $blogExe->fetch_assoc();
} else {
    header('Location: index.php');
}


?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JB Blog</title>
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



    <section class="text-gray-600 body-font">
        <div class="container px-5 pt-24 pb-10 mx-auto flex flex-wrap">
            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                <div class="w-full sm:p-4 px-4 ">
                    <h1 class="title-font font-semibold text-[40px] mb-2 text-gray-900"><?php echo $row['tittle'] ?></h1>
                    <div class="py-5 flex ">
                        <div class="lg:w-1/2">
                            <?php

                            $cat = $row['category'];
                            $catExplod = explode(',', $cat);

                            foreach ($catExplod as $category) {

                            ?>

                                <span class="bg-[#E426DA] text-white px-5 py-1 text-lg rounded hover:bg-[#790AE1] transition duration-200 ease-out hover:ease-in me-2"><?php echo $category ?></span>

                            <?php } ?>
                        </div>
                        <div class="lg:w-1/2 flex justify-end">
                            <h1 class="text-xl pe-2"><i class="text-[#790AE1] fa-solid fa-pen"></i>
                                &nbsp;
                                <?php
                                echo $row['author'];
                                ?>
                            </h1>
                        </div>

                    </div>

                    <div class="leading-relaxed">Pour-over craft beer pug drinking vinegar live-edge gastropub, keytar neutra sustainable fingerstache kickstarter.</div>

                    <div class="flex pt-5 space-x-2">
                        
                    

                        <!-- Facebook -->
                        <button type="button" data-te-ripple-init data-te-ripple-color="light" class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: #1877f2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                        </button>

                        <!-- Instagram -->
                        <button type="button" data-te-ripple-init data-te-ripple-color="light" class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: #c13584">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </button>

                        <!-- Linkedin -->
                        <button type="button" data-te-ripple-init data-te-ripple-color="light" class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: #0077b5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                            </svg>
                        </button>

                        <!-- Youtube -->
                        <button type="button" data-te-ripple-init data-te-ripple-color="light" class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: #ff0000">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                    <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
                    <p class="leading-relaxed">React</p>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                    <h2 class="title-font font-medium text-3xl text-gray-900">1.1K</h2>
                    <p class="leading-relaxed">Comment</p>
                </div>
            </div>
            <div class="relative lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                <span class="text-md bg-[#790AE1] hover:bg-[#E426DA] px-3 py-1 text-white absolute top-3 right-3 rounded cursor-pointer">
                    <i class="fa-solid fa-clock me-2"></i> <?php echo $row['dateTime'] ?>
                </span>
                <img class="object-cover object-center w-full h-full" src="assets/img/<?php echo $row['image'] ?>" alt="stats">
            </div>
        </div>
    </section>


    <section class="text-gray-600 body-font">
        <div class="container flex flex-wrap px-5 pb-24 mx-auto items-center">
            <div class=" md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Details</h1>
                <p class="leading-relaxed text-base">
                    <?php 
                     echo $row['text'];
                     ?>
                </p>

            </div>
        </div>
    </section>









    <!-- Contact -->
    <section class="text-gray-600 body-font relative">
        <div class="absolute inset-0 bg-gray-300 overflow-hidden">
            <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=800&amp;hl=en&amp;q=Dhaka,%20bangladesh+(JB%20Blog)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="800" frameborder="0"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe></div>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h1 class="text-gray-900 text-2xl mb-1 font-semibold title-font">Contact Us</h1>
                <p class="leading-relaxed mb-5 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                    <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <a href="" class="hero-btn bg-[#790AE1] nav-btn inline-flex items-center border-0 py-2 px-4 focus:outline-none hover:bg-[#E426DA] text-sm rounded text-white mt-4 md:mt-0 transition duration-200 ease-out hover:ease-in">
                    Submit <i class="fa-solid fa-arrow-right pl-3"></i>
                </a>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <?php require 'inc/footer.php' ?>





    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/0e5659ef6a.js" crossorigin="anonymous"></script>
</body>

</html>
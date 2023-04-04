<?php
require_once 'inc/db.php';

$selectPost = "SELECT * FROM blog ORDER BY id DESC LIMIT 3";
$exePost = $conn->query($selectPost);




?>


<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | JB Blog</title>
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



  <!-- Hero Section -->
  <!-- For Small -->
  <section class="text-gray-600 body-font px-5 header-big">
    <div class="container mx-auto flex px-5 py-5 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="assets/img/hello-blogger-round-composition_1284-19375.png">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center lg:ms-16 ">
        <h1 class="font-semibold title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 mt-5">Welcome,
          <br class="hidden lg:inline-block">To My Personal Blog
        </h1>
        <p class="mb-8 leading-relaxed">Blogs can cover a wide range of topics, from personal stories and experiences to
          professional advice and commentary on current events. They offer a unique opportunity for individuals to
          express themselves and connect with others who share similar interests or perspectives.</p>
        <div class="flex justify-center">
          <a href="blog.php" class="hero-btn bg-[#790AE1] nav-btn inline-flex items-center border-0 py-2 px-4 focus:outline-none hover:bg-[#E426DA] rounded text-white mt-4 md:mt-0 transition duration-200 ease-out hover:ease-in">
            Read More <i class="fa-solid fa-arrow-right pl-3"></i>
  </a>
        </div>
      </div>

    </div>
  </section>


  <!-- Featured Blogs -->
  <section class="text-gray-600 body-font">

    <div class="container px-5 py-32 mx-auto">
      <h1 class="text-center text-4xl text-black font-semibold mb-8">Featured Post</h1>
      <div class="flex flex-wrap -m-4">
        <!-- PHP Script -->
        <?php

        while ($row = $exePost->fetch_assoc()) {

        ?>


          <div class="p-4 md:w-1/3 ">
            <div class="relative cursor-pointer h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
              <span class="text-xs bg-[#E426DA] hover:bg-[#790AE1] px-2 py-1 text-white absolute top-2 right-2 rounded cursor-pointer">
                <?php echo $row['dateTime'] ?>
              </span>
              <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="assets/img/<?php echo $row['image'] ?>" alt="blog">
              <div class="p-6">
                <div class="category-wrapper flex items-center justify-between">
                  <div>
                    <?php

                    $cat = $row['category'];
                    $catExplod = explode(',', $cat);

                    foreach ($catExplod as $category) {

                    ?>

                      <span class="bg-[#E426DA] text-white px-3 py-1 text-sm rounded hover:bg-[#790AE1] transition duration-200 ease-out hover:ease-in"><?php echo $category ?></span>

                    <?php } ?>
                  </div>
                  <div>
                    <span class="text-sm ">
                      <i class="fa-solid fa-at"></i>
                      <?php
                      echo $row['author'];
                      ?>
                    </span>
                  </div>
                </div>

                <h1 class="title-font text-xl font-semibold text-gray-900 my-3 ">
                  <?php
                  echo $row['tittle'];
                  ?>
                </h1>
                <p class="leading-relaxed mb-3">
                  <?php

                  echo substr($row['text'], 0, 150) . "...";

                  ?>
                </p>
                <div class="flex items-center flex-wrap ">
                  <a href="singleBlog.php?id=<?php echo $row['id'] ?>" class="hero-btn bg-[#790AE1] nav-btn inline-flex items-center border-0 py-2 px-4 focus:outline-none hover:bg-[#E426DA] text-sm rounded text-white mt-4 md:mt-0 transition duration-200 ease-out hover:ease-in">
                    Read More <i class="fa-solid fa-arrow-right pl-3"></i>
                  </a>
                  <span class="text-[#790AE1] mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-[#790AE1]">
                    <svg class="w-4 h-4 mr-1 " stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                      <circle cx="12" cy="12" r="3"></circle>
                    </svg>4.5K
                  </span>
                  <span class="text-[#790AE1] inline-flex items-center leading-none text-sm">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                      <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                      </path>
                    </svg>12
                  </span>
                </div>
              </div>
            </div>
          </div>




        <?php
        }
        ?>


      </div>
      <div class="flex justify-center mt-16">
        <a href="blog.php" class="float-center hero-btn bg-[#E426DA] nav-btn inline-flex items-center border-0 py-2 px-7 focus:outline-none hover:bg-[#790AE1] rounded text-white mt-4 md:mt-0 transition duration-200 ease-out hover:ease-in">
          View All <i class="fa-solid fa-arrow-right pl-3"></i>
      </a>
      </div>
    </div>
  </section>



  <!-- Extra -->
  <section class="text-white bg-[#790AE1] body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
        <div class="w-full sm:p-4 px-4 mb-6">
          <h1 class="title-font font-medium text-4xl mb-2 text-gray-100">Moon hashtag pop-up try-hard offal truffaut</h1>
          <div class="leading-relaxed">Pour-over craft beer pug drinking vinegar live-edge gastropub, keytar neutra sustainable fingerstache kickstarter.</div>
        </div>
        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
          <h2 class="title-font font-medium text-3xl text-gray-100">95.7K</h2>
          <p class="leading-relaxed">Users</p>
        </div>
        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
          <h2 class="title-font font-medium text-3xl text-gray-100">86.8K</h2>
          <p class="leading-relaxed">Subscribes</p>
        </div>
        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
          <h2 class="title-font font-medium text-3xl text-gray-100">95%</h2>
          <p class="leading-relaxed">Engaged</p>
        </div>

      </div>
      <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
        <img class="object-cover object-center w-full h-full" src="assets/img/extra.png" alt="stats">
      </div>
    </div>
  </section>


  <!-- Contact -->
  <section class="text-gray-600 body-font relative">
    <div class="absolute inset-0 bg-gray-900 overflow-hidden">
      <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=800&amp;hl=en&amp;q=Dhaka,%20bangladesh+(JB%20Blog)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="800" frameborder="0"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe></div>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
      <div class="lg:w-3/7 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
        <h1 class="text-white text-2xl mb-1 font-semibold title-font">Contact Us</h1>
        <p class="leading-relaxed mb-5 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="relative mb-4">
          <label for="name" class="leading-7 text-sm text-gray-300">Name</label>
          <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-300">Email</label>
          <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-300">Message</label>
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
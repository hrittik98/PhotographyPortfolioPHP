<!DOCTYPE html>
<html>
<head>
  <title>EarthyExposures</title>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="text-gray-700 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center" style="background-color:#14C38E">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
    <svg class="h-12 w-12 text-purple-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="13" r="3" />  
    <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h2m9 7v7a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />  <line x1="15" y1="6" x2="21" y2="6" />  <line x1="18" y1="3" x2="18" y2="9" /></svg>

      </svg>
      <span class="ml-3 text-xl">EarthyExposures</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center" >
      <a href="index.php" class="mr-5 hover:text-gray-900">Home</a>
      <a href="works.php" class="mr-5 hover:text-gray-900">Works</a>
      <a href="contact.php" class="mr-5 hover:text-gray-900">Contact</a>
    </nav>
   
  </div>
</header>

<section id="menu" class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">My Works</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Let's unravel the magic of nature together, one frame at a time.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <?php
        $dir = "gallery/";
        if (is_dir($dir)) {
          if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
              if ($file == "." || $file == "..") {
              } else {
      ?>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                  <div class="flex relative">
                    <img alt="gallery" class="border-gray-200 w-full object-cover object-center" style="height: 260px; cursor: pointer;" 
                         src="gallery/<?php echo $file; ?>" onclick="showFullScreenImage('gallery/<?php echo $file; ?>')">
                  </div>
                </div>
      <?php
              }
            }
            closedir($dh);
          }
        }
      ?>
    </div>
  </div>
</section>

<div class="fullscreen-image" id="fullscreenImage">
  <span onclick="closeFullScreenImage()" style="position: absolute; top: 20px; right: 20px; cursor: pointer; font-size: 24px; color: white;">&times;</span>
  <img src="" id="fullscreenImageSrc" alt="Full Screen">
</div>



<footer class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-no-wrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      <svg class="h-12 w-12 text-purple-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  
        <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="13" r="3" />  <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h2m9 7v7a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />  <line x1="15" y1="6" x2="21" y2="6" />  <line x1="18" y1="3" x2="18" y2="9" /></svg>

        <span class="ml-3 text-xl">EarthyExposures</span>
      </a>
      <p class="mt-2 text-sm text-gray-500">Copyright. All rights reserved.</p>
    </div>
  
  <div class="bg-gray-200">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left">©2023 HB 
   
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>

</footer>

<script src="index.js"> </script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
	<title>EarthyExposures</title>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>
<body style="background-color:#B9FFF8">
<header class="text-gray-700 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"  style="background-color:#14C38E">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
    <svg class="h-12 w-12 text-purple-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="13" r="3" />  
    <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h2m9 7v7a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />  <line x1="15" y1="6" x2="21" y2="6" />  <line x1="18" y1="3" x2="18" y2="9" /></svg>

      </svg>
      <span class="ml-3 text-xl">EarthyExposures</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center" >
      <a href="index.php" class="mr-5 hover:text-gray-900">Home</a>
      <a href="works.php" class="mr-5 hover:text-gray-900">Works</a>
    </nav>
   
  </div>
</header>

<section class="text-gray-700 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Welcome to 
        <br class="hidden lg:inline-block">EarthyExposures
      </h1>

      <p class="mb-8 leading-relaxed">Discover captivating visual narratives at EarthyExposures - where every frame tells a unique tale. 📷✨ Unleash the magic of photography, one click at a time. Join us on this creative journey! 🌟🖼️</p>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" onclick="works()" >
  View Works
</button>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6" id="slideshow-container">
      <!-- Images will be loaded here -->
      <img name="mySlides" class="object-cover object-center rounded" alt="" src="images/header.jpeg">
      <img name="mySlides" class="object-cover object-center rounded" alt="" src="gallery/DSC_1431.jpg">
      <img name="mySlides" class="object-cover object-center rounded" alt="" src="gallery/DSC03730.jpg">
    </div>
  </div>
</section>

<div class="bottom-container" style="background-color:#14C38E">
        <a class="footer-link" href="https://in.linkedin.com/in/hrittik-baruah-b0505221a">LinkedIn</a>
        <a class="footer-link" href="https://facebook.com/hrit26">Facebook</a>
        <a class="footer-link" href="https://www.instagram.com/hrit_/">Instagram</a>
        <p>© Hrittik Baruah</p>
      </div>

<script src="index.js"> </script>
  


</body>
</html>

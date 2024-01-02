<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Document</title>
</head>

<body>


  <section class="relative mx-auto">
    <nav class="flex justify-between bg-gray-900 h-[80px] text-white w-screen">

      <div class="px-5 xl:px-12 py-6 flex w-full items-center ">
        <a class="text-3xl font- flex items-center font-heading h-[60px] w-[170px]" href="#">
          <img src="logo.png" alt="logo">

        </a>
        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
          <li><a class="hover:text-gray-200" href="#">Home</a></li>
          <li><a class="hover:text-gray-200" href="#">Catagory</a></li>
          <li><a class="hover:text-gray-200" href="#">Collections</a></li>
          <li><a class="hover:text-gray-200" href="#">Contact Us</a></li>
        </ul>
        <div class="hidden xl:flex items-center space-x-5 items-center">
          <div class="relative hidden md:block">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
              </svg>
              <span class="sr-only">Search icon</span>
            </div>
            <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
          </div>

          <a class="flex items-center hover:text-gray-200" href="Basket.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span class="flex absolute -mt-5 ml-4">
              <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
              </span>
            </span>
          </a>
        
        </div>

      </div>
      <!-- Responsive navbar -->
      <a class="xl:hidden flex mr-6 items-center" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <span class="flex absolute -mt-5 ml-4">
          <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
          </span>
        </span>
      </a>
      <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </a>

    </nav>
    <div class="w-[92%] m-auto  overflow-y-auto flex justify-center flex-wrap scroll-hidden mt-2">
      <a class="text-sm text-gray-700 leading-5 hover:text-white hover:bg-gray-800 mx-1 md:my-0 border border-black border-solid rounded-full py-[3px] px-[25px]" href="#">Vue</a>
      <a class="text-sm text-gray-700 leading-5 hover:text-white hover:bg-gray-800 mx-1 md:my-0 border border-black border-solid rounded-full py-[3px] px-[25px]" href="#">React</a>
      <a class="text-sm text-gray-700 leading-5 hover:text-white hover:bg-gray-800 mx-1 md:my-0 border border-black border-solid rounded-full py-[3px] px-[25px]" href="#">Laravel</a>
      <a class="text-sm text-gray-700 leading-5 hover:text-white hover:bg-gray-800 mx-1  md:my-0 border border-black border-solid rounded-full py-[3px] px-[25px]" href="#">Tailwindcss</a>
      <a class="text-sm text-gray-700 leading-5 hover:text-white hover:bg-gray-800 mx-1 md:my-0 border border-black border-solid rounded-full py-[3px] px-[25px]" href="#">Meraki UI</a>
      <a class="text-sm text-gray-700 leading-5 hover:text-white hover:bg-gray-800 mx-1 md:my-0 border border-black border-solid rounded-full py-[3px] px-[25px]" href="#">CPP</a>

    </div>
  </section>
  </div>


<!-- ---------PRODUCT LIST---------------------- -->
  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <span class="text-transparent bg-clip-text bg-gradient-to-r text-[50px] font-bold to-gray-500 from-black">Products</span>

      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Basic Tee
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Black</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$35</p>
          </div>
        </div>


      </div>
    </div>
  </div>

</body>

</html>
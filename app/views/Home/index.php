<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />

    <title>HomePage</title>
</head>

<body class="">

<nav class="flex justify-between bg-gray-900 h-[80px] text-white w-[94.55rem]">

<div class="px-5 xl:px-12 py-6 flex w-full items-center ">
    <a class="text-3xl font- flex items-center font-heading h-[60px] w-[170px]" href="#">
        <img src="<?= URLROOT ?>public/images/logo.png" alt="logo">

    </a>
    <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
        <li><a class="hover:text-gray-200" href="#">Home</a></li>
        <li><a class="hover:text-gray-200" href="#">Products</a></li>
        <li><a class="hover:text-gray-200" href="#">Collections</a></li>
        <li><a class="hover:text-gray-200" href="#">Contact Us</a></li>
    </ul>

 <button class="p-2 px-10 bg-violet-700 rounded-lg">login</button>
</div>
<!-- Responsive navbar -->

<a class="navbar-burger self-center mr-12 xl:hidden" href="#">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</a>

</nav>


    <div class="hero min-h-screen"
        style="background-image: url('<?= URLROOT ?>public/images/shop.png');">
        <div class="hero-overlay bg-opacity-20"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">warehouse sales</h1>
                <p class="mb-5 font-bold">Don’t wait, grab our premium sneakers now up to 75% off</p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
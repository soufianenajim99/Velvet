<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="min-h-screen bg-[url('<?= URLROOT ?>public/images/LOgiiin.jpg')] bg-cover  bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-black to-blue-900 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
                  
                    <div class="divide-y divide-gray-200">
                        <div class="relative mx-auto w-full max-w-md bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-xl sm:px-10">
                            <div class="w-full">
                                <div class="text-center">
                                    <h1 class="text-3xl font-semibold text-gray-900">Sign in below for access</h1>
                                    <!-- <p class="mt-2 text-gray-500">Sign in below to access your account</p> -->
                                </div>
                                <div class="mt-5">
                                    <form action="">
                                        <div class="relative mt-6">
                                            <input type="email" name="email" id="email" placeholder="Email Address" class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none" autocomplete="NA" />
                                            <label for="email" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Email Address</label>
                                        </div>
                                        <div class="relative mt-6">
                                            <input type="password" name="password" id="password" placeholder="Password" class="peer peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none" />
                                            <label for="password" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Password</label>
                                        </div>
                                        <div class="my-6">
                                            <button type="submit" class="w-full rounded-md bg-black px-3 py-4 text-white focus:bg-gray-600 focus:outline-none">Sign in</button>
                                        </div>
                                        <p class="text-center text-sm text-gray-500">Don&#x27;t have an account yet?
                                            <a href="signup" class="font-semibold text-gray-600 hover:underline focus:text-gray-800 focus:outline-none">Sign
                                                up
                                            </a>.
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?= (isset($_GET["error"])) ? "<p class='text-red-500 font-bold flex justify-center transition-opacity duration-500 ease-in-out opacity-100'>" . $_GET["error"] . "</p>" : ""; ?>

                    </div>
        </div>
    </div>
</body>

</html>
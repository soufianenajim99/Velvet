<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">

    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Add Admin</h2>

        <!-- Admin Form -->
        <form action="" method="POST">
            <!-- Admin Name Input -->
            <div class="mb-4">
                <label for="AdminName" class="block text-gray-700 text-sm font-bold mb-2">Admin Fullname</label>
                <input type="text" id="AdminName" name="fullname" placeholder="Enter Admin name"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <!-- Admin Description Input -->
            <div class="mb-4">
                <label for="AdminDescription" class="block text-gray-700 text-sm font-bold mb-2">username</label>
                <input type="text" id="AdminDescription" name="username" placeholder="Enter Admin description"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>

            <div class="mb-4">
                <label for="AdminDescription" class="block text-gray-700 text-sm font-bold mb-2">password</label>
                <input type="password" id="AdminDescription" name="password" placeholder="Enter Admin description"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>

            <div class="mb-4">
                <label for="AdminDescription" class="block text-gray-700 text-sm font-bold mb-2">Adresse</label>
                <input type="text" id="AdminDescription" name="Adresse" placeholder="Enter Admin description"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>

            <div class="mb-4">
                <label for="AdminDescription" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="AdminDescription" name="Email" placeholder="Enter Admin description"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Add
                    Admin</button>
            </div>
        </form>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">

    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Add Client</h2>

        <!-- Client Form -->
        <form action="" method="POST">
            <!-- Client Name Input -->
            <div class="mb-4">
                <label for="ClientName" class="block text-gray-700 text-sm font-bold mb-2">Client Fullname</label>
                <input type="text" id="ClientName" name="fullname" placeholder="Enter Client name"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <!-- Client Description Input -->
            <div class="mb-4">
                <label for="ClientDescription" class="block text-gray-700 text-sm font-bold mb-2">username</label>
                <input type="text" id="ClientDescription" name="username" placeholder="Enter Client description"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>

            <div class="mb-4">
                <label for="ClientDescription" class="block text-gray-700 text-sm font-bold mb-2">password</label>
                <input type="password" id="ClientDescription" name="password" placeholder="Enter Client description"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>

            <div class="mb-4">
                <label for="ClientDescription" class="block text-gray-700 text-sm font-bold mb-2">Adresse</label>
                <input type="text" id="ClientDescription" name="Adresse" placeholder="Enter Client description"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>

            <div class="mb-4">
                <label for="ClientDescription" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="ClientDescription" name="Email" placeholder="Enter Client description"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Add
                    Client</button>
            </div>
        </form>
    </div>

</body>

</html>
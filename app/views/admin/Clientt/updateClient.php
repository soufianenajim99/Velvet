<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Category Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">
    <?php
var_dump($data);
?>
    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Update Client</h2>

        <!-- Category Form -->
        <form action="" method="POST">
            <!-- Category Name Input -->
            <div class="mb-4">
                <label for="categoryName" class="block text-gray-700 text-sm font-bold mb-2">Client Fullname</label>
                <input type="text" id="categoryName" name="fullname" value="<?= $data["clis"]->FullName ?>"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <!-- Category Description Input -->
            <div class="mb-4">
                <label for="categoryDescription" class="block text-gray-700 text-sm font-bold mb-2">username</label>
                <input type="text" id="categoryDescription" name="username" value="<?= $data["clis"]->username ?>"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>

            <div class="mb-4">
                <label for="categoryDescription" class="block text-gray-700 text-sm font-bold mb-2">password</label>
                <input type="password" id="categoryDescription" name="password" value="<?= $data["clis"]->password ?>"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>

            <div class="mb-4">
                <label for="categoryDescription" class="block text-gray-700 text-sm font-bold mb-2">Adresse</label>
                <input type="text" id="categoryDescription" name="Adresse" value="<?= $data["clis"]->Adresse ?>"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>

            <div class="mb-4">
                <label for="categoryDescription" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="categoryDescription" name="Email" value="<?= $data["clis"]->Email ?>"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Update
                    Client</button>
            </div>
        </form>
    </div>

</body>

</html>
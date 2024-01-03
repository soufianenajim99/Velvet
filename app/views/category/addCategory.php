<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">

    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Add Category</h2>

        <!-- Category Form -->
        <form action="#" method="POST">
            <!-- Category Name Input -->
            <div class="mb-4">
                <label for="categoryName" class="block text-gray-700 text-sm font-bold mb-2">Category Name:</label>
                <input type="text" id="categoryName" name="categoryName" placeholder="Enter category name"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <!-- Category Description Input -->
            <div class="mb-4">
                <label for="categoryDescription" class="block text-gray-700 text-sm font-bold mb-2">Category
                    Description:</label>
                <input type="text" id="categoryDescription" name="categoryDescription"
                    placeholder="Enter category description"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Add
                    Category</button>
            </div>
        </form>
    </div>

</body>

</html>
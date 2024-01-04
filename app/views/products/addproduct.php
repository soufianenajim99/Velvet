<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">

    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Add Products</h2>

        <!-- Products Form -->
        <form action="" method="POST" enctype="multipart/form-data">
            <!-- Products Name Input -->
            <div class="mb-4">
                <label for="ProductsName" class="block text-gray-700 text-sm font-bold mb-2">Product Name : </label>
                <input type="text" id="ProductsName" name="ProductsName" placeholder="Enter Products name"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <!-- Price Input -->
            <div class="mb-4">
                <label for="ProductsName" class="block text-gray-700 text-sm font-bold mb-2">Price : </label>
                <input type="text" id="ProductsPrice" name="ProductPrice" placeholder="Enter Product name"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <!-- Price Description Input -->
            <div class="mb-4">
                <label for="ProductDescription" class="block text-gray-700 text-sm font-bold mb-2">Products
                    Description:</label>
                <input type="text" id="ProductDescription" name="ProductDescription"
                    placeholder="Enter Product description"
                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></input>
            </div>
            <div class="mb-4">

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload
                    file</label>
                <input name="image"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="Products_image" id="Products_image" type="file">
            </div>


            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Add
                    Product</button>
            </div>
        </form>
    </div>

</body>

</html>
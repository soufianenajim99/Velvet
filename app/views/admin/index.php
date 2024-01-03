<!DOCTYPE html>
<html lang="es">

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="flex flex-col h-screen bg-gray-100">

        
        <div class="bg-white text-white shadow w-full p-2 flex items-center justify-between">
            <div class="flex items-center">
                <div class="flex items-center"> 
                    <img src="logo.png" alt="Logo" class="w-28 h-18 mr-2">
                    <h2 class="font-bold text-xl">Nombre de la Aplicación</h2>
                </div>
                <div class="md:hidden flex items-center"> 
                    <button id="menuBtn">
                        <i class="fas fa-bars text-gray-500 text-lg"></i> 
                    </button>
                </div>
            </div>

            <div class="space-x-5">
                <button>
                    <i class="fas fa-bell text-gray-500 text-lg"></i>
                </button>
                <button>
                    <i class="fas fa-user text-gray-500 text-lg"></i>
                </button>
            </div>
        </div>

        <div class="flex-1 flex flex-wrap">
            <div class="p-2 bg-white w-full md:w-60 flex flex-col md:flex hidden" id="sideNav">
                <nav><a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="index.php">
                        <i class="fas fa-home mr-2"></i>dashboard
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="users.php">
                        <i class="fas fa-users mr-2"></i>Users
                    </a>

                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="categories.php">
                        <i class="fas fa-file-alt mr-2"></i>Categories
                    </a>

                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="products.php">
                        <i class="fas fa-store mr-2"></i>Products
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="orders.php">
                        <i class="fas fa-store mr-2"></i>orders
                    </a>
                </nav>

                <a class="block text-gray-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white mt-auto"
                    href="#">
                    <i class="fas fa-sign-out-alt mr-2"></i>logout
                </a>


            </div>

            <div class="flex-1 p-4 w-full md:w-1/2">

                <div class="mt-8 flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                    <div class="flex-1 bg-white p-4 shadow rounded-lg md:w-1/2">
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">users</h2>
                        <div class="my-1"></div> 
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                        <div class="">
        <span class="py-2 px-8 bg-grey-lightest font-bold uppercase text-l text-grey-light ">000.000</span>
        <h3 class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-gray-500 border-b border-grey-light">Active users</h3>
      </div>
                    </div>

                    <div class="flex-1 bg-white p-4 shadow rounded-lg md:w-1/2">
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">product</h2>
                        <div class="my-1"></div> 
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                        <span class="py-2 px-16 bg-grey-lightest font-bold uppercase text-l text-grey-light ">000.000</span>
        <h3 class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-gray-500 border-b border-grey-light">Available products</h3>
      
                    </div>

                    <div class="flex-1 bg-white p-4 shadow rounded-lg md:w-1/2">
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">orders</h2>
                        <div class="my-1"></div> 
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                        <span class="py-2 px-10 bg-grey-lightest font-bold uppercase text-l text-grey-light ">000.000</span>
        <h3 class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-gray-500 border-b border-grey-light">Latest orders</h3>
      
                    </div>
                </div>

                <div class="mt-8 bg-white p-4 shadow rounded-lg">
                    <h2 class="text-gray-500 text-lg font-semibold pb-4">products</h2>
                    <div class="my-1"></div>
                    <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                    <table class="w-full table-auto text-sm">
                        <thead class="text-sm leading-normal">
                            <tr>
                                <th
                                    class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                    ID
                                </th>
                                <th
                                    class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                    Product Name
                                </th>
                                <th
                                    class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                    desc
                                </th>
                                <th
                                    class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                    Price
                                </th>
                                <th
                                    class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                    ation
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-sm leading-normal">
                                <td class="py-2 px-4 border-b border-grey-light"><img
                                        src="https://via.placeholder.com/40" alt="Foto Perfil"
                                        class="rounded-full h-10 w-10"></td>
                                <td class="py-2 px-16 border-b border-grey-light"><img src="" alt="image"></td>
                                <td class="py-2 px-16 border-b border-grey-light">Comercio</td>
                                <td class="py-2 px-16 border-b border-grey-light">29£</td>
                                <td class="py-2 px-16 border-b border-grey-light">
                                    <button type="button" data-modal-toggle="product-modal"
                                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id y6GKdvUrd7vp_pxsFb57 g40_g3BQzYCOX5eZADgY mveJTCIb2WII7J4sY22F YoPCmQ0E_V5W0GGmSIdm _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">

                                        Edit item
                                    </button>
                                    <button type="button" data-modal-toggle="delete-product-modal"
                                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id y6GKdvUrd7vp_pxsFb57 lZje8JvlESgmRAyE5oBT mveJTCIb2WII7J4sY22F _hwGprpWFg861uOaLs98 _dylIDxYTN3qgvD4U597 wGCv_lBIef6dPW_LgqPQ g0psQAXAFirvUBcDyMSb">
                                        Delete item
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-right mt-4">
                        <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                            add product
                        </button>
                    </div>
                </div>  
                <div class="mt-8 bg-white p-4 shadow rounded-lg">
                    <div class="bg-white p-4 rounded-md mt-4">
                        <h2 class="text-gray-500 text-lg font-semibold pb-4">orders</h2>
                        <div class="my-1"></div> 
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                        
                        <table class="w-full table-auto text-sm">
                            <thead>
                                <tr class="text-sm leading-normal">
                                    <th
                                        class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                        desc</th>
                                    <th
                                        class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                        date</th>
                                    <th
                                        class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light text-right">
                                        total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-2 px-16 border-b border-grey-light">Carlos Sánchez</td>
                                    <td class="py-2 px-16 border-b border-grey-light">27/07/2023</td>
                                    <td class="py-2 px-16 border-b border-grey-light text-right">$1500</td>
                                </tr>

                            </tbody>
                        </table>
                        
                        <div class="text-right mt-4">
                        <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                            infos
                        </button>
                    </div>
                    </div>
                </div>
                <div class="mt-8 bg-white p-4 shadow rounded-lg">
                    <div class="bg-white p-4 rounded-md mt-4">
                        <h2 class="text-gray-500 text-lg font-semibold pb-4">users</h2>
                        <div class="my-1"></div> 
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                        
                        <table class="w-full table-auto text-sm">
                            <thead>
                                <tr class="text-sm leading-normal">
                                    <th
                                        class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                        desc</th>
                                    <th
                                        class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                        date</th>
                                    <th
                                        class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light text-right">
                                        total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-2 px-16 border-b border-grey-light">Carlos Sánchez</td>
                                    <td class="py-2 px-16 border-b border-grey-light">27/07/2023</td>
                                    <td class="py-2 px-16 border-b border-grey-light text-right">$1500</td>
                                </tr>

                            </tbody>
                        </table>
                        
                        <div class="text-right mt-4">
                        <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                            infos
                        </button>
                    </div>
                    </div>
                </div>
                <div class="mt-8 bg-white p-4 shadow rounded-lg">
                    <div class="bg-white p-4 rounded-md mt-4">
                        <h2 class="text-gray-500 text-lg font-semibold pb-4">Categories</h2>
                        <div class="my-1"></div> 
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                        
                        <table class="w-full table-auto text-sm">
                            <thead>
                                <tr class="text-sm leading-normal">
                                    <th
                                        class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                        desc</th>
                                    <th
                                        class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                        date</th>
                                    <th
                                        class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light text-right">
                                        total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-2 px-16 border-b border-grey-light">Carlos Sánchez</td>
                                    <td class="py-2 px-16 border-b border-grey-light">27/07/2023</td>
                                    <td class="py-2 px-16 border-b border-grey-light text-right">$1500</td>
                                </tr>

                            </tbody>
                        </table>
                        
                        <div class="text-right mt-4">
                        <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                            infos
                        </button>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    </div>

    
</body>

</html>
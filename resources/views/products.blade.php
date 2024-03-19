<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Button to open modal -->
    <button onclick="openModal(true)" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition duration-300">
        Show Product Details
    </button>

    <!-- Modal -->
    <div id="productModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center" style="z-index: 1000;">
        <div class="bg-white rounded-lg p-5 md:p-20">
            <div class="text-right">
                <button onclick="openModal(false)" class="text-lg">&times;</button>
            </div>
            <h2 class="font-semibold text-xl mb-4">{{ $product['name'] }}</h2>
            <p class="text-gray-700">{{ $product['description'] }}</p>
            <p class="text-gray-900 font-bold mt-4">{{ $product['price'] }}</p>
        </div>
    </div>

    <script>
        function openModal(open) {
            const modal = document.getElementById('productModal');
            if (open) {
                modal.classList.remove('hidden');
            } else {
                modal.classList.add('hidden');
            }
        }
    </script>
</body>
</html>

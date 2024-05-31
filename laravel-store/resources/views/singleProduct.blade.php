<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Furniture Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<nav class="bg-slate-800 py-2 px-5">
    <span class="text-4xl text-white">Furniture Store</span>
</nav>

<header class="container mx-auto md:w-2/3 md:mt-10 py-16 px-8 bg-slate-200 rounded">
    <p>If this is not the right product for you, use the back button below to see our wide selection of other products.</p>
</header>


<div class="container mx-auto md:w-2/3 mt-5">
    <a href="/products" class="text-blue-500">Back</a>
</div>

<section class="container mx-auto md:w-2/3 border p-8 mt-5">
    <div class="flex justify-between items-start">
        <h1 class="text-5xl">{{ $singleProduct->color }} - £{{ $singleProduct->price }}</h1>
        <span class="bg-teal-500 px-2 rounded">Stock: {{ $singleProduct->stock }}</span>
    </div>
    <h2 class="text-3xl mt-3">Dimensions</h2>
    <p class="mt-2">Width: {{ $singleProduct->width }}mm</p>
    <p class="mt-3">Height: {{ $singleProduct->height }}mm</p>
    <p class="mt-3">Depth: {{ $singleProduct->depth }}mm</p>
</section>

<footer class="container mx-auto md:w-2/3 border-t mt-10 pt-5">
    <p>© Copyright iO Academy 2022</p>
</footer>

</body>
</html>

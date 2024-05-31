<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Furniture Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<nav class="bg-slate-800 py-2 px-5 flex justify-between items-center">
    <span class="text-4xl text-white">Furniture Store</span>

    <div class="flex gap-5">
        <div class="text-teal-500 border border-teal-500 rounded">
            <a href="gbp" class="border-r border-teal-500 hover:bg-teal-500 hover:text-slate-800 px-2 py-1">£</a><!--
        --><a href="usd" class="border-r border-teal-500 hover:bg-teal-500 hover:text-slate-800 px-2 py-1">$</a><!--
        --><a href="eur" class="border-r border-teal-500 hover:bg-teal-500 hover:text-slate-800 px-2 py-1">€</a><!--
        --><a href="yen" class="px-2 py-1 hover:bg-teal-500 hover:text-slate-800">¥</a>
        </div>

        <div class="text-yellow-300 border border-yellow-300 rounded">
            <a href="mm" class="border-r border-yellow-300 hover:bg-yellow-300 hover:text-slate-800 px-2 py-1">mm</a><!--
            --><a href="cm" class="border-r border-yellow-300 hover:bg-yellow-300 hover:text-slate-800 px-2 py-1">cm</a><!--
            --><a href="in" class="border-r border-yellow-300 hover:bg-yellow-300 hover:text-slate-800 px-2 py-1">in</a><!--
            --><a href="ft" class="px-2 py-1 hover:bg-yellow-300 hover:text-slate-800">ft</a>
        </div>
    </div>
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

@if(($relatedProduct) !== null)
<section class="container mx-auto md:w-2/3 border p-8 mt-10">
    <h1 class="text-3xl border-b pb-3 mb-3">Similar Product</h1>
    <div class="flex justify-between items-start">
        <p class="text-2xl">£{{ $relatedProduct->price }}</p>
        <span class="bg-teal-500 px-2 rounded">Stock: {{ $relatedProduct->stock }}</span>
    </div>
    <div class="flex justify-between items-start">
        <p>Color: {{ $relatedProduct->color }}</p>
        <a href="/products/{{ $relatedProduct->id }}" class="inline-block bg-blue-600 px-3 py-2 rounded text-white mt-1">More >></a>
    </div>
</section>
@endif


<footer class="container mx-auto md:w-2/3 border-t mt-10 pt-5">
    <p>© Copyright iO Academy 2022</p>
</footer>

</body>
</html>

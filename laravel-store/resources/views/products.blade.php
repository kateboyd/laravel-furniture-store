</body>
</html>

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
        --> <a href="usd" class="border-r border-teal-500 hover:bg-teal-500 hover:text-slate-800 px-2 py-1">$</a><!--
        --><a href="eur" class="border-r border-teal-500 hover:bg-teal-500 hover:text-slate-800 px-2 py-1">€</a><!--
        --><a href="yen" class="px-2 py-1 hover:bg-teal-500 hover:text-slate-800">¥</a>
        </div>
    </div>
</nav>

<header class="container mx-auto md:w-2/3 md:mt-10 py-16 px-8 bg-slate-200 rounded">
    <h1 class="text-5xl mb-2">Category: All Categories</h1>
    <p>For more information about any of the below products, click on the more button.</p>
</header>


<section class="container mx-auto md:w-2/3 grid md:grid-cols-4 gap-5 mt-5">
    @foreach ($products as $product)
    <div class="bg-slate-100 p-5">
        <div class="flex justify-between items-center">
            <h3 class="text-2xl">Price: £{{ $product->price }}</h3>
            <span class="bg-teal-500 text-2xl px-2 py-1 rounded">{{ $product->stock }}</span>
        </div>
        <p>Color: {{ $product->color }}</p>
        <a href="/products/{{ $product->id }}" class="inline-block bg-blue-600 px-3 py-2 rounded text-white mt-1">More >></a>
    </div>
    @endforeach

</section>

<footer class="container mx-auto md:w-2/3 border-t mt-10 pt-5">
    <p>© Copyright iO Academy 2022</p>
</footer>

</body>
</html>

<x-layout>
    <x-slot:pageTitle>Product</x-slot:pageTitle>
    <div class="block mx-auto w-full bg-white p-2 lg:p-3 rounded">
        <div class="w-full bg-blue-300 border min-h-60 flex items-center justify-center mb-2"><span>Image
                Placeholder</div>
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-ellipsis overflow-hidden mb-2">{{ $product['name'] }}
        </h2>
        <h3 class="text-green-500 font-bold text-xl mb-1">Price: ${{ $product['price'] }}.00</h3>
        <p class="text-gray-700">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem commodi, voluptas,
            necessitatibus, consequuntur velit tenetur ducimus voluptate dignissimos doloremque iste veniam sapiente
            voluptatibus. Natus, aliquid!</p>
        <hr class="my-4" />
        <div class="flex items-center justify-end">
            <div class="flex w-full lg:w-1/2 gap-2">
                <x-nav-link type='button'
                    class="text-orange-500 flex-1 bg-transparent border hover:bg-orange-500 hover:text-white transition-colors border-orange-500 py-2 px-4 rounded">Add
                    To Cart</x-nav-link>
                <x-nav-link type='button'
                    class="text-white flex-1 bg-orange-500 hover:bg-orange-600 py-2 px-4 rounded">Buy Now</x-nav-link>
            </div>
        </div>
    </div>
</x-layout>

<x-layout>
    <x-slot:pageTitle>Products</x-slot:pageTitle>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-items-center">
        @foreach ($products as $product)
            <a href="product/{{ $product['id'] }}"
                class="max-w-72 flex flex-col justify-between w-full border hover:border-orange-500 bg-white shadow p-2 lg:p-2 rounded">
                <div class="w-full bg-orange-200 border aspect-square flex items-center justify-center"><span>Image
                        Placeholder</div>
                <h2 class="text-lg md:text-xl lg:text-2xl font-bold text-ellipsis overflow-hidden">{{ $product['name'] }}
                </h2>
                <h3>Price: ${{ $product['price'] }}.00</h3>
                <div class="flex w-full gap-2 mt-2">
                    <x-nav-link type='button'
                        class="text-orange-500 flex-1 lg:text-sm bg-transparent border hover:bg-orange-500 hover:text-white transition-colors border-orange-500 py-2 px-4 rounded">Add
                        To Cart</x-nav-link>
                    <x-nav-link type='button'
                        class="text-white flex-1 bg-orange-500 hover:bg-orange-600 py-2 px-4 rounded">Buy
                        Now</x-nav-link>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>

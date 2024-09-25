<x-layout>
    <x-slot:pageTitle>Products</x-slot:pageTitle>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-items-center">
        @foreach ($products as $product)
            <a href="product/{{ $product['id'] }}" class="max-w-72 w-full border bg-white shadow p-2 lg:p-3 rounded">
                <div class="w-full bg-blue-300 border aspect-square flex items-center justify-center"><span>Image
                        Placeholder</div>
                <h2 class="text-lg md:text-xl lg:text-2xl font-bold text-ellipsis overflow-hidden">{{ $product['name'] }}
                </h2>
                <h3>Price: ${{ $product['price'] }}.00</h3>
            </a>
        @endforeach
    </div>
</x-layout>

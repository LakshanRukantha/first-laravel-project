<x-layout>
    <x-slot:pageTitle>Product</x-slot:pageTitle>
    <div class="relative md:h-72 flex flex-col md:flex-row gap-4 w-full bg-white p-2 lg:p-3">
        <div class="w-full min-h-60 bg-blue-300 border h-full flex items-center justify-center mb-2 md:mb-0">
            <span>Image Placeholder</span>
        </div>
        <div class="flex flex-col justify-between">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-ellipsis overflow-hidden mb-2">
                {{ $product['name'] }}
            </h2>
            <h3 class="text-green-500 font-bold text-xl mb-1">Price: ${{ $product['price'] }}.00</h3>
            <p class="text-gray-700">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem commodi, voluptas,
                necessitatibus, consequuntur velit tenetur ducimus voluptate dignissimos doloremque iste veniam sapiente
                voluptatibus. Natus!</p>
            <hr class="my-4" />
            <div class="flex items-center justify-end">
                <div class="flex w-full lg:w-1/2 gap-2">
                    <x-nav-link type='button'
                        class="text-orange-500 flex-1 bg-transparent border hover:bg-orange-500 hover:text-white transition-colors border-orange-500 py-2 px-4 rounded">Add
                        To Cart</x-nav-link>
                    <x-nav-link type='button'
                        class="text-white flex-1 bg-orange-500 hover:bg-orange-600 py-2 px-4 rounded">Buy
                        Now</x-nav-link>
                </div>
            </div>
        </div>
    </div>
    <div class="px-3">
        <h3 class="py-3 text-2xl md:text-3xl lg:text-4xl">{{ $product['name'] }} Description</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sint nostrum doloribus nisi suscipit quo cumque
            cum quis soluta aperiam, nobis quaerat reprehenderit alias obcaecati sit enim harum explicabo fugit nesciunt
            dolorum provident. Sit, nesciunt. A deserunt excepturi amet natus asperiores quae nostrum recusandae.
            Repellat excepturi obcaecati fugit provident quas rem quos, laboriosam ipsum dolorum architecto facilis
            consectetur culpa iure nemo dolor aliquam iste veniam hic quae laborum expedita? Alias illo accusamus
            sapiente rem est. Iusto magni libero officiis nemo.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sint nostrum doloribus nisi suscipit quo cumque
            cum quis soluta aperiam, nobis quaerat reprehenderit alias obcaecati sit enim harum explicabo fugit nesciunt
            dolorum provident. Sit, nesciunt. A deserunt excepturi amet natus asperiores quae nostrum recusandae.
            Repellat excepturi obcaecati fugit provident quas rem quos, laboriosam ipsum dolorum architecto facilis
            consectetur culpa iure nemo dolor aliquam iste veniam hic quae laborum expedita? Alias illo accusamus
            sapiente rem est. Iusto magni libero officiis nemo.</p>
    </div>
</x-layout>

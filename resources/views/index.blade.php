<x-layout>    
<div class="bg-white w-full rounded-xl p-2 shadow">
        <h1 class="text-3xl font-bold text-center"><span class="text-red-500">Laravel</span> + <span class="text-blue-500">Tailwind CSS</span></h1>
        <hr class="my-4" />
        <form action="">
        <label class="text-gray-900 text-lg">Name</label>
        <input type="text" class="w-full p-2 mb-2 outline-none focus:border-blue-500 rounded-lg border border-gray-300" placeholder="Enter your name" />
        <label class="text-gray-900 text-lg">Email</label>
        <input type="email" class="w-full p-2 mb-2 outline-none focus:border-blue-500 rounded-lg border border-gray-300" placeholder="Enter your email" />
        <label class="text-gray-900 text-lg">Password</label>
        <input type="password" class="w-full p-2 mb-2 outline-none focus:border-blue-500 rounded-lg border border-gray-300" placeholder="Enter your password" />
        <label class="text-gray-900 text-lg">Confirm Password</label>
        <input type="password" class="w-full p-2 mb-4 outline-none focus:border-blue-500 rounded-lg border border-gray-300" placeholder="Confirm your password" />
        <div class="flex gap-2">
        <button type="reset" class="border border-blue-500 rounded text-blue-500 hover:bg-blue-500 hover:text-white transition-colors py-1 text-lg uppercase flex-1">Clear</button>
        <button type="submit" class="bg-blue-500 hover:bg-blue-800 transition-colors rounded text-white py-1 text-lg uppercase flex-1">Register</button>
        </div>
        </form>
    </div>
</x-layout>
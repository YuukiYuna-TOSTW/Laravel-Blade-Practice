<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<div x-data="{ count: 0 }" class="text-center mt-5">
    <h1 class="text-2xl font-bold text-blue-600">Halo, {{ $name }}</h1>

    <p class="mt-4 text-lg">Klik tombol di bawah ini:</p>

    <button 
        @click="count++" 
        class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 mt-3">
        Klik Saya!
    </button>

    <p class="mt-3">Tombol diklik <span x-text="count"></span> kali.</p>
</div>

<!-- x-data, x-text, dan @click merupakan atribut yang berasal dari framework JavaScript yaitu Alpine.js -->
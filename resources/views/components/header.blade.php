<header class=" bg-transparent absolute inset-x-0 top-0 z-50" >
    <x-navbar></x-navbar>
    
    <!-- Mobile menu -->
    <div class="lg:hidden fixed inset-0 z-50 bg-[#F0FFF0] px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
         x-show="isOpen" @click.away="isOpen = false" x-transition>
      <div class="flex items-center justify-between">
        <a href="/" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-14 w-auto" src="{{ asset('img/logo-daun.png') }}" alt="">
        </a>
        <button @click="isOpen = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Close menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6">
        <a href="/upload" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-green-100">Unggah Gambar</a>
        <a href="/about" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-green-100">Tentang</a>
        <a href="/contact" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-green-100">Kontak</a>
        <a href="/community" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-green-100">Ruang Diskusi</a>
        <a href="/join" class="mt-24 block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-green-100">Bergabung</a>
      </div>
    </div>
  </header>
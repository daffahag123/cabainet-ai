<nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
  <div class="flex lg:flex-1">
    <a href="/" class="-m-1.5 p-1.5">
      <span class="sr-only">Your Company</span>
      <img class="h-14 w-auto" src="{{ asset('img/logo-daun.png') }}" alt="">
    </a>
  </div>
  <div class="flex lg:hidden">
    <button @click="isOpen = !isOpen" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
      <span class="sr-only">Open main menu</span>
      <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
    </button>
  </div>
  <div class="hidden lg:flex lg:gap-x-12">
    <x-nav-link href="upload">Unggah Gambar</x-nav-link>
    <x-nav-link href="about">Tentang Kami</x-nav-link>
    <x-nav-link href="contact">Kontak</x-nav-link>
    <x-nav-link href="community">Ruang Diskusi</x-nav-link>
  </div>
     
  <div class="hidden lg:flex lg:flex-1 lg:justify-end">
    <a href="/join" class="text-sm font-semibold text-white bg-primary px-4 py-3 rounded-full shadow-md hover:bg-secondary transition">

      Bergabung <span aria-hidden="true"></span>
    </a>
  </div>
</nav>





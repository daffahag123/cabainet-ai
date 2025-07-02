<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  {{-- Hero Section Start --}}
  <section id="home" class="relative px-6 lg:px-8 pb-14">
    <div class="mx-auto max-w-2xl py-32 sm:py-36 text-center">
      <h1 class="pt-28 text-5xl font-semibold tracking-tight text-gray-900 sm:text-6xl">
        Identifikasi Varietas Daun Cabai dengan AI
      </h1>
      <p class="mt-8 text-lg text-gray-500 sm:text-xl">
          Unggah gambar daun cabai dan biarkan sistem AI kami membantu Anda mengidentifikasi varietas dengan cepat dan akurat.
      </p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="/upload" class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500">
              Mulai Identifikasi
          </a>
          <a href="#" class="text-sm font-semibold text-gray-900">
              Pelajari lebih lanjut <span aria-hidden="true">→</span>
          </a>
      </div>
    </div>
  </section>
  {{-- Hero Section End --}}

  {{-- About Section Start --}}
  
  {{-- About Section End --}}
</x-layout>
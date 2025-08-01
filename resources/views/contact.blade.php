<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <!-- Section 1 -->
  <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-28 mx-auto flex sm:flex-nowrap flex-wrap">
      <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
            marginwidth="0" scrolling="no"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1665.4256372720583!2d107.61126938617338!3d-6.881974166210341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e79c5139cd7d%3A0xf666262cf2998848!2sBRIN%20Bandung%20KST%20Samaun%20Samadikun!5e0!3m2!1sid!2sid!4v1740636970700!5m2!1sid!2sid">
        </iframe>
        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
            <div class="lg:w-1/2 px-6">
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                <p class="mt-1">Jl. Cisitu Lama Jl. Sangkuriang, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135, Indonesia</p>
            </div>
            <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                <a class="text-red-500 leading-relaxed">dfakhryanshori6@gmail.com</a>
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                <p class="leading-relaxed">0813-1951-8665</p>
            </div>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2 bg-transparent flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
        <h2 class="text-gray-900 text-lg mb-1 font-bold title-font">Hubungi Kami</h2>
        <p class="leading-relaxed mb-5 text-gray-600" style="text-align: justify;">
            Jika Anda memiliki pertanyaan, saran, atau ingin bekerja sama, jangan ragu untuk menghubungi kami.  
            Kami siap membantu Anda!
        </p>

        <!-- Form -->
        <form action="{{ route('contact.send') }}" method="POST">
          @csrf
          <div class="relative mb-4">
              <label for="name" class="leading-7 text-sm text-gray-600">Nama</label>
              <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
              <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
              <label for="message" class="leading-7 text-sm text-gray-600">Pesan</label>
              <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
          <button type="submit" class="w-full text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Kirim</button>
        </form>

        <p class="text-xs text-gray-500 mt-3" style="text-align: justify;">
          Terima kasih telah menghubungi kami! Kami akan segera merespons.
        </p>
      </div>
    </div>
  </section>

  @if (Session::has('success'))
  <script>
      swal({
          title: "Berhasil!",
          text: "{{ Session::get('success') }}",
          icon: "success",
          button: "OK"
      });
  </script>
  @endif

</x-layout>




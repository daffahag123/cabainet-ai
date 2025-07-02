<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="bg-transparent w-full pt-24 px-0">
        {{-- Section 1 --}}
        <div class="bg-gradient-to-br from-emerald-50 via-emerald-100 to-emerald-200 py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-12 px-4 sm:px-6 lg:px-8">
                <div class="max-w-full">
                    <h2 class="text-3xl font-extrabold text-secondary sm:text-4xl">Tentang Kami</h2>
                    <p class="mt-4 text-gray-600 text-md" style="text-align: justify;">
                        Platform ini dirancang untuk mengumpulkan dataset serta mengidentifikasi dan mengklasifikasikan varietas daun cabai menggunakan AI. 
                        Dengan sistem yang mudah digunakan, pengguna bisa mengunggah gambar, berkontribusi dalam validasi data, dan memanfaatkan model deep learning untuk analisis yang lebih akurat. 
                        Tujuannya adalah mendukung penelitian pertanian dan meningkatkan efisiensi dalam mengenali varietas cabai.
                    </p>
                    <div class="mt-8">
                        <a href="#tujuan-kami" class="bg-primary text-white px-4 py-2 rounded-md hover:bg-secondary font-medium transition duration-300">
                            Yuk, Kenal Lebih Dekat! <span class="ml-2">&#8594;</span>
                        </a>
                    </div>                    
                </div>
                <div class="max-w-full h-auto px-12 mt-2 md:mt-0 flex justify-center">
                    <img src="{{ asset('img/about-daun.png') }}">
                </div>        
            </div>
        </div>

        {{-- Section 2 --}}
        <div id="tujuan-kami" class="bg-green-50 py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h5 class="text-3xl font-extrabold text-secondary sm:text-4xl">Tujuan Kami</h5>
                <div class="mt-12 grid grid-cols-1 gap-16 sm:grid-cols-2 lg:grid-cols-3">
                    <div>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                            </svg>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-medium text-gray-900">Misi</h3>
                            <p class="mt-2 text-base text-gray-600" style="text-align: justify;">Membangun platform kolaboratif untuk pengumpulan, identifikasi, dan klasifikasi varietas cabai berbasis AI.</p>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-medium text-gray-900">Nilai</h3>
                            <p class="mt-2 text-base text-gray-600" style="text-align: justify;">Kami percaya pada inovasi berbasis AI, kolaborasi komunitas, dan keterbukaan data untuk riset pertanian.</p>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-medium text-gray-900">Visi</h3>
                            <p class="mt-2 text-base text-gray-600" style="text-align: justify;">Menjadi platform utama dalam pengembangan teknologi AI untuk identifikasi dan klasifikasi varietas cabai.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Section 3 --}}
        <div class="bg-green-50 py-16 px-4 sm:px-16 lg:px-8">
            <div class="container mx-auto py-4 px-4">
                <h2 class="text-3xl font-extrabold text-secondary sm:text-4xl text-center mb-8">
                    Fokus Utama
                </h2>
            </div>
            <div class="max-w-6xl px-4 sm:px-6 lg:px-8 mx-auto space-y-12">
                <div class="flex flex-col overflow-hidden rounded-3xl shadow-sm lg:flex-row">
                    <img src="{{ asset('img/ai-robot.jpg') }}" alt="" class="h-80 aspect-video">
                    <div class="flex flex-col justify-center flex-1 p-6 bg-cyan-50">
                        <span class="text-xs uppercase text-gray-600">Akurasi dan Kecepatan</span>
                        <h3 class="text-3xl font-bold">Identifikasi & Klasifikasi</h3>
                        <p class="my-6 text-gray-600" style="text-align: justify;">Menggunakan kecerdasan buatan untuk mengidentifikasi dan mengklasifikasikan varietas daun cabai 
                        dengan cepat, akurat, dan efisien dalam pengolahan data.</p>
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden rounded-3xl shadow-sm lg:flex-row-reverse">
                    <img src="{{ asset('img/database.png') }}" alt="" class="h-80 aspect-video">
                    <div class="flex flex-col justify-center flex-1 p-6 bg-cyan-50">
                        <span class="text-xs uppercase text-gray-600">Kolaborasi Bersama</span>
                        <h3 class="text-3xl font-bold">Pengumpulan Data</h3>
                        <p class="my-6 text-gray-600" style="text-align: justify;">Netizen dapat berkontribusi dengan mengunggah foto daun cabai, membantu memperluas dan meningkatkan kualitas dataset untuk pelatihan model AI.</p>
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden rounded-3xl shadow-sm lg:flex-row">
                    <img src="{{ asset('img/diskusi.webp') }}" alt="" class="h-80 aspect-video">
                    <div class="flex flex-col justify-center flex-1 p-6 bg-cyan-50">
                        <span class="text-xs uppercase text-gray-600">Interaksi dan Edukasi</span>
                        <h3 class="text-3xl font-bold">Tanya Jawab & Diskusi</h3>
                        <p class="my-6 text-gray-600" style="text-align: justify;">Ruang interaktif untuk berdiskusi, berbagi wawasan, dan saling membantu dalam memahami hasil identifikasi serta klasifikasi varietas cabai.</p>
                    </div>
                </div>
            </div>
        </div>        

        {{-- Section 4 --}}
        <div class="bg-green-50 py-16 px-4 sm:px-6 lg:px-8 pb-32">
            <div class="container mx-auto py-4 px-4 text-center">
                <h2 class="text-3xl font-extrabold text-secondary sm:text-4xl mb-8">
                    Tim Pengembang
                </h2>
                <p class="text-gray-700 text-lg font-light mx-auto mb-12 max-w-3xl">
                    Kami adalah tim pengembang yang bersemangat menciptakan solusi inovatif. 
                    Dengan pengalaman luas di berbagai bidang, kami percaya bahwa teknologi yang baik 
                    lahir dari kolaborasi, kreativitas, dan komitmen untuk memberikan manfaat nyata bagi pengguna.
                </p>

                <!-- Flexbox di LG -->
                <div class="hidden lg:flex flex-wrap justify-center gap-16">
                    <!-- Card 1 -->
                    <div class="flex-1 max-w-xs flex flex-col items-center text-center bg-emerald-200 p-6 rounded-lg shadow-lg">
                        <img src="{{ asset('img/daffa.jpg') }}" 
                            alt="Daffa Fakhry Anshori" class="w-40 h-40 rounded-full object-cover shadow-md">
                        <h3 class="mt-4 text-xl font-semibold">Daffa Fakhry Anshori</h3>
                        <p class="text-base text-gray-500">Mahasiswa MBKM</p>
                        <div class="flex space-x-3 mt-3">
                            <a href="https://www.linkedin.com/in/daffa-fakhry-anshori-125016191/" class="text-blue-500">
                                <i class="mdi mdi-linkedin text-2xl"></i>
                            </a>
                            <a href="https://www.youtube.com/@daffafakhryanshori3135" class="text-red-500">
                                <i class="mdi mdi-youtube text-2xl"></i>
                            </a>
                            <a href="https://www.instagram.com/dfakhry_ans/" class="text-orange-500">
                                <i class="mdi mdi-instagram text-2xl"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="flex-1 max-w-xs flex flex-col items-center text-center bg-emerald-200 p-6 rounded-lg shadow-lg">
                        <img src="{{ asset('img/daffa.jpg') }}" 
                            alt="Daffa Fakhry Anshori" class="w-40 h-40 rounded-full object-cover shadow-md">
                        <h3 class="mt-4 text-xl font-semibold">Daffa Fakhry Anshori</h3>
                        <p class="text-base text-gray-500">Mahasiswa MBKM</p>
                        <div class="flex space-x-3 mt-3">
                            <a href="https://www.linkedin.com/in/daffa-fakhry-anshori-125016191/" class="text-blue-500">
                                <i class="mdi mdi-linkedin text-2xl"></i>
                            </a>
                            <a href="https://www.youtube.com/@daffafakhryanshori3135" class="text-red-500">
                                <i class="mdi mdi-youtube text-2xl"></i>
                            </a>
                            <a href="https://www.instagram.com/dfakhry_ans/" class="text-orange-500">
                                <i class="mdi mdi-instagram text-2xl"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="flex-1 max-w-xs flex flex-col items-center text-center bg-emerald-200 p-6 rounded-lg shadow-lg">
                        <img src="{{ asset('img/daffa.jpg') }}" 
                            alt="Daffa Fakhry Anshori" class="w-40 h-40 rounded-full object-cover shadow-md">
                        <h3 class="mt-4 text-xl font-semibold">Daffa Fakhry Anshori</h3>
                        <p class="text-base text-gray-500">Mahasiswa MBKM</p>
                        <div class="flex space-x-3 mt-3">
                            <a href="https://www.linkedin.com/in/daffa-fakhry-anshori-125016191/" class="text-blue-500">
                                <i class="mdi mdi-linkedin text-2xl"></i>
                            </a>
                            <a href="https://www.youtube.com/@daffafakhryanshori3135" class="text-red-500">
                                <i class="mdi mdi-youtube text-2xl"></i>
                            </a>
                            <a href="https://www.instagram.com/dfakhry_ans/" class="text-orange-500">
                                <i class="mdi mdi-instagram text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Grid/Flex di MD & SM -->
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:hidden gap-6">
                    <!-- Card 1 -->
                    <div class="flex flex-col items-center text-center bg-emerald-200 p-6 rounded-lg shadow-lg">
                        <img src="{{ asset('img/daffa.jpg') }}" 
                            alt="Daffa Fakhry Anshori" class="w-40 h-40 rounded-full object-cover shadow-md">
                        <h3 class="mt-4 text-xl font-semibold">Daffa Fakhry Anshori</h3>
                        <p class="text-base text-gray-500">Mahasiswa MBKM</p>
                        <div class="flex space-x-3 mt-3">
                            <a href="https://www.linkedin.com/in/daffa-fakhry-anshori-125016191/" class="text-blue-500">
                                <i class="mdi mdi-linkedin text-2xl"></i>
                            </a>
                            <a href="https://www.youtube.com/@daffafakhryanshori3135" class="text-red-500">
                                <i class="mdi mdi-youtube text-2xl"></i>
                            </a>
                            <a href="https://www.instagram.com/dfakhry_ans/" class="text-orange-500">
                                <i class="mdi mdi-instagram text-2xl"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="flex flex-col items-center text-center bg-emerald-200 p-6 rounded-lg shadow-lg">
                        <img src="{{ asset('img/daffa.jpg') }}" 
                            alt="Daffa Fakhry Anshori" class="w-40 h-40 rounded-full object-cover shadow-md">
                        <h3 class="mt-4 text-xl font-semibold">Daffa Fakhry Anshori</h3>
                        <p class="text-base text-gray-500">Mahasiswa MBKM</p>
                        <div class="flex space-x-3 mt-3">
                            <a href="https://www.linkedin.com/in/daffa-fakhry-anshori-125016191/" class="text-blue-500">
                                <i class="mdi mdi-linkedin text-2xl"></i>
                            </a>
                            <a href="https://www.youtube.com/@daffafakhryanshori3135" class="text-red-500">
                                <i class="mdi mdi-youtube text-2xl"></i>
                            </a>
                            <a href="https://www.instagram.com/dfakhry_ans/" class="text-orange-500">
                                <i class="mdi mdi-instagram text-2xl"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="flex flex-col items-center text-center bg-emerald-200 p-6 rounded-lg shadow-lg">
                        <img src="{{ asset('img/daffa.jpg') }}" 
                            alt="Daffa Fakhry Anshori" class="w-40 h-40 rounded-full object-cover shadow-md">
                        <h3 class="mt-4 text-xl font-semibold">Daffa Fakhry Anshori</h3>
                        <p class="text-base text-gray-500">Mahasiswa MBKM</p>
                        <div class="flex space-x-3 mt-3">
                            <a href="https://www.linkedin.com/in/daffa-fakhry-anshori-125016191/" class="text-blue-500">
                                <i class="mdi mdi-linkedin text-2xl"></i>
                            </a>
                            <a href="https://www.youtube.com/@daffafakhryanshori3135" class="text-red-500">
                                <i class="mdi mdi-youtube text-2xl"></i>
                            </a>
                            <a href="https://www.instagram.com/dfakhry_ans/" class="text-orange-500">
                                <i class="mdi mdi-instagram text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector('a[href="#tujuan-kami"]').addEventListener("click", function (e) {
            e.preventDefault();
            document.querySelector("#tujuan-kami").scrollIntoView({
                behavior: "smooth"
            });
        });
    });
</script>


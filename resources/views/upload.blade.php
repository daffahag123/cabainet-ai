<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <main class="bg-transparent flex flex-col min-h-screen px-4">
    <div class="flex-grow flex items-center justify-center py-44">
      <div class="w-full max-w-4xl bg-white p-8 rounded-lg shadow-lg text-center flex flex-col items-center space-y-3" id="mainContainer">
        <h1 class="text-2xl md:text-3xl font-bold">Identifikasi & Klasifikasi Daun Cabai</h1>
        <p class="text-gray-600">
          Unggah gambar daun cabai dalam format 
          <span class="font-semibold">JPG, JPEG, PNG, atau HEIC</span> untuk dianalisis.
        </p>

        <!-- Drop Zone -->
        <div class="w-full border-2 border-dashed border-gray-300 py-20 rounded-lg bg-gray-50 flex flex-col items-center justify-center transition-all duration-300" id="drop-zone">
          <button id="uploadButton" class="bg-primary text-white px-5 py-2 text-lg font-semibold rounded-lg shadow hover:bg-secondary transition">
            Pilih File Gambar
          </button>
          <input type="file" id="fileInput" class="hidden" accept="image/jpeg, image/png, image/heic">
          <p class="text-gray-500 mt-3 text-sm">atau seret & lepaskan gambar di sini</p>
        </div>

        <!-- Preview Gambar -->
        <div class="w-full flex flex-col items-center gap-4 invisible opacity-0 transition-all duration-300" id="previewContainer" style="display: none;">
          <p class="text-gray-700 font-semibold">File yang dipilih:</p>
          <p id="fileName" class="text-gray-500 mt-1 text-sm"></p>
          
          <div class="mt-2 flex justify-center">
            <img id="imagePreview" class="max-w-[180px] rounded-lg shadow-md border border-gray-300 p-2">
          </div>

          <!-- Tombol Identifikasi -->
          <button id="identifyButton" class="bg-primary text-white px-5 py-2 mt-6 text-lg font-semibold rounded-lg shadow hover:bg-secondary transition">
            Identifikasi Gambar
          </button>
        </div>
      </div>

      <!-- Loading Screen -->
      <div class="hidden flex-col items-center justify-center text-center space-y-3" id="loadingContainer">
        <div class="relative w-16 h-16">
          <div class="absolute inset-0 border-4 border-gray-300 rounded-full"></div>
          <div class="absolute inset-0 border-4 border-t-primary border-solid rounded-full animate-spin"></div>
        </div>
        <p class="text-lg font-semibold text-gray-700">Memproses gambar, harap tunggu...</p>
      </div>

      <!-- Bagian Hasil Identifikasi -->
      <div id="resultContainer" class="hidden flex-col items-center gap-5 bg-white p-6 rounded-lg shadow-md max-w-md w-full border border-gray-200">
        <!-- Judul -->
        <h2 class="text-xl font-bold text-gray-800">Hasil Identifikasi</h2>
        <!-- Gambar hasil unggahan -->
        <img id="resultImage" class="max-w-[180px] rounded-md shadow-sm border border-gray-300">
        <!-- Informasi hasil identifikasi -->
        <div class="w-full text-center">
          <p class="text-sm text-gray-600">Varietas Cabai:</p>
          <p id="className" class="text-lg font-semibold text-secondary"></p>
          <p class="text-sm text-gray-600 mt-2">Akurasi:</p>
          <p id="accuracy" class="text-lg font-semibold text-secondary"></p>
        </div>

        <!-- Tombol aksi -->
        <div class="flex flex-col gap-3 w-full">
          <button id="collectDataButton" class="bg-primary text-white px-6 py-3 text-base font-semibold rounded-lg shadow-md hover:bg-secondary hover:shadow-lg transition-all duration-200 ease-in-out active:scale-95 focus:ring-2 focus:ring-blue-400">
            Kumpulkan Gambar
          </button>
          <button id="retryButton" class="bg-gray-600 text-white px-6 py-3 text-base font-semibold rounded-lg shadow-md hover:bg-gray-700 hover:shadow-lg transition-all duration-200 ease-in-out active:scale-95 focus:ring-2 focus:ring-gray-400">
            Unggah Ulang
          </button>
        </div>
      </div>

      <!-- Form Hidden -->
      <form id="uploadForm" action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="hidden">
        @csrf
        <input type="hidden" name="name" id="inputName">
        <input type="hidden" name="accuracy" id="inputAccuracy">
        <input type="file" name="file_path" id="inputFileHidden">
      </form>
    </div>

    <script>
      const dropZone = document.getElementById('drop-zone');
      const fileInput = document.getElementById('fileInput');
      const previewContainer = document.getElementById('previewContainer');
      const imagePreview = document.getElementById('imagePreview');
      const fileNameText = document.getElementById('fileName');
      const identifyButton = document.getElementById('identifyButton');
      const mainContainer = document.getElementById('mainContainer');
      const loadingContainer = document.getElementById('loadingContainer');
      
      const allowedTypes = ['image/jpeg', 'image/png', 'image/heic'];

      function previewImage(file) {
          const reader = new FileReader();
          reader.onload = function (e) {
              imagePreview.src = e.target.result;
              fileNameText.textContent = file.name;
              previewContainer.style.display = "flex";  
              previewContainer.style.opacity = "0";  
              previewContainer.style.transform = "translateY(20px) scale(0.98)";
              previewContainer.style.transition = "opacity 0.8s, transform 0.8s";

              setTimeout(() => {
                  previewContainer.classList.remove('invisible');
                  previewContainer.style.opacity = "1";
                  previewContainer.style.transform = "translateY(0px) scale(1)";
                  
                  // **Scroll ke atas tombol Identifikasi**
                  setTimeout(() => {
                      const buttonPosition = identifyButton.getBoundingClientRect().top + window.scrollY;
                      window.scrollTo({ top: buttonPosition - 550, behavior: "smooth" }); 
                  }, 50);  
              }, 10);
          };
          reader.readAsDataURL(file);
      }

      dropZone.addEventListener('dragover', (event) => {
          event.preventDefault();
          dropZone.classList.add('border-green-500');
      });

      dropZone.addEventListener('dragleave', () => {
          dropZone.classList.remove('border-green-500');
      });

      dropZone.addEventListener('drop', (event) => {
          event.preventDefault();
          dropZone.classList.remove('border-green-500');
          const files = event.dataTransfer.files;
          if (files.length && allowedTypes.includes(files[0].type)) {
              fileInput.files = files;
              previewImage(files[0]);
          } else {
              alert('Format tidak didukung! Harap unggah file dengan format JPG, JPEG, PNG, atau HEIC.');
          }
      });

      fileInput.addEventListener('change', (event) => {
          const file = event.target.files[0];
          if (!file) return;
          if (allowedTypes.includes(file.type)) {
              previewImage(file);
          } else {
              alert('Format tidak didukung! Harap unggah file dengan format JPG, JPEG, PNG, atau HEIC.');
          }
      });

      identifyButton.addEventListener('click', () => {
        const file = fileInput.files[0];
        if (!file) {
            alert("Silakan pilih gambar terlebih dahulu.");
            return;
        }

        // Tampilkan konfirmasi menggunakan swal
        swal({
          title: "Konfirmasi",
          text: "Apakah foto daun yang diunggah sudah benar?",
          icon: "warning",
          buttons: {
            cancel: {
              text: "Belum",
              visible: true,
              className: "swal-button--cancel",
              closeModal: true,
            },
            confirm: {
              text: "Sudah",
              visible: true,
              className: "swal-button--confirm",
              closeModal: true,
            }
          },
          dangerMode: false,
        }).then((isConfirmed) => {
          if (isConfirmed) {
            // Jika user klik "Sudah", lanjut proses identifikasi
            prosesIdentifikasi(file);
          } else {
            // Jika user klik "Belum", reset tampilan dan kembali ke upload
            previewContainer.style.display = "none";
            fileInput.value = "";
            mainContainer.style.display = "flex";
            window.scrollTo({ top: 0, behavior: "smooth" });
          }
        });
      });

      async function prosesIdentifikasi(file) {
        // Tampilkan loading
        mainContainer.style.display = "none";
        loadingContainer.classList.remove("hidden");
        loadingContainer.classList.add("flex");
        loadingContainer.scrollIntoView({ behavior: "smooth", block: "center" });

        const formData = new FormData();
        formData.append('image', file);

        try {
            const response = await fetch('http://localhost:5001/predict', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            loadingContainer.classList.add("hidden");
            loadingContainer.classList.remove("flex");

            if (response.ok) {
                const validClasses = ['CK12', 'CK13', 'Pilar', 'Megatop', '36', '38']; 

                if (!validClasses.includes(data.label)) {
                    swal({
                        title: "Maaf!",
                        text: "Gambar tidak dikenali sebagai salah satu varietas daun cabai yang valid. Silakan unggah gambar lain.",
                        icon: "warning",
                        button: "OK"
                    }).then(() => {
                        // Kembali ke tampilan awal
                        mainContainer.style.display = "flex";
                        resultContainer.classList.add("hidden");
                        resultContainer.classList.remove("flex");
                        previewContainer.style.display = "none";
                    });
                    return; // hentikan eksekusi
                }

                resultContainer.classList.remove("hidden");
                resultContainer.classList.add("flex");
                resultContainer.scrollIntoView({ behavior: "smooth", block: "center" });

                document.getElementById('resultImage').src = imagePreview.src;
                document.getElementById('className').textContent = data.label;
                document.getElementById('accuracy').textContent = data.confidence;

                // Isi hidden input untuk form
                document.getElementById('inputName').value = data.label;
                document.getElementById('inputAccuracy').value = parseFloat(data.confidence).toFixed(2);

                // Salin file ke input file tersembunyi
                const hiddenFileInput = document.getElementById('inputFileHidden');
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(file);
                hiddenFileInput.files = dataTransfer.files;
            } else {
                alert("Gagal memproses gambar: " + data.error);
                mainContainer.style.display = "flex";
            }
        } catch (error) {
            console.error("Error:", error);
            alert("Terjadi kesalahan saat menghubungi server.");
            loadingContainer.classList.add("hidden");
            loadingContainer.classList.remove("flex");
            mainContainer.style.display = "flex";
        }
      }

      document.getElementById('collectDataButton').addEventListener('click', () => {
          swal({
              title: "Berhasil!",
              text: "Foto telah dikumpulkan ke dataset.",
              icon: "success",
              button: "OK"
          }).then(() => {
              document.getElementById('uploadForm').submit();
          });
      });

      document.getElementById('retryButton').addEventListener('click', () => {
          // Sembunyikan hasil identifikasi
          resultContainer.classList.add("hidden");
          resultContainer.classList.remove("flex");

          // Kembalikan ke tampilan awal
          mainContainer.style.display = "flex";
          previewContainer.style.display = "none";

          window.scrollTo({ top: 0, behavior: "smooth" });
      });

      document.getElementById('uploadButton').addEventListener('click', () => {
          document.getElementById('fileInput').click();
      });
    </script>
  </main>
</x-layout>

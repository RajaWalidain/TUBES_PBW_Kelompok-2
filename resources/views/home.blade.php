<x-app-layout>
    <x-slot name='heading'>Home</x-slot>
    <section id="about" class="w-full">
        <div class="w-full text-center text-black my-5">
            <h1 class="text-5xl font-bold">Programming Tutors</h1>
            <h2 class="text-xl my-6">Tempat Belajar untuk Menjadi Software Development Expert yang Zaman Now Banget!</h2>
            <div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 shadow-md rounded-tl-lg rounded-br-lg hover:text-black"><a href="/course">Gabung Kelas Online!</a></button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 bg-white py-4 px-4 md:py-8 md:px-8 m-16 rounded-lg">
            <div class="max-w-lg shadow-lg px-4 py-4 bg-white m-3 text-center">
                <i class="fa-solid fa-user-secret text-blue-500 fa-5x mb-6"></i>
                <div class="p-4">
                    <p class="font-bold text-lg md:text-xl mb-6">Panduan Terstruktur</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">Semua materi di sini disusun dengan alur pembelajaran yang terorganisir. Setiap kursus dirancang untuk membawa Anda dari pemula hingga mahir, tanpa kebingungan. Ikuti langkah-langkahnya, dan capai tujuan belajar Anda dengan mudah.</p>
                </div>
            </div>
            <div class="max-w-lg shadow-lg px-4 py-4 bg-white m-3 text-center">
                <i class="fa-solid fa-pen-ruler text-red-500 fa-5x mb-6"></i>
                <div class="p-4">
                    <p class="font-bold text-lg md:text-xl mb-6">Materi Selalu Terbaru</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">Kami selalu menyediakan materi yang relevan dengan tren teknologi terkini. Dengan pembaruan berkala, Anda akan selalu mendapatkan pengetahuan yang paling mutakhir dan relevan di bidangnya.</p>
                </div>
            </div>
            <div class="max-w-lg shadow-lg px-4 py-4 bg-white m-3 text-center">
                <i class="fa-solid fa-database text-yellow-500 fa-5x mb-6"></i>
                <div class="p-4">
                    <p class="font-bold text-lg md:text-xl mb-6">Pengajar Profesional</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">Instruktur kami adalah ahli yang telah berpengalaman langsung di industri. Selain menguasai teori, mereka juga membagikan praktik terbaik dan wawasan berharga yang tidak bisa Anda temukan di tempat lain.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="footer" class="w-full">
        <footer class="bg-gray-800 text-gray-300 py-8">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Social Media -->
        <div>
            <h5 class="font-semibold text-lg mb-4">Social Media</h5>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-white hover:underline">Youtube</a></li>
                <li><a href="#" class="hover:text-white hover:underline">Instagram</a></li>
                <li><a href="#" class="hover:text-white hover:underline">Facebook</a></li>
                <li><a href="#" class="hover:text-white hover:underline">Telegram</a></li>
            </ul>
        </div>

            <!-- Komunitas -->
        <div>
            <h5 class="font-semibold text-lg mb-4">Komunitas</h5>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-white hover:underline">Facebook Group</a></li>
            </ul>
        </div>

            <!-- More -->
        <div>
            <h5 class="font-semibold text-lg mb-4">More</h5>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-white hover:underline">GitHub</a></li>
            </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="text-center text-sm text-gray-400 mt-8">
            Built with Kelompok 2 E-Learning.
        </div>
        </footer>
    </section>
</x-app-layout>

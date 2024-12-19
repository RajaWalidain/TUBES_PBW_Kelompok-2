<x-app-layout title="Home">
    <x-slot name='heading'>Home</x-slot>
    <section id="home" class="w-full mt-16">
        <div class="w-full text-center text-black my-5">
            <h1 class="text-5xl font-bold">Programming Tutors</h1>
            <h2 class="text-xl my-6">Tempat Belajar untuk Menjadi Software Development Expert yang Zaman Now Banget!</h2>
            <div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 shadow-md rounded-tl-lg rounded-br-lg"><a href="/course">Gabung Kelas Online!</a></button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 bg-white py-4 px-4 md:py-8 md:px-8 m-16 rounded-lg">
            <div class="max-w-lg shadow-lg px-4 py-4 bg-white m-3 text-center">
                <i class="fa-solid fa-book-open text-gray-500 fa-5x mb-6"></i>
                <div class="p-4">
                    <p class="font-bold text-lg md:text-xl mb-6">Panduan Terstruktur</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">Semua materi di sini disusun dengan alur pembelajaran yang terorganisir. Setiap kursus dirancang untuk membawa Anda dari pemula hingga mahir, tanpa kebingungan. Ikuti langkah-langkahnya, dan capai tujuan belajar Anda dengan mudah.</p>
                </div>
            </div>
            <div class="max-w-lg shadow-lg px-4 py-4 bg-white m-3 text-center">
                <i class="fa-brands fa-react text-blue-500 fa-5x mb-6"></i>
                <div class="p-4">
                    <p class="font-bold text-lg md:text-xl mb-6">Materi Selalu Terbaru</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">Kami selalu menyediakan materi yang relevan dengan tren teknologi terkini. Dengan pembaruan berkala, Anda akan selalu mendapatkan pengetahuan yang paling mutakhir dan relevan di bidangnya.</p>
                </div>
            </div>
            <div class="max-w-lg shadow-lg px-4 py-4 bg-white m-3 text-center">
                <i class="fa-solid fa-user-graduate text-red-500 fa-5x mb-6"></i>
                <div class="p-4">
                    <p class="font-bold text-lg md:text-xl mb-6">Pengajar Profesional</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">Instruktur kami adalah ahli yang telah berpengalaman langsung di industri. Selain menguasai teori, mereka juga membagikan praktik terbaik dan wawasan berharga yang tidak bisa Anda temukan di tempat lain.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container mx-auto p-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6">Bidang Keahlian yang Bisa Anda Pelajari</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="p-4 bg-white shadow-md rounded-lg text-center">
                    <p class="font-semibold text-gray-700">Web development</p>
                </div>
                <div class="p-4 bg-white shadow-md rounded-lg text-center">
                    <p class="font-semibold text-gray-700">Mobile development</p>
                </div>
                <div class="p-4 bg-white shadow-md rounded-lg text-center">
                    <p class="font-semibold text-gray-700">Software development</p>
                </div>
                <div class="p-4 bg-white shadow-md rounded-lg text-center">
                    <p class="font-semibold text-gray-700">Data Analyst</p>
                </div>
                <div class="p-4 bg-white shadow-md rounded-lg text-center">
                    <p class="font-semibold text-gray-700">Cyber Security</p>
                </div>
                <div class="p-4 bg-white shadow-md rounded-lg text-center">
                    <p class="font-semibold text-gray-700">Artificial Intelligence</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row items-center bg-gray-50 p-8 shadow-lg rounded-lg">
            <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-8">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/join-our-team-illustration-download-in-svg-png-gif-file-formats--analytics-logo-finance-corporate-business-pack-illustrations-2646151.png?f=webp"
                    alt="Laptop Illustration"
                    class="w-full h-48 object-cover rounded-lg shadow-lg">
            </div>

            <div>
                <h2 class="text-2xl font-bold mb-4">Belajar Kapan Saja, Di Mana Saja dengan Kami</h2>
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <span class="inline-block w-6 h-6 bg-green-500 text-white rounded-full flex items-center justify-center mr-4">✔️</span>
                        <span class="text-gray-700">100+ Materi Pembelajaran</span>
                    </li>
                    <li class="flex items-center">
                        <span class="inline-block w-6 h-6 bg-green-500 text-white rounded-full flex items-center justify-center mr-4">✔️</span>
                        <span class="text-gray-700">Langsung dari Para Expert</span>
                    </li>
                    <li class="flex items-center">
                        <span class="inline-block w-6 h-6 bg-green-500 text-white rounded-full flex items-center justify-center mr-4">✔️</span>
                        <span class="text-gray-700">Terpercaya + Sertifikat</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </section>

    <section id="contact">
    <div class="bg-gray-100 py-12">
        <div class="text-center max-w-4xl mx-auto mb-8">
            <h2 class="text-3xl font-bold mb-4">2000+ Murid Mendapatkan Keuntungan dari Kami</h2>
            <p class="text-gray-600 mb-6">Jadilah Murid yang Beruntung Selanjutnya, Mari Daftarkan Dirimu Segera</p>
            <a href="{{ route('register') }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded-lg shadow-md">
                Daftar Sekarang 🔔
            </a>
        </div>
    </div>

    <div class="container mx-auto p-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6">Hubungi Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                <div class="text-center">
                    <img src="https://pbs.twimg.com/media/GfKCaFPboAA6KfK?format=jpg&name=large" alt="Ale" class="w-32 h-32 rounded-full border-4 border-gray-300 shadow-lg object-cover mx-auto mb-4">
                    <p class="text-xl font-medium text-gray-700 mb-2">Malaekha Rafli lindan Iskandar</p>
                    <p class="text-gray-600 mb-4">TURUUUU</p>
                    <div class="flex justify-center gap-6">
                        <a href="https://www.instagram.com/alerafl_/" class="text-pink-500 hover:text-pink-700" target="_blank">
                            <i class="fab fa-instagram text-3xl"></i>
                        </a>
                        <a href="https://wa.me/6282125796341" class="text-green-500 hover:text-green-700" target="_blank">
                            <i class="fab fa-whatsapp text-3xl"></i>
                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <img src="https://pbs.twimg.com/media/GfKDqHXbIAASyEY?format=jpg&name=medium" alt="Daniel" class="w-32 h-32 rounded-full border-4 border-gray-300 shadow-lg object-cover mx-auto mb-4">
                    <p class="text-xl font-medium text-gray-700 mb-2">Daniel Daud Alberthus</p>
                    <p class="text-gray-600 mb-4">Frontend & Backend</p>
                    <div class="flex justify-center gap-6">
                        <a href="https://www.instagram.com/iel.yel/" class="text-pink-500 hover:text-pink-700" target="_blank">
                            <i class="fab fa-instagram text-3xl"></i>
                        </a>
                        <a href="https://wa.me/6281212770778" class="text-green-500 hover:text-green-700" target="_blank">
                            <i class="fab fa-whatsapp text-3xl"></i>
                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <img src="https://pbs.twimg.com/media/GfKDiObbsAAo3Rl?format=jpg&name=4096x4096" alt="Raja" class="w-32 h-32 rounded-full border-4 border-gray-300 shadow-lg object-cover mx-auto mb-4">
                    <p class="text-xl font-medium text-gray-700 mb-2">Raja Walidain</p>
                    <p class="text-gray-600 mb-4">AFK</p>
                    <div class="flex justify-center gap-6">
                        <a href="https://www.instagram.com/kajenavaa/" class="text-pink-500 hover:text-pink-700" target="_blank">
                            <i class="fab fa-instagram text-3xl"></i>
                        </a>
                        <a href="https://wa.me/6281383859125" class="text-green-500 hover:text-green-700" target="_blank">
                            <i class="fab fa-whatsapp text-3xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center" id="contact-action">
            <p class="text-lg text-gray-700 mb-4">Kami siap membantu Anda!</p>
            <p class="text-sm text-gray-500 mb-6">Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami melalui Media Sosial kami yang tercantum diatas.</p>
            <a href="javascript:void(0)" onclick="changeText()" class="inline-block bg-yellow-500 text-white py-2 px-6 rounded-full hover:bg-yellow-600">Hubungi Kami</a>
        </div>
    </div>

    <script>
        function changeText() {
            var contactAction = document.getElementById('contact-action');
            contactAction.innerHTML = '<p class="text-lg text-gray-700 mb-4">Anda bisa Mengunjungi Media Sosial kami dengan Mengklik Logo WA atau IG diatas</p>';
        }
    </script>
    </section>

    <section id="footer" class="w-full">
    <footer class="bg-gray-800 text-gray-300 py-8">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Social Media -->
            <div>
                <h5 class="font-semibold text-lg mb-4">Social Media</h5>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white hover:underline">Youtube</a></li>
                    <li><a href="https://www.instagram.com/iel.yel" class="hover:text-white hover:underline">Instagram</a></li>
                    <li><a href="https://www.facebook.com/nielgift/" class="hover:text-white hover:underline">Facebook</a></li>
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
                    <li><a href="https://github.com/RajaWalidain/TUBES_PBW_Kelompok-2" class="hover:text-white hover:underline" target="_blank">GitHub</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="text-center text-sm text-gray-400 mt-8">
            Built with Kelompok 2 E-Learning.
        </div>
    </footer>
</x-app-layout>

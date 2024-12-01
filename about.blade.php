<x-app-layout title="About">
    <x-slot name='heading'>About</x-slot>

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

    <div class="bg-gray-100 py-12">
        <div class="text-center max-w-4xl mx-auto mb-8">
            <h2 class="text-3xl font-bold mb-4">2000+ Murid Mendapatkan Keuntungan dari Kami</h2>
            <p class="text-gray-600 mb-6">Jadilah Murid yang Beruntung Selanjutnya, Mari Daftarkan Dirimu Segera</p>
            <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded-lg shadow-md">
                Daftar Sekarang 🔔
            </button>
        </div>
    </div>

    <section id="footer" class="w-full">
        <footer class="bg-gray-800 text-gray-300 py-8">
            <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h5 class="font-semibold text-lg mb-4">Social Media</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white hover:underline">Youtube</a></li>
                        <li><a href="#" class="hover:text-white hover:underline">Instagram</a></li>
                        <li><a href="#" class="hover:text-white hover:underline">Facebook</a></li>
                        <li><a href="#" class="hover:text-white hover:underline">Telegram</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="font-semibold text-lg mb-4">Komunitas</h5>
                    <ul class="space-y-2">
                        <li><a href="https://discord.gg/fpXPP3qq" class="hover:text-white hover:underline">Discord</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="font-semibold text-lg mb-4">More</h5>
                    <ul class="space-y-2">
                        <li><a href="https://github.com/RajaWalidain/TUBES_PBW_Kelompok-2" class="hover:text-white hover:underline">GitHub</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="text-center text-sm text-gray-400 mt-8">
                Built with Kelompok 2 E-Learning.
            </div>
        </footer>
    </section>
</x-app-layout>

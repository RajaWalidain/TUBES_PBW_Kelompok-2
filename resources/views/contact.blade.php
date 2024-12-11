<x-app-layout title="Contact">
    <x-slot name='heading'>Contact</x-slot>

    <div class="container mx-auto p-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-6">Hubungi Kami</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                <div class="text-center">
                    <img src="https://pbs.twimg.com/media/GdtM3aXXEAA1-oe?format=jpg&name=360x360" alt="Ale" class="w-32 h-32 rounded-full border-4 border-gray-300 shadow-lg object-cover mx-auto mb-4">
                    <p class="text-xl font-medium text-gray-700 mb-2">Malaekha Rafli lindan Iskandar</p>
                    <p class="text-gray-600 mb-4">ADMINISTRATOR</p>
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
                    <img src="https://pbs.twimg.com/media/GdtLDI-XYAAVPcc?format=jpg&name=medium" alt="Danil" class="w-32 h-32 rounded-full border-4 border-gray-300 shadow-lg object-cover mx-auto mb-4">
                    <p class="text-xl font-medium text-gray-700 mb-2">Daniel Daud Alberthus</p>
                    <p class="text-gray-600 mb-4">ADMINISTRATOR</p>
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
                    <img src="https://pbs.twimg.com/media/GdtL2DaXoAEEgFK?format=jpg&name=240x240" alt="Raja" class="w-32 h-32 rounded-full border-4 border-gray-300 shadow-lg object-cover mx-auto mb-4">
                    <p class="text-xl font-medium text-gray-700 mb-2">Raja Walidain</p>
                    <p class="text-gray-600 mb-4">ADMINISTRATOR</p>
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

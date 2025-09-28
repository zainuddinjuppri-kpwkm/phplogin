<!DOCTYPE html>
<html lang="ms" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSPANITA Cawangan KPWKM</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom styles for active nav link */
        .nav-link-active {
            color: #a21caf; /* fuchsia-700 */
            font-weight: 600;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header & Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="https://placehold.co/50x50/c026d3/FFFFFF?text=P" alt="Logo PUSPANITA" class="h-12 w-12 rounded-full">
                <div>
                    <h1 class="text-xl font-bold text-fuchsia-700">PUSPANITA</h1>
                    <p class="text-sm text-gray-600">Cawangan KPWKM</p>
                </div>
            </div>
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="#utama" class="text-gray-600 hover:text-fuchsia-700 transition duration-300">Utama</a>
                <a href="#mengenai-kami" class="text-gray-600 hover:text-fuchsia-700 transition duration-300">Mengenai Kami</a>
                <a href="#keahlian" class="text-gray-600 hover:text-fuchsia-700 transition duration-300">Keahlian</a>
                <a href="#aktiviti" class="text-gray-600 hover:text-fuchsia-700 transition duration-300">Aktiviti</a>
                <a href="#galeri" class="text-gray-600 hover:text-fuchsia-700 transition duration-300">Galeri</a>
                <a href="#penerbitan" class="text-gray-600 hover:text-fuchsia-700 transition duration-300">Penerbitan</a>
                <a href="#hubungi-kami" class="text-gray-600 hover:text-fuchsia-700 transition duration-300">Hubungi Kami</a>
            </nav>
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-800 focus:outline-none">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <a href="#utama" class="block py-2 px-6 text-sm hover:bg-fuchsia-50">Utama</a>
            <a href="#mengenai-kami" class="block py-2 px-6 text-sm hover:bg-fuchsia-50">Mengenai Kami</a>
            <a href="#keahlian" class="block py-2 px-6 text-sm hover:bg-fuchsia-50">Keahlian</a>
            <a href="#aktiviti" class="block py-2 px-6 text-sm hover:bg-fuchsia-50">Aktiviti</a>
            <a href="#galeri" class="block py-2 px-6 text-sm hover:bg-fuchsia-50">Galeri</a>
            <a href="#penerbitan" class="block py-2 px-6 text-sm hover:bg-fuchsia-50">Penerbitan</a>
            <a href="#hubungi-kami" class="block py-2 px-6 text-sm hover:bg-fuchsia-50">Hubungi Kami</a>
        </div>
    </header>

    <main>
        <!-- Section: Utama -->
        <section id="utama" class="pt-16">
            <!-- Hero Section -->
            <div class="bg-fuchsia-100">
                <div class="container mx-auto px-6 py-20 text-center">
                    <h2 class="text-4xl font-bold text-fuchsia-800 mb-4">Memperkasa Wanita, Memacu Negara</h2>
                    <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-8">Selamat datang ke laman rasmi PUSPANITA Cawangan Kementerian Pembangunan Wanita, Keluarga dan Masyarakat. Terokai aktiviti kami dan sertai komuniti kami hari ini.</p>
                    <a href="#keahlian" class="bg-fuchsia-700 text-white font-bold py-3 px-8 rounded-full hover:bg-fuchsia-800 transition duration-300">Sertai Kami</a>
                </div>
            </div>
            <!-- Highlights Section -->
            <div class="container mx-auto px-6 py-16">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Pengumuman Terkini</h3>
                        <div class="space-y-4">
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                                <h4 class="font-semibold text-fuchsia-800">Mesyuarat Agung Tahunan 2025</h4>
                                <p class="text-sm text-gray-600">Perhatian kepada semua ahli, Mesyuarat Agung Tahunan akan diadakan pada 15 Oktober 2025. Maklumat lanjut akan diemelkan.</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                                <h4 class="font-semibold text-fuchsia-800">Program Derma Darah</h4>
                                <p class="text-sm text-gray-600">Jom sertai kempen derma darah pada 5 November 2025 di Lobi KPWKM. Setiap titisan darah anda amat bermakna.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Kalendar Aktiviti Akan Datang</h3>
                        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                            <ul>
                                <li class="py-2 border-b"><span class="font-semibold text-fuchsia-700 w-24 inline-block">28 Sep:</span> Kelas Masakan Kuih Tradisional</li>
                                <li class="py-2 border-b"><span class="font-semibold text-fuchsia-700 w-24 inline-block">10 Okt:</span> Ceramah Kesihatan Mental</li>
                                <li class="py-2 border-b"><span class="font-semibold text-fuchsia-700 w-24 inline-block">25 Okt:</span> Lawatan Sambil Belajar ke Muzium Negara</li>
                                <li class="py-2"><span class="font-semibold text-fuchsia-700 w-24 inline-block">12 Nov:</span> Pertandingan Badminton Antara Biro</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Mengenai Kami -->
        <section id="mengenai-kami" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-10">Mengenai PUSPANITA KPWKM</h2>
                <div class="grid md:grid-cols-3 gap-8 text-center">
                    <div class="p-6">
                        <div class="bg-fuchsia-100 text-fuchsia-700 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                           <i class="fas fa-landmark fa-2x"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Sejarah</h3>
                        <p class="text-gray-600">PUSPANITA ditubuhkan untuk mengeratkan kerjasama dan perpaduan di kalangan suri dan anggota wanita perkhidmatan awam.</p>
                    </div>
                    <div class="p-6">
                        <div class="bg-fuchsia-100 text-fuchsia-700 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                           <i class="fas fa-bullseye fa-2x"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Visi & Misi</h3>
                        <p class="text-gray-600">Menjadi sebuah persatuan yang dinamik dan proaktif dalam memperjuangkan kebajikan serta pembangunan potensi ahli.</p>
                    </div>
                    <div class="p-6">
                        <div class="bg-fuchsia-100 text-fuchsia-700 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                           <i class="fas fa-sitemap fa-2x"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Carta Organisasi</h3>
                        <p class="text-gray-600">Diterajui oleh Penaung dan Pengerusi yang berdedikasi bersama barisan Ahli Jawatankuasa yang komited.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Keahlian -->
        <section id="keahlian" class="py-16">
            <div class="container mx-auto px-6">
                 <h2 class="text-3xl font-bold text-center mb-10">Sertai Keluarga PUSPANITA</h2>
                <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-10 bg-white p-8 rounded-xl shadow-lg">
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Syarat Keahlian</h3>
                        <p class="text-gray-600 mb-4">Keahlian terbuka kepada semua suri dan anggota wanita yang berkhidmat di bawah Kementerian Pembangunan Wanita, Keluarga dan Masyarakat.</p>
                        <h3 class="text-xl font-semibold mb-4">Yuran</h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-2">
                            <li>Yuran Pendaftaran: RM5.00</li>
                            <li>Yuran Tahunan: RM12.00</li>
                        </ul>
                        <a href="#" class="mt-6 inline-block text-fuchsia-700 font-semibold hover:underline">
                            <i class="fas fa-file-pdf mr-2"></i>Muat Turun Borang PDF
                        </a>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Daftar Dalam Talian</h3>
                        <form action="#" method="POST" class="space-y-4">
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Penuh</label>
                                <input type="text" id="nama" name="nama" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-fuchsia-500 focus:border-fuchsia-500">
                            </div>
                             <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Alamat E-mel</label>
                                <input type="email" id="email" name="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-fuchsia-500 focus:border-fuchsia-500">
                            </div>
                             <div>
                                <label for="telefon" class="block text-sm font-medium text-gray-700">Nombor Telefon</label>
                                <input type="tel" id="telefon" name="telefon" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-fuchsia-500 focus:border-fuchsia-500">
                            </div>
                            <button type="submit" class="w-full bg-fuchsia-700 text-white font-bold py-3 px-4 rounded-md hover:bg-fuchsia-800 transition duration-300">Hantar Pendaftaran</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Aktiviti & Program -->
        <section id="aktiviti" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-10">Aktiviti & Program</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md group">
                        <img src="https://placehold.co/600x400/f5d0fe/4a044e?text=Program+A" alt="Aktiviti 1" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-2">Program Kesedaran Kanser Payudara</h3>
                            <p class="text-gray-600 text-sm">Sesi perkongsian ilmu bersama pakar bagi meningkatkan kesedaran tentang kepentingan pemeriksaan awal.</p>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md group">
                        <img src="https://placehold.co/600x400/e879f9/4a044e?text=Program+B" alt="Aktiviti 2" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-2">Bengkel Pengurusan Kewangan</h3>
                            <p class="text-gray-600 text-sm">Membantu ahli merancang kewangan peribadi dan keluarga dengan lebih bijak dan berkesan.</p>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md group">
                        <img src="https://placehold.co/600x400/c026d3/ffffff?text=Program+C" alt="Aktiviti 3" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-2">Hari Keluarga PUSPANITA KPWKM</h3>
                            <p class="text-gray-600 text-sm">Acara tahunan yang meriah bagi mengeratkan silaturrahim antara ahli dan keluarga.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Galeri -->
        <section id="galeri" class="py-16">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-10">Galeri Kenangan</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="grid gap-4">
                        <div><img class="h-auto max-w-full rounded-lg shadow-md" src="https://placehold.co/500x300/c026d3/ffffff?text=Foto+1" alt=""></div>
                        <div><img class="h-auto max-w-full rounded-lg shadow-md" src="https://placehold.co/500x500/c026d3/ffffff?text=Foto+2" alt=""></div>
                    </div>
                    <div class="grid gap-4">
                        <div><img class="h-auto max-w-full rounded-lg shadow-md" src="https://placehold.co/500x500/a21caf/ffffff?text=Foto+3" alt=""></div>
                        <div><img class="h-auto max-w-full rounded-lg shadow-md" src="https://placehold.co/500x300/a21caf/ffffff?text=Foto+4" alt=""></div>
                    </div>
                    <div class="grid gap-4">
                        <div><img class="h-auto max-w-full rounded-lg shadow-md" src="https://placehold.co/500x300/86198f/ffffff?text=Foto+5" alt=""></div>
                        <div><img class="h-auto max-w-full rounded-lg shadow-md" src="https://placehold.co/500x500/86198f/ffffff?text=Foto+6" alt=""></div>
                    </div>
                    <div class="grid gap-4">
                        <div><img class="h-auto max-w-full rounded-lg shadow-md" src="https://placehold.co/500x500/701a75/ffffff?text=Foto+7" alt=""></div>
                        <div><img class="h-auto max-w-full rounded-lg shadow-md" src="https://placehold.co/500x300/701a75/ffffff?text=Foto+8" alt=""></div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section: Penerbitan -->
        <section id="penerbitan" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-10">Penerbitan & Muat Turun</h2>
                <div class="max-w-3xl mx-auto space-y-4">
                    <a href="#" class="flex justify-between items-center bg-gray-100 p-4 rounded-lg hover:bg-fuchsia-100 transition duration-300">
                        <div>
                            <h3 class="font-semibold text-gray-800">Buletin PUSPANITA Edisi Jan-Mac 2025</h3>
                            <p class="text-sm text-gray-600">Fail PDF, 5.2 MB</p>
                        </div>
                        <i class="fas fa-download text-fuchsia-700"></i>
                    </a>
                     <a href="#" class="flex justify-between items-center bg-gray-100 p-4 rounded-lg hover:bg-fuchsia-100 transition duration-300">
                        <div>
                            <h3 class="font-semibold text-gray-800">Laporan Tahunan PUSPANITA KPWKM 2024</h3>
                            <p class="text-sm text-gray-600">Fail PDF, 10.8 MB</p>
                        </div>
                        <i class="fas fa-download text-fuchsia-700"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Section: Hubungi Kami -->
        <section id="hubungi-kami" class="py-16">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-10">Hubungi Kami</h2>
                <div class="grid md:grid-cols-2 gap-10">
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Maklumat Perhubungan</h3>
                        <p class="text-gray-600 mb-2"><i class="fas fa-map-marker-alt w-6 text-fuchsia-700"></i> Aras 30, No. 55, Persiaran Perdana, Presint 4, 62100 Putrajaya.</p>
                        <p class="text-gray-600 mb-2"><i class="fas fa-phone w-6 text-fuchsia-700"></i> 03-8000 8000</p>
                        <p class="text-gray-600 mb-4"><i class="fas fa-envelope w-6 text-fuchsia-700"></i> puspanita@kpwkm.gov.my</p>
                        
                        <div class="w-full h-64 rounded-lg overflow-hidden shadow-md">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.62919011408!2d101.68858887496963!3d2.921226197022204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb6141c2b01cb%3A0x43c275435e80818a!2sKementerian%20Pembangunan%20Wanita%2C%20Keluarga%20dan%20Masyarakat!5e0!3m2!1sen!2smy!4v1701150346123!5m2!1sen!2smy"
                                width="100%"
                                height="100%"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Hantar Pertanyaan</h3>
                        <form action="#" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow-md">
                            <div>
                                <label for="contact-name" class="block text-sm font-medium text-gray-700">Nama Anda</label>
                                <input type="text" id="contact-name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm py-2 px-3">
                            </div>
                            <div>
                                <label for="contact-email" class="block text-sm font-medium text-gray-700">E-mel</label>
                                <input type="email" id="contact-email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm py-2 px-3">
                            </div>
                            <div>
                                <label for="contact-message" class="block text-sm font-medium text-gray-700">Mesej Anda</label>
                                <textarea id="contact-message" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm py-2 px-3"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-fuchsia-700 text-white font-bold py-3 px-4 rounded-md hover:bg-fuchsia-800 transition duration-300">Hantar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="container mx-auto px-6 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left">
                <p class="text-sm">&copy; 2025 Hak Cipta Terpelihara, PUSPANITA Cawangan KPWKM.</p>
                <div class="flex mt-4 md:mt-0 space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when a link is clicked
        const mobileNavLinks = mobileMenu.querySelectorAll('a');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Active nav link on scroll
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('header nav a');
        
        window.onscroll = () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if(pageYOffset >= sectionTop - 100){
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('nav-link-active');
                if(link.getAttribute('href').includes(current)){
                    link.classList.add('nav-link-active');
                }
            })
        };
    </script>
</body>
</html>


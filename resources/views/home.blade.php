<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>MyPortofolio</title>
</head>
<body>
  <div class="body w-full   bg-[#080808]">
    
  <header class="bg-[#1B1B1B]   w-full h-20 flex items-center justify-between px-10 fixed">
        <!-- Menu -->
         <div class="  w-4/5 mx-auto">
           <nav class="flex space-x-4 text-gray-400 text-sm md:text-base ">
                <a href="#home" class="hover:text-white">Home</a>
                <a href="#aboutme" class="hover:text-white">About Me</a>
                <a href="#skills" class="hover:text-white">Skills</a>
                <a href="#experience" class="hover:text-white">Organizational & Committee Experience</a>
                <a href="#recentwork" class="hover:text-white">Recent work</a>
                <a href="#contact" class="hover:text-white">Contact</a>
            </nav>


         </div>
        

        
        <div class="flex space-x-4">
            <a href="https://www.linkedin.com/in/reymontha-tarigan-6a053228b" class="text-gray-400 hover:text-white">
                <i class="fab fa-linkedin">Linkedin</i> 
            </a>
            
        </div>
    </header>



     <!-- Main Content -->
     <div id="home" class="container  w-4/5 mx-auto  flex items-center justify-center min-h-screen px-6 pt-24">
        <div class="grid grid-cols-1 md:grid-cols-2  items-center w-full">
            <!-- Text Content -->
            <div class="text-left"> 
                <h2 class="text-white mt-4">Halo semua, saya</h2>
                <h1 class="text-4xl text-white font-bold">Reymontha Tarigan</h1>
                <p class="text-gray-400 mt-4 ">
                    Mahasiswa S1 Teknik Informatika Unpad
                </p>
                <a href="#aboutme" class="mt-6 px-6 py-3 bg-green-600 text-black font-semibold rounded-md shadow-lg hover:bg-green-700 inline-block mb-5">
                    Let's get started &gt;
                </a>

            </div>

            <!-- Profile Image -->
            <div class="flex justify-center">
            <img src="img/profile.jpg" alt="Profile Image" 
     class="w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 lg:w-64 lg:h-64 rounded-full bg-white border-4 border-gray-700 shadow-lg object-cover">

            </div>

        </div>

        
    </div>

    <!-- Introduction Section -->
<div id="aboutme" class="container w-4/5 mx-auto text-center text-white py-16 pt-24">
    <h2 class="text-3xl font-bold">Introduction</h2>
    <p class="text-gray-400 mt-4">
        Saya seorang mahasiswa S1 Teknik Informatika di Universitas Padjadjaran yang memiliki minat besar dalam pengembangan web dan aplikasi mobile. 
        Saya berpengalaman dalam menggunakan pengembangan website dengan Laravel, Codeigniter,  Tailwind CSS, dan pengembangan aplikasi Android menggunakan Kotlin.
    </p>
    <p class="text-gray-400 mt-2">
    Saya senang mengeksplorasi teknologi baru dan terus mengasah keterampilan dalam membangun aplikasi yang efisien, fungsional, dan user-friendly. Selain itu, saya memiliki ketertarikan pada arsitektur perangkat lunak, optimalisasi performa aplikasi, dan penerapan best practices dalam pengembangan perangkat lunak.
    Saya terbuka untuk kesempatan kolaborasi, eksplorasi teknologi baru, serta pengalaman yang dapat memperluas wawasan dan keahlian saya di dunia teknologi.
    </p>
</div>
<!-- Skills Section -->
<div id="skills" class="container w-4/5 mx-auto text-center text-white py-16 pt-24">
    <h2 class="text-3xl font-bold">Skills</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
       
        <div class="flex items-center space-x-4">
            <img src="img/symbols/js.png" alt="JavaScript" class="w-16 h-16 rounded-full">
            <span class="text-lg font-semibold">JavaScript</span>
        </div>
        
        <div class="flex items-center space-x-4">
            <img src="img/symbols/cplus.png" alt="C++" class="w-16 h-16 rounded-full">
            <span class="text-lg font-semibold">C++</span>
        </div>

       
        <div class="flex items-center space-x-4">
            <img src="img/symbols/php.png" alt="PHP" class="w-16 h-16 rounded-full">
            <span class="text-lg font-semibold">PHP</span>
        </div>

        <div class="flex items-center space-x-4">
            <img src="img/symbols/java.png" alt="Java" class="w-16 h-16 rounded-full">
            <span class="text-lg font-semibold">Java</span>
        </div>

        
        <div class="flex items-center space-x-4">
            <img src="img/symbols/python.png" alt="Python" class="w-16 h-16 rounded-full">
            <span class="text-lg font-semibold">Python</span>
        </div>

        <div class="flex items-center space-x-4">
            <img src="img/symbols/tailwind.jpeg" alt="Tailwind" class="w-16 h-16 rounded-full">
            <span class="text-lg font-semibold">Tailwind</span>
        </div>

       
        <div class="flex items-center space-x-4">
            <img src="img/symbols/ci.png" alt="CodeIgniter" class="w-16 h-16 rounded-full">
            <span class="text-lg font-semibold">CodeIgniter</span>
        </div>

        <div class="flex items-center space-x-4">
            <img src="img/symbols/laravel.png" alt="Laravel" class="w-16 h-16 rounded-full">
            <span class="text-lg font-semibold">Laravel</span>
        </div>
    </div>
</div>

<!-- Organizational & Committee Experience -->
<div id="experience" class="container w-4/5 mx-auto text-center text-white py-16 pt-24">
    <h2 class="text-3xl font-bold">Organizational & Committee Experience</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
       
        <div class="bg-gray-900 p-4 rounded-lg shadow-lg">
            <h3 class="font-bold text-lg">Staff PTI Himatif Unpad</h3>
            <p class="text-gray-400 mt-2"><strong>2022 - 2023</strong></p>
            <p class="text-gray-400 mt-2 text-center">
            Penanggungjawab Produktif dimana bertugas membentuk tim developer dari warga TI Unpad untuk mengerjakan berbagai proyek IT yang diberikan klien baik dari luar atau dalam Unpad
            </p>
        </div>

     
        <div class="bg-gray-900 p-4 rounded-lg shadow-lg">
            <h3 class="font-bold text-lg">Anggota DPA Himatif Unpad</h3>
            <p class="text-gray-400 mt-2"><strong>2024</strong></p>
            <p class="text-gray-400 mt-2 text-center">
            Bergabung dalam Komisi 4 yang bertugas dalam menampungaspirasi warga TI Unpad
            </p>
        </div>

      
        <div class="bg-gray-900 p-4 rounded-lg shadow-lg">
            <h3 class="font-bold text-lg">Staff Panitia Peluit Himpatif Unpad</h3>
            <p class="text-gray-400 mt-2"><strong>2022</strong></p>
            <p class="text-gray-400 mt-2 text-center">
                Penanggungjawab bagian logistik
            </p>
        </div>

      
        <div class="bg-gray-900 p-4 rounded-lg shadow-lg">
            <h3 class="font-bold text-lg">Staf IT Competition di IFEST Unpad</h3>
            <p class="text-gray-400 mt-2"><strong>2023</strong></p>
            <p class="text-gray-400 mt-2 text-center">
                Penanggungjawab bagian DAC (Data Analyst Competition)
            </p>
        </div>
    </div>
</div>





 <!-- Recent Work Section -->
 <div id="recentwork" class="container w-4/5 mx-auto text-center text-white py-16 pt-24">
    <h2 class="text-3xl font-bold">Recent Work</h2>
    <p class="text-gray-400 mt-4">
        Berikut adalah beberapa proyek yang telah saya kerjakan selama menjadi mahasiswa.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
       
        <div class="bg-gray-900 p-4 rounded-lg shadow-lg">
            <img src="img/project/fnc.png" alt="Fix and Create" class="w-full h-64 object-cover rounded-lg">
            <h3 class="font-bold text-lg mt-4">Fix and Create</h3>
            <p class="text-gray-400 mt-2 text-justify">
                Fix and Create adalah platform yang dirancang untuk membantu mahasiswa Teknik Informatika mengembangkan keterampilan mereka melalui proyek nyata dalam pembuatan aplikasi dan website. Platform ini memungkinkan pengguna untuk mengajukan permintaan pengembangan, berdiskusi dengan tim developer, serta mendapatkan solusi sesuai kebutuhan mereka.
                <br><br>
                Dalam proyek ini, saya berperan sebagai Front-End Developer menggunakan Laravel dan Tailwind CSS.
            </p>
        </div>

        
        <div class="bg-gray-900 p-4 rounded-lg shadow-lg">
        <img src="img/project/bioskop.png" alt="Pemesanan Tiket Bioskop" class="w-full h-64 object-contain rounded-lg bg-white">

            <h3 class="font-bold text-lg mt-4">Pemesanan Tiket Bioskop</h3>
            <p class="text-gray-400 mt-2 text-justify">
                Website ini merupakan simulasi pemesanan tiket bioskop yang dikembangkan menggunakan CodeIgniter 4 (CI4). Proyek ini mencakup fitur autentikasi pengguna, manajemen database (CRUD), serta simulasi pembayaran untuk pengalaman pengguna yang lebih realistis.
                <br><br>
                Dalam project ini saya berperan sebagai FullStack Developer.
            </p>
        </div>
    </div>
</div>



<!-- Contact Me Section -->
<div id="contact" class="container w-4/5 mx-auto text-center py-16 pt-24">
    <h2 class="text-3xl font-bold text-white">Contact Me</h2>
    <p class="text-gray-500 mt-4">
        Feel free to reach out through any of the platforms below.
    </p>

    <div class="flex justify-center space-x-6 mt-6">
        
        <a href="https://www.linkedin.com/in/reymontha-tarigan-6a053228b" target="_blank" class="bg-blue-600 text-white p-4 rounded-full hover:bg-blue-700 transition">
            <i class="fab fa-linkedin text-2xl"></i>
        </a>

        
        <a href="https://www.instagram.com/reymonthatarigann" target="_blank" class="bg-pink-500 text-white p-4 rounded-full hover:bg-pink-600 transition">
            <i class="fab fa-instagram text-2xl"></i>
        </a>

     
        <a href="https://github.com/ReymonthaTarigan" target="_blank" class="bg-gray-800 text-white p-4 rounded-full hover:bg-gray-900 transition">
            <i class="fab fa-github text-2xl"></i>
        </a>

       
        <a href="mailto:reymonthatarigan13@gmail.com" class="bg-red-600 text-white p-4 rounded-full hover:bg-red-700 transition">
            <i class="fas fa-envelope text-2xl"></i>
        </a>
    </div>
</div>



</div>





  </div>
</body>
</html>
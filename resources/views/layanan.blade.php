<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layanan</title>
    <link href="{{ asset('assets/users/css/output.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <div
        class="flex justify-center items-center fixed top-10 left-1/2 transform -translate-x-1/2 max-w-7xl w-full z-50 bg-white shadow-lg rounded-box">
        <nav class="navbar container mx-auto px-4 flex items-center justify-between">
            <!-- Navbar Start -->
            <div class="navbar-start flex items-center gap-4">
                <img src="{{ asset('assets/users/img/SIJASA 1.png') }}" alt="logo" class="h-10 w-auto" />
                <div class="dropdown lg:hidden">
                    <button tabindex="0" class="btn btn-ghost p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </button>
                    <ul tabindex="0"
                        class="dropdown-content menu menu-sm mt-3 p-2 shadow bg-white rounded-box w-48 text-teal-600">
                        <li><a>Home</a></li>
                        <li><a>Layanan</a></li>
                        <li><a>Kategori</a></li>
                    </ul>
                </div>
            </div>

            <!-- Navbar Center -->
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal gap-6 text-teal-600 font-semibold">
                    <li><a href="/" class="hover:underline">Home</a></li>
                    <li>
                        <a href="/layanan" class="hover:underline">Layanan</a>
                    </li>
                    <li><a href="/kategori" class="hover:underline">Kategori</a></li>
                </ul>
            </div>

            <!-- Navbar End -->
            <div class="navbar-end flex items-center gap-4">
                @if (Auth::check())
                    @if (Auth::user()->role == 'user')
                        <button class="btn btn-accent rounded-full text-white"> <a href="/profile ">Profile</a>
                        </button>
                    @endif
                @else
                    <button class="btn btn-accent rounded-full text-white"> <a href="/login ">Masuk</a> </button>
                    <button class="btn btn-outline btn-accent rounded-full"> <a href="/register">Daftar</a> </button>
                @endif
            </div>
        </nav>
    </div>

    <!-- Main -->
    <section class="relative min-h-screen max-w-5xl mx-auto flex flex-col space-y-6">
        <!-- Card 1 -->
        @foreach ($data as $item)
            <a href="/layanan-detail/{{ $item->id }}">
                <div class="flex items-center bg-teal-600 shadow-lg rounded-lg overflow-hidden h-48">
                    <div class="relative w-1/2 h-full">
                        <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="Cleaning Service"
                            class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-opacity-75 bg-black text-white py-1 px-3 text-sm rounded-tr-lg">
                            {{ $item->service }}
                        </div>
                    </div>
                    <div class="p-4 w-1/2 text-white">
                        <h2 class="text-lg font-semibold">Cleaning Service Home :</h2>
                        <p class="mt-1 text-sm">
                            {{ $item->description }}
                        </p>
                    </div>
                </div>
            </a>
        @endforeach
    </section>


    <!-- Footer -->
    <section class="relative min-h-screen max-w-7xl mx-auto">
        <!-- Background hero -->
        <img src="{{ asset('assets/users/img/INILAH JASA PEMETAAN DAN JASA PEMETAAN GEOLOGI TERPERCAYA 1.png') }}"
            alt="Background Hero" class="absolute inset-0 w-full h-full object-cover z-0" />

        <div class="relative flex flex-col justify-center min-h-screen z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Logo Section -->
                <img src="{{ asset('assets/users/img/SIJASA 1.png') }}" alt="Logo SIJASA" class="w-full h-auto" />

                <!-- Info Section -->
                <div class="bg-gray-300 bg-opacity-50 p-8 rounded-md">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Tentang -->
                        <div class="space-y-4">
                            <h1 class="text-lg font-bold text-white">Tentang</h1>
                            <p class="text-white">
                                Platform yang mempermudah aktivitas sehari-hari dengan
                                mempertemukan pengguna dan penyedia jasa secara aman, efisien,
                                dan terpercaya.
                            </p>
                            <img src="{{ asset('assets/users/img/google-maps-ktt-asean_169 1.png') }}" alt="Lokasi"
                                class="w-52" />
                        </div>

                        <!-- Bantuan -->
                        <div class="space-y-4">
                            <h1 class="text-lg font-bold text-white">Bantuan</h1>
                            <ul class="text-white space-y-2">
                                <li>Syarat & Ketentuan</li>
                                <li>FAQ</li>
                                <li>Keamanan</li>
                                <li>Privasi</li>
                            </ul>
                            <h1 class="text-lg font-bold text-white">Lokasi</h1>
                            <p class="text-white">
                                Jl. Merdeka Gedung Bidakara Lt. 2 Jakarta Utara, DKI Jakarta
                                16756
                            </p>
                        </div>

                        <!-- Narahubung -->
                        <div class="space-y-4">
                            <h1 class="text-lg font-bold text-white">Narahubung</h1>
                            <div class="space-y-2">
                                <div class="">
                                    <div class="flex items-center space-x-2 text-white">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.2559 12.253C17.1599 11.586 16.6449 11.066 15.9819 10.911C13.4049 10.307 12.7589 8.823 12.6499 7.177C12.1929 7.092 11.3799 7 9.99991 7C8.61991 7 7.80691 7.092 7.34991 7.177C7.24091 8.823 6.59491 10.307 4.01791 10.911C3.35491 11.067 2.83991 11.586 2.74391 12.253L2.24691 15.695C2.07191 16.907 2.96191 18 4.19991 18H15.7999C17.0369 18 17.9279 16.907 17.7529 15.695L17.2559 12.253ZM9.99991 15.492C8.60491 15.492 7.47391 14.372 7.47391 12.992C7.47391 11.612 8.60491 10.492 9.99991 10.492C11.3949 10.492 12.5259 11.612 12.5259 12.992C12.5259 14.372 11.3939 15.492 9.99991 15.492ZM19.9499 6C19.9259 4.5 16.1079 2.001 9.99991 2C3.89091 2.001 0.0729066 4.5 0.0499066 6C0.0269066 7.5 0.0709066 9.452 2.58491 9.127C5.52591 8.746 5.34491 7.719 5.34491 6.251C5.34491 5.227 7.73691 4.98 9.99991 4.98C12.2629 4.98 14.6539 5.227 14.6549 6.251C14.6549 7.719 14.4739 8.746 17.4149 9.127C19.9279 9.452 19.9729 7.5 19.9499 6Z"
                                                fill="white" />
                                        </svg>
                                        <span>Telepon</span>
                                    </div>
                                    <span>+62 8778-8976-8765</span>
                                </div>

                                <div class="">
                                    <div class="flex items-center space-x-2 text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.001 2C17.524 2 22.001 6.477 22.001 12C22.001 17.523 17.524 22 12.001 22C10.2337 22.003 8.49757 21.5353 6.97099 20.645L2.00499 22L3.35699 17.032C2.46595 15.5049 1.99789 13.768 2.00099 12C2.00099 6.477 6.47799 2 12.001 2ZM8.59299 7.3L8.39299 7.308C8.26368 7.31691 8.13734 7.35087 8.02099 7.408C7.91257 7.46951 7.81355 7.5463 7.72699 7.636C7.60699 7.749 7.53899 7.847 7.46599 7.942C7.09611 8.4229 6.89696 9.01331 6.89999 9.62C6.90199 10.11 7.02999 10.587 7.22999 11.033C7.63899 11.935 8.31199 12.89 9.19999 13.775C9.41399 13.988 9.62399 14.202 9.84999 14.401C10.9534 15.3724 12.2683 16.073 13.69 16.447L14.258 16.534C14.443 16.544 14.628 16.53 14.814 16.521C15.1052 16.5056 15.3895 16.4268 15.647 16.29C15.7778 16.2223 15.9056 16.1489 16.03 16.07C16.03 16.07 16.0723 16.0413 16.155 15.98C16.29 15.88 16.373 15.809 16.485 15.692C16.569 15.6053 16.639 15.5047 16.695 15.39C16.773 15.227 16.851 14.916 16.883 14.657C16.907 14.459 16.9 14.351 16.897 14.284C16.893 14.177 16.804 14.066 16.707 14.019L16.125 13.758C16.125 13.758 15.255 13.379 14.723 13.137C14.6673 13.1128 14.6077 13.0989 14.547 13.096C14.4786 13.0888 14.4094 13.0965 14.3442 13.1184C14.279 13.1403 14.2192 13.176 14.169 13.223C14.164 13.221 14.097 13.278 13.374 14.154C13.3325 14.2098 13.2753 14.2519 13.2098 14.2751C13.1443 14.2982 13.0733 14.3013 13.006 14.284C12.9408 14.2666 12.877 14.2446 12.815 14.218C12.691 14.166 12.648 14.146 12.563 14.11C11.9889 13.8599 11.4574 13.5215 10.988 13.107C10.862 12.997 10.745 12.877 10.625 12.761C10.2316 12.3842 9.88874 11.958 9.60499 11.493L9.54599 11.398C9.50425 11.3338 9.47003 11.265 9.44399 11.193C9.40599 11.046 9.50499 10.928 9.50499 10.928C9.50499 10.928 9.74799 10.662 9.86099 10.518C9.97099 10.378 10.064 10.242 10.124 10.145C10.242 9.955 10.279 9.76 10.217 9.609C9.93699 8.925 9.64766 8.24467 9.34899 7.568C9.28999 7.434 9.11499 7.338 8.95599 7.319C8.90199 7.31233 8.84799 7.307 8.79399 7.303C8.65972 7.2953 8.52508 7.29664 8.39099 7.307L8.59299 7.3Z"
                                                fill="white" />
                                        </svg>

                                        <span>WhatsApp Business</span>
                                    </div>
                                    <span> +62 8778-8976-8765</span>
                                </div>
                                <div class="flex items-center space-x-2 text-white">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.0276C22 4.94035 17.072 0 11 0C4.928 0 0 4.94035..."
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="flex items-center space-x-2 text-white">
                                    <!-- facebook -->
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22 11.0276C22 4.94035 17.072 0 11 0C4.928 0 0 4.94035 0 11.0276C0 16.3649 3.784 20.809 8.8 21.8346V14.3358H6.6V11.0276H8.8V8.27068C8.8 6.14236 10.527 4.41103 12.65 4.41103H15.4V7.7193H13.2C12.595 7.7193 12.1 8.21554 12.1 8.82205V11.0276H15.4V14.3358H12.1V22C17.655 21.4486 22 16.7509 22 11.0276Z"
                                            fill="white" />
                                    </svg>

                                    <!-- instagram -->
                                    <svg width="21" height="22" viewBox="0 0 21 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.5794 0C12.7606 0.00329992 13.3601 0.00989976 13.8777 0.0252994L14.0814 0.0329992C14.3166 0.041799 14.5487 0.0527987 14.829 0.0659983C15.9461 0.120997 16.7084 0.305793 17.3772 0.577486C18.0702 0.856879 18.654 1.23527 19.2377 1.84576C19.7718 2.39545 20.185 3.06065 20.4483 3.79491C20.7077 4.49559 20.884 5.29417 20.9365 6.46564C20.9491 6.75824 20.9596 7.00133 20.968 7.24882L20.9743 7.46222C20.9901 8.00341 20.9964 8.63149 20.9985 9.86896L20.9995 10.6895V12.1305C21.0021 12.9328 20.994 13.7352 20.9754 14.5372L20.9691 14.7506C20.9607 14.9981 20.9502 15.2412 20.9376 15.5338C20.8851 16.7053 20.7066 17.5028 20.4483 18.2046C20.185 18.9388 19.7718 19.604 19.2377 20.1537C18.713 20.7133 18.0781 21.1461 17.3772 21.422C16.7084 21.6937 15.9461 21.8785 14.829 21.9335L14.0814 21.9665L13.8777 21.9731C13.3601 21.9885 12.7606 21.9962 11.5794 21.9984L10.7962 21.9995H9.42177C8.65558 22.0023 7.8894 21.9939 7.12344 21.9742L6.91975 21.9676C6.6705 21.9577 6.42131 21.9463 6.17219 21.9335C5.05504 21.8785 4.29278 21.6937 3.62291 21.422C2.92242 21.1459 2.28785 20.7131 1.76346 20.1537C1.22898 19.6041 0.81547 18.9389 0.55182 18.2046C0.292483 17.5039 0.116091 16.7053 0.063594 15.5338L0.0320956 14.7506L0.026846 14.5372C0.0074913 13.7352 -0.0012592 12.9328 0.000597207 12.1305V9.86896C-0.00230894 9.06664 0.00539149 8.26432 0.0236961 7.46222L0.0310457 7.24882C0.0394453 7.00133 0.0499447 6.75824 0.0625441 6.46564C0.115041 5.29417 0.291432 4.49669 0.550769 3.79491C0.815035 3.06034 1.22927 2.39512 1.76451 1.84576C2.28859 1.28647 2.9228 0.85366 3.62291 0.577486C4.29278 0.305793 5.05399 0.120997 6.17219 0.0659983C6.45147 0.0527987 6.68456 0.041799 6.91975 0.0329992L7.12344 0.0263993C7.88905 0.00685581 8.65489 -0.00157813 9.42072 0.00109989L11.5794 0ZM10.5001 5.49987C9.10775 5.49987 7.77246 6.07932 6.78794 7.11074C5.80343 8.14217 5.25033 9.54108 5.25033 10.9997C5.25033 12.4584 5.80343 13.8573 6.78794 14.8887C7.77246 15.9202 9.10775 16.4996 10.5001 16.4996C11.8924 16.4996 13.2277 15.9202 14.2122 14.8887C15.1967 13.8573 15.7498 12.4584 15.7498 10.9997C15.7498 9.54108 15.1967 8.14217 14.2122 7.11074C13.2277 6.07932 11.8924 5.49987 10.5001 5.49987ZM10.5001 7.69981C10.9137 7.69974 11.3233 7.78502 11.7055 7.95079C12.0877 8.11656 12.435 8.35957 12.7275 8.66595C13.02 8.97232 13.2521 9.33606 13.4105 9.7364C13.5688 10.1367 13.6504 10.5658 13.6504 10.9992C13.6505 11.4325 13.5691 11.8617 13.4109 12.2621C13.2526 12.6624 13.0207 13.0263 12.7282 13.3327C12.4358 13.6392 12.0886 13.8823 11.7065 14.0483C11.3243 14.2142 10.9148 14.2996 10.5011 14.2997C9.66573 14.2997 8.86455 13.952 8.27384 13.3331C7.68313 12.7143 7.35128 11.8749 7.35128 10.9997C7.35128 10.1245 7.68313 9.28519 8.27384 8.66634C8.86455 8.04748 9.66573 7.69981 10.5011 7.69981M16.0133 3.84991C15.6653 3.84991 15.3314 3.99477 15.0853 4.25262C14.8392 4.51048 14.7009 4.86021 14.7009 5.22487C14.7009 5.58954 14.8392 5.93927 15.0853 6.19712C15.3314 6.45498 15.6653 6.59984 16.0133 6.59984C16.3614 6.59984 16.6952 6.45498 16.9414 6.19712C17.1875 5.93927 17.3258 5.58954 17.3258 5.22487C17.3258 4.86021 17.1875 4.51048 16.9414 4.25262C16.6952 3.99477 16.3614 3.84991 16.0133 3.84991Z"
                                            fill="white" />
                                    </svg>

                                    <!-- X -->
                                    <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_546_1482)">
                                            <mask id="mask0_546_1482" style="mask-type: luminance"
                                                maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="21">
                                                <path d="M0 0H22V21H0V0Z" fill="white" />
                                            </mask>
                                            <g mask="url(#mask0_546_1482)">
                                                <path
                                                    d="M17.325 0.984375H20.6989L13.3289 9.04537L22 20.0164H15.2114L9.89057 13.3639L3.80914 20.0164H0.432143L8.31443 11.3914L0 0.985875H6.96143L11.7637 7.06537L17.325 0.984375ZM16.1386 18.0844H18.0086L5.94 2.81587H3.93486L16.1386 18.0844Z"
                                                    fill="white" />
                                            </g>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_546_1482">
                                                <rect width="22" height="21" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

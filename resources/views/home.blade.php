<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyPortfolio</title>
    <link href="{{ asset('dist/output.css') }}" rel="stylesheet">
  </head>
  <body>
    {{-- Header Section Start --}}
    <header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="#home" class="font-bold text-lg text-primary block py-6">
              yovirevikasari
            </a>
          </div>

          <div class="flex items-center px-4">
            <button id="menu" name="menu" type="button" class="block absolute right-4 lg:hidden">
              <span class="menu-line transition duration-300 ease-in-out origin-top-left"></span>
              <span class="menu-line transition duration-300 ease-in-out"></span>
              <span class="menu-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>

            <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
              <ul class="block lg:flex">
                <li class="group">
                  <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Home</a>
                </li>
                <li class="group">
                  <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">About Me</a>
                </li>
                <li class="group">
                  <a href="#portfolio" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">My Portfolio</a>
                </li>
                <li class="group">
                  <a href="#clients" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Clients</a>
                </li>
                <li class="group">
                  <a href="#blog" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Blog</a>
                </li>
                <li class="group">
                  <a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        
      </div>

    </header>
    {{-- Header Section End --}}
    {{-- Hero Section Start --}}
    <section id="home" class="pt-36">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-semibold text text-primary md:text-xl ">Hello! <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Welcome!</span></h1>
            <h2 class="font-medium text-secondary text-lg mb-5">Web Developer | Data Scientist | Embedded Systems Engineer</h2>
            <p class="font-medium text-slate-400 mb-10 leading-relaxed">ini bio</p>

            <a href="#" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Contact Me</a>
          </div>

          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:mt-0 lg:right-0">
              <img src="{{ asset('dist/img/profile.png') }}" alt="Yovi Revikasari" width="400" height="400" class="max-w-full mx-auto" />
              <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                  <path fill="#14B8A6" d="M44.8,-20.3C58.3,-2.4,69.8,22.3,62,40.9C54.2,59.6,27.1,72.3,-0.3,72.5C-27.7,72.6,-55.4,60.3,-60.7,43.1C-66.1,25.8,-49.1,3.7,-35.2,-14.5C-21.4,-32.6,-10.7,-46.7,2.5,-48.1C15.6,-49.6,31.2,-38.3,44.8,-20.3Z" transform="translate(100 100) scale(1)" />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Hero Section End --}}

    {{-- About Section Start --}}
    <section id="about" class="pt-36 pb-32">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-10 lg:w-1/2">
            <h4 class="font-bold uppercase text-primary text-lg mb-3">About Me</h4>
            <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">Judul About</h2>
            <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi placeat quia, similique dicta veritatis commodi error.</p>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Link Sosmed</h3>
            <p class="font-medium text-base text-secondary mb-6 lg:text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam porro tenetur enim aliquid nobis laudantium ipsa sint vero.</p>
            <div class="flex items-center">
              {{-- Linkedin --}}
              <a href="#" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-500 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
              </a>
              {{-- Gmail --}}
              <a href="#" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-500 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Gmail</title><path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/></svg>
              </a>
              {{-- Github --}}
              <a href="#" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-500 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img"  width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
              </a>
              {{-- Instagram --}}
              <a href="#" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-500 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
              </a>
            </div>
          </div>
        </div>
      </div>

    </section>
    {{-- About Section End --}}

    {{-- Portfolio Section Start --}}
    <section id="portfolio" class="pt-36 pb-16 bg-slate-100">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2">Portfolio</h4>
            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Project Terbaru</h2>
            <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium delectus accusantium, laboriosam dolor esse cupiditate.</p>
          </div>
        </div>
        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img src="" alt="Landing Page" width="full">
              <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Yovi Revikasari</h3>
              <p class="font-medium text-base text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque repellat, nostrum soluta et non eligendi ut!</p>
            </div>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img src="" alt="Landing Page" width="full">
              <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Yovi Revikasari</h3>
              <p class="font-medium text-base text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque repellat, nostrum soluta et non eligendi ut!</p>
            </div>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img src="" alt="Landing Page" width="full">
              <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Yovi Revikasari</h3>
              <p class="font-medium text-base text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque repellat, nostrum soluta et non eligendi ut!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Portfolio Section End --}}

    {{-- Clients Section Start --}}
    <section id="clients" class="pt-36 pb-32 bg-slate-800">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto text-center mb-16">
              <h4 class="font-semibold text-lg text-primary mb-2">Clients</h4>
              <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Yang Pernah Bekerjasama</h2>
              <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium delectus accusantium, laboriosam dolor esse cupiditate.</p>
            </div>
        </div>
      </div>
      
    </section>
    {{-- Clients Section End --}}

    {{-- Blog Section Start --}}
    <section id="blog" class="pt-36 pb-32 bg-slate-100">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2">Blog</h4>
            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Tulisan Terkini</h2>
            <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium delectus accusantium, laboriosam dolor esse cupiditate.</p>
          </div>
        </div>

        <div class="flex flex-wrap">
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://source.unsplash.com/360x200?programming" alt="Programming" class="w-full" />
              <div class="py-8 px-6">
                <h3>
                  <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tips Belajar Programming</a>
                </h3>
                <p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, adipisci.</p>
                <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://source.unsplash.com/360x200?programming" alt="Programming" class="w-full" />
              <div class="py-8 px-6">
                <h3>
                  <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tips Belajar Programming 2</a>
                </h3>
                <p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, adipisci.</p>
                <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="https://source.unsplash.com/360x200?programming" alt="Programming" class="w-full" />
              <div class="py-8 px-6">
                <h3>
                  <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tips Belajar Programming 3</a>
                </h3>
                <p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, adipisci.</p>
                <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Blog Section End --}}

    {{-- Contact Section Start --}}
    <section id="contact" class="pt-36 pb-32">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi Kami</h2>
            <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium delectus accusantium, laboriosam dolor esse cupiditate.</p>
          </div>
        </div>
        <form action="">
          <div class="w-full lg:w-2/3 lg:mx-auto">
            <div class="w-full px-4 mb-8">
              <label for="name" class="text-base font-bold text-primary">Nama</label>
              <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus-border-primary"/>
            </div>
            <div class="w-full px-4 mb-8">
              <label for="email" class="text-base font-bold text-primary">Email</label>
              <input type="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus-border-primary"/>
            </div>
            <div class="w-full px-4 mb-8">
              <label for="message" class="text-base font-bold text-primary">Pesan</label>
              <textarea type="text" id="message" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus-border-primary h-32"></textarea>
            </div>
            <div class="w-full px-4">
              <button class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
            </div>
          </div>
          </form>
      </div>
    </section>
    {{-- Contact Section End --}}


    {{-- Footer Start --}}
    <footer class="bg-dark pt-24 pb-12">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
            <h2 class="font-bold text-4xl text-white mb-5">Kantor</h2>
            <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
            <p>yovi.revikasari03@gmail.com</p>
            <p>Jl. Alamat</p>
            <p>Bali</p>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3">
            <h2 class="font-semibold text-xl text-white mb-5">Kategori Tulisan</h2>
            <ul class="text-slate-300">
              <li>
                <a href="#" class="inline-block text-base hover:text-primary mb-3">Programming 1</a>
              </li>
              <li>
                <a href="#" class="inline-block text-base hover:text-primary mb-3">Programming 2</a>
              </li>
              <li>
                <a href="#" class="inline-block text-base hover:text-primary mb-3">Programming 3</a>
              </li>
            </ul>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3">
            <h2 class="font-semibold text-xl text-white mb-5">Tautan</h2>
            <ul class="text-slate-300">
              <li>
                <a href="#home" class="inline-block text-base hover:text-primary mb-3">Home</a>
              </li>
              <li>
                <a href="#about" class="inline-block text-base hover:text-primary mb-3">About Me</a>
              </li>
              <li>
                <a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">Portfolio</a>
              </li>
              <li>
                <a href="#clients" class="inline-block text-base hover:text-primary mb-3">Clients</a>
              </li>
              <li>
                <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Blog</a>
              </li>
              <li>
                <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="w-full pt-10 border-t border-slate-700">
          <div class="flex items-center justify-center mb-5">
            {{-- Linkedin --}}
            <a href="#" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-500 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
            {{-- Gmail --}}
            <a href="#" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-500 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Gmail</title><path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/></svg>
            </a>
            {{-- Github --}}
            <a href="#" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-500 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg role="img"  width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
            </a>
            {{-- Instagram --}}
            <a href="#" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-500 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
            </a>
          </div>
          <p class="font-medium text-xs text-slate-500 text-center">Dibuat Oleh <a href="https://linkedin" target="blank" class="font-bold text-primary">Yovi Revikasari</a>, menggunakan <a href="https://tailwindcss.com" target="blank" class="font-bold text-sky-500">Tailwind CSS</a></p>
        </div>
      </div>
    </footer>
    {{-- Footer End --}}
  
  <script src="{{ asset('dist/js/script.js') }}"></script>
  </body>
</html>
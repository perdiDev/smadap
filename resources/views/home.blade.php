@extends('layouts.main')

@section('container')

<section class="z-50">
      <div id="default-carousel" class="relative" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-[78vh] w-full overflow-hidden">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <span
              class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-2xl font-semibold text-white"
              >First Slide</span
            >
            <div
              style="background-image: url(/img/hero-1.JPG)"
              class="absolute top-1/2 left-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2 bg-cover bg-center"
            >
              <div
                class="flex h-full w-full items-center justify-center bg-gradient-to-t from-slate-900/70 to-slate-900/20"
              >
                <p
                  class="max-w-4xl px-14 text-center text-3xl font-bold text-white lg:text-5xl"
                >
                  Selamat Datang di Website Resmi SMAN 2 Pangkep
                </p>
              </div>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div
              style="background-image: url(/img/hero-2.JPG)"
              class="absolute top-1/2 left-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2 bg-cover bg-center"
            >
              <div
                class="flex h-full w-full items-center justify-center bg-gradient-to-t from-slate-900/70 to-slate-900/20"
              >
                <p
                  class="max-w-4xl px-14 text-center text-3xl font-bold text-white lg:text-5xl"
                >
                  Melahirkan Generasi Pemimpin
                </p>
              </div>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div
              style="background-image: url(/img/hero-3.JPG)"
              class="absolute top-1/2 left-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2 bg-cover bg-center"
            >
              <div
                class="flex h-full w-full items-center justify-center bg-gradient-to-t from-slate-900/70 to-slate-900/20"
              >
                <p
                  class="max-w-4xl px-14 text-center text-3xl font-bold text-white lg:text-5xl"
                >
                  Ekstarkurikuler yang Beragam
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Slider indicators -->
        <div
          class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3"
        >
          <button
            type="button"
            class="h-3 w-3 rounded-full"
            aria-current="false"
            aria-label="Slide 1"
            data-carousel-slide-to="0"
          ></button>
          <button
            type="button"
            class="h-3 w-3 rounded-full"
            aria-current="false"
            aria-label="Slide 2"
            data-carousel-slide-to="1"
          ></button>
          <button
            type="button"
            class="h-3 w-3 rounded-full"
            aria-current="false"
            aria-label="Slide 3"
            data-carousel-slide-to="2"
          ></button>
        </div>
        <!-- Slider controls -->
        <button
          type="button"
          class="group absolute top-0 left-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
          data-carousel-prev
        >
          <span
            class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white sm:h-10 sm:w-10"
          >
            <svg
              aria-hidden="true"
              class="h-5 w-5 text-white sm:h-6 sm:w-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 19l-7-7 7-7"
              ></path>
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button
          type="button"
          class="group absolute top-0 right-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
          data-carousel-next
        >
          <span
            class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white sm:h-10 sm:w-10"
          >
            <svg
              aria-hidden="true"
              class="h-5 w-5 text-white sm:h-6 sm:w-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 5l7 7-7 7"
              ></path>
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>
      </div>
    </section>

    <section id="info-singkat" class="py-8">
      <div
        class="flex w-full flex-col justify-between gap-6 px-4 md:flex-row md:gap-2 md:px-24"
      >
        <div class="card-info-singkat" data-aos="zoom-in-down">
          <img
            src="/svg/fasilitas.svg"
            alt="Smadap"
            class="h-14 pb-2 md:h-16"
          />
          <h3 class="text-info-singkat">22 Fasilitas</h3>
        </div>
        <div class="card-info-singkat" data-aos="zoom-in-down">
          <img
            src="/svg/guru.svg"
            alt="Smadap"
            class="h-14 pb-2 md:h-16"
          />
          <h3 class="text-info-singkat">102 Guru</h3>
        </div>
        <div class="card-info-singkat" data-aos="zoom-in-down">
          <img
            src="/svg/siswa.svg"
            alt="Smadap"
            class="h-14 pb-2 md:h-16"
          />
          <h3 class="text-info-singkat">504 Murid</h3>
        </div>
      </div>
    </section>

    <section id="profile-singkat">
      <div class="flex w-full flex-col items-center bg-slate-50 md:flex-row">
        <div class="h-56 w-full md:h-96 md:w-1/2">
          <div
            class="h-full w-full bg-cover bg-center"
            style="background-image: url(/img/hero-2.JPG)"
          >
            <div class="h-full w-full bg-black/10"></div>
          </div>
        </div>
        <div
          class="w-full space-y-4 overflow-hidden px-4 py-16 md:w-1/2 md:px-16 md:py-0"
          data-aos="fade-right"
        >
          <!-- data-aos="zoom-in-right" -->
          <h1
            class="text-3xl font-bold tracking-tight text-yellow-300 lg:text-4xl"
          >
            SMAN 2 Pangkep
          </h1>
          <p class="font-light text-gray-500 sm:text-xl">
            Berdiri sejak tahun 1985 yang pada awalanya dikenal dengan nama SMAN
            1 Segeri. Sudah meluluskan ribuan alumni-alumni dengan kurikulum
            yang selalu menyesuaikan pada kurikulum nasional.
          </p>
          <a
            class="group inline-flex cursor-pointer items-center rounded-lg border bg-yellow-300 py-2 px-4 text-center text-white shadow-lg transition-all hover:bg-yellow-400"
            href="#"
          >
            Lihat Detail
            <svg
              class="ml-2 h-4 w-4 transition-all ease-in group-hover:translate-x-1"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </a>
        </div>
      </div>
    </section>

    <section id="sambutan" class="container">
      <div class="px-4 pt-24">
        <h2
          class="mb-8 text-center text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl"
        >
          Sambutan
        </h2>
        <div
          class="flex w-full flex-col items-center bg-yellow-100 py-12 px-2 shadow-lg md:px-8 rounded-lg"
        >
          <div class="mb-6 md:mb-8">
            <img
              src="/img/hero-2.JPG"
              alt="Kepalas Sekolah SMADAP"
              class="h-36 w-36 cursor-zoom-in rounded object-cover object-center transition-all hover:scale-105"
              data-aos="zoom-in"
            />
          </div>
          <div class="px-5">
            <div class="mx-auto w-full text-center" data-aos="fade-down">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                class="mb-2 inline-block h-8 w-8 text-gray-400 md:mb-4"
                viewBox="0 0 975.036 975.036"
              >
                <path
                  d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"
                ></path>
              </svg>
              <p class="font-light text-gray-500 sm:text-xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                voluptates veritatis blanditiis cupiditate necessitatibus
                facilis consectetur! Magni amet ipsa similique, rerum magnam
                ratione odio adipisci, quam perferendis facilis totam molestias.
              </p>
              <span
                class="mt-4 mb-4 inline-block h-1 w-10 rounded bg-indigo-500"
              ></span>
              <h2
                class="text-base font-medium tracking-wider text-gray-900 md:text-lg"
              >
                Perdi, S.Pd.
              </h2>
              <p class="text-gray-500">Kepala ICT SMAN 2 Pangkep</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container bg-white">
      <div class="mx-auto max-w-screen-xl py-24">
        <div class="mx-auto mb-8 max-w-screen-sm text-center lg:mb-16">
          <h2
            class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl"
          >
            Update Terbaru
          </h2>
          <p class="font-light text-gray-500 sm:text-xl">
            Informasi yang disampaikan resmi dari pihak sekolah.
          </p>
        </div>
        <div class="grid gap-8 lg:grid-cols-2">
          <article
            class="rounded-lg border border-gray-200 bg-white p-6 shadow-md"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="mb-5 flex items-center justify-between text-gray-500">
              <span
                class="bg-primary-100 text-primary-800 inline-flex items-center rounded bg-yellow-100 px-2.5 py-0.5 text-xs font-medium"
              >
                Umum
              </span>
              <span class="text-sm">14 days ago</span>
            </div>
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
              <a href="#">Jadwal ujian akhir semester genap</a>
            </h2>
            <p class="mb-5 font-light text-gray-500">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque
              provident, fuga id fugit voluptate labore tenetur maiores
              consequuntur nemo nam. Sint animi, suscipit repellat ullam
              distinctio quis ducimus sit illum.
            </p>
            <div class="flex items-center justify-between">
              <div class="flex items-center space-x-4">
                <img
                  class="h-7 w-7 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                  alt="Jese Leos avatar"
                />
                <span class="font-medium"> Perdi S.Pd. </span>
              </div>
              <a
                href="#"
                class="group inline-flex items-center font-medium text-yellow-300 hover:underline"
              >
                Lihat Detail
                <svg
                  class="ml-2 h-4 w-4 group-hover:translate-x-1"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </a>
            </div>
          </article>
          <article
            class="rounded-lg border border-gray-200 bg-white p-6 shadow-md"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="mb-5 flex items-center justify-between text-gray-500">
              <span
                class="bg-primary-100 text-primary-800 inline-flex items-center rounded bg-yellow-100 px-2.5 py-0.5 text-xs font-medium"
              >
                Kelas X
              </span>
              <span class="text-sm">14 days ago</span>
            </div>
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
              <a href="#">Jadwal ujian akhir semester genap</a>
            </h2>
            <p class="mb-5 font-light text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis
              corporis ipsum ratione sapiente rerum aliquid est, illum ipsam
              voluptatum adipisci? Quas cupiditate natus sunt rem.
            </p>
            <div class="flex items-center justify-between">
              <div class="flex items-center space-x-4">
                <img
                  class="h-7 w-7 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                  alt="Jese Leos avatar"
                />
                <span class="font-medium"> Perdi S.Pd. </span>
              </div>
              <a
                href="#"
                class="group inline-flex items-center font-medium text-yellow-300 hover:underline"
              >
                Lihat Detail
                <svg
                  class="ml-2 h-4 w-4 group-hover:translate-x-1"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="container bg-white">
      <div class="mx-auto max-w-screen-xl py-12 px-4 lg:py-16">
        <div class="mx-auto mb-8 max-w-screen-sm text-center lg:mb-16">
          <h2
            class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl"
          >
            Fasilitas
          </h2>
          <p class="font-light text-gray-500 sm:text-xl">
            Lingkungan yang mendukung untuk menciptakan peserta didik yang
            cerdas dan berbakat.
          </p>
        </div>
        <div
          class="grid grid-cols-1 gap-8 font-medium text-gray-500 sm:gap-12 md:grid-cols-2 lg:grid-cols-4"
        >
          <div
            class="rounded-lg border border-yellow-300 py-2 text-center"
            data-aos="zoom-in-down"
          >
            <p class="">Perpustakaan</p>
          </div>
          <div
            class="rounded-lg border border-yellow-300 py-2 text-center"
            data-aos="zoom-in-down"
          >
            <p class="">Lab. Komputer</p>
          </div>
          <div
            class="rounded-lg border border-yellow-300 py-2 text-center"
            data-aos="zoom-in-down"
          >
            <p class="">Lab. Kimia</p>
          </div>
          <div
            class="rounded-lg border border-yellow-300 py-2 text-center"
            data-aos="zoom-in-down"
          >
            <p class="">Lab. Fisika</p>
          </div>
          <div
            class="rounded-lg border border-yellow-300 py-2 text-center"
            data-aos="zoom-in-down"
          >
            <p class="">PMR</p>
          </div>
          <div
            class="rounded-lg border border-yellow-300 py-2 text-center"
            data-aos="zoom-in-down"
          >
            <p class="">Sanggar Pramuka</p>
          </div>
          <div
            class="rounded-lg border border-yellow-300 py-2 text-center"
            data-aos="zoom-in-down"
          >
            <p class="">Bengkel Seni</p>
          </div>
          <div
            class="rounded-lg border border-yellow-300 py-2 text-center"
            data-aos="zoom-in-down"
          >
            <p class="">Lapangan Futsal</p>
          </div>
          <div
            class="rounded-lg border border-yellow-300 py-2 text-center"
            data-aos="zoom-in-down"
          >
            <p class="">Lapangan Volly</p>
          </div>
          <div
            class="rounded-lg border border-yellow-300 py-2 text-center"
            data-aos="zoom-in-down"
          >
            <p class="">Lapangan Takraw</p>
          </div>
        </div>
        <div class="mt-6 flex w-full justify-center">
          <a
            class="group inline-flex cursor-pointer items-center rounded-lg border bg-yellow-300 py-2 px-4 text-center text-white shadow-lg transition-all hover:bg-yellow-400"
            href="#"
          >
            Lihat Detail
            <svg
              class="ml-2 h-4 w-4 transition-all ease-in group-hover:translate-x-1"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </a>
        </div>
      </div>
    </section>

    <section class="container pb-4 md:pb-8">
      <div class="bg-white py-12 md:py-16">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
          <!-- text - start -->
          <div class="mb-10 md:mb-12">
            <h2
              class="mb-4 text-center text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl"
            >
              Kegiatan
            </h2>
          </div>
          <!-- text - end -->

          <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
            <!-- image - start -->
            <div
              data-aos="flip-up"
              class="group relative flex h-48 items-end justify-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-96"
            >
              <img
                src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
                loading="lazy"
                alt="Photo by Minh Pham"
                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
              />

              <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"
              ></div>

              <span
                class="relative mr-3 mb-3 inline-block rounded-lg border border-gray-500 px-2 py-1 text-xs text-gray-200 backdrop-blur md:px-3 md:text-sm"
                >VR</span
              >
            </div>
            <!-- image - end -->

            <!-- image - start -->
            <div
              data-aos="flip-up"
              class="group relative flex h-48 items-end justify-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-96"
            >
              <img
                src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600"
                loading="lazy"
                alt="Photo by Lorenzo Herrera"
                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
              />

              <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"
              ></div>

              <span
                class="relative mr-3 mb-3 inline-block rounded-lg border border-gray-500 px-2 py-1 text-xs text-gray-200 backdrop-blur md:px-3 md:text-sm"
                >Retro</span
              >
            </div>
            <!-- image - end -->

            <!-- image - start -->
            <div
              data-aos="flip-up"
              class="group relative flex h-48 items-end justify-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-96"
            >
              <img
                src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=600"
                loading="lazy"
                alt="Photo by Magicle"
                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
              />

              <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"
              ></div>

              <span
                class="relative mr-3 mb-3 inline-block rounded-lg border border-gray-500 px-2 py-1 text-xs text-gray-200 backdrop-blur md:px-3 md:text-sm"
                >Tech</span
              >
            </div>
            <!-- image - end -->
          </div>
        </div>
      </div>
    </section>

@endsection
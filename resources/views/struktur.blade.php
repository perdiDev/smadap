@extends('layouts.main')

@section('container')


<section id="bagan" class="bg-yellow-100 py-16 md:py-20">
      <div class="container px-4 md:px-12">
        <h2
          class="mb-8 text-center text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl"
        >
          Bagan Struktur
        </h2>

        <div
          class="mb-10 flex w-full justify-center overflow-hidden rounded-lg lg:mb-0"
        >
          <img
            alt="feature"
            class="h-auto w-full max-w-4xl rounded-lg object-contain object-center"
            src="https://dummyimage.com/600x500"
          />
        </div>
      </div>
    </section>

    <section id="bagan" class="py-16 md:py-20">
      <div class="container px-4 md:px-12">
        <h2
          class="mb-8 text-center text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl"
        >
          Struktur Organisasi
        </h2>
        <div class="space-y-8">
          <div class="">
            <h5 class="py-6 text-2xl font-bold tracking-tight text-gray-900">
              Kepala Sekolah
            </h5>
            <div
              class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:grid-cols-4 lg:gap-8"
            >
              <!-- person - start -->
              <div
                class="flex flex-col items-center rounded-lg bg-yellow-100 p-8"
              >
                <div
                  class="mb-2 h-44 w-44 overflow-hidden rounded-full bg-gray-200 shadow-lg md:mb-4"
                >
                  <img
                    src="https://images.unsplash.com/photo-1567515004624-219c11d31f2e??auto=format&q=75&fit=crop&w=256"
                    loading="lazy"
                    alt="Photo by Radu Florin"
                    class="h-full w-full object-cover object-center"
                  />
                </div>

                <div class="pt-2">
                  <div class="text-center font-bold text-yellow-500 md:text-lg">
                    John McCulling
                  </div>
                  <p
                    class="text-center text-sm text-gray-500 md:mb-4 md:text-base"
                  >
                    Kepala Sekolah
                  </p>
                </div>
              </div>
              <!-- person - end -->
            </div>
          </div>
          <div class="">
            <h5 class="py-6 text-2xl font-bold tracking-tight text-gray-900">
              Wakil Kepala Sekolah
            </h5>
            <div
              class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:grid-cols-4 lg:gap-8"
            >
              <!-- person - start -->
              <div
                class="flex flex-col items-center rounded-lg bg-yellow-100 p-8"
              >
                <div
                  class="mb-2 h-44 w-44 overflow-hidden rounded-full bg-gray-200 shadow-lg md:mb-4"
                >
                  <img
                    src="https://images.unsplash.com/photo-1567515004624-219c11d31f2e??auto=format&q=75&fit=crop&w=256"
                    loading="lazy"
                    alt="Photo by Radu Florin"
                    class="h-full w-full object-cover object-center"
                  />
                </div>

                <div class="pt-2">
                  <div class="text-center font-bold text-yellow-500 md:text-lg">
                    John McCulling
                  </div>
                  <p
                    class="text-center text-sm text-gray-500 md:mb-4 md:text-base"
                  >
                    Kesiswaan
                  </p>
                </div>
              </div>
              <!-- person - end -->
              <!-- person - start -->
              <div
                class="flex flex-col items-center rounded-lg bg-yellow-100 p-8"
              >
                <div
                  class="mb-2 h-44 w-44 overflow-hidden rounded-full bg-gray-200 shadow-lg md:mb-4"
                >
                  <img
                    src="https://images.unsplash.com/photo-1567515004624-219c11d31f2e??auto=format&q=75&fit=crop&w=256"
                    loading="lazy"
                    alt="Photo by Radu Florin"
                    class="h-full w-full object-cover object-center"
                  />
                </div>

                <div class="pt-2">
                  <div class="text-center font-bold text-yellow-500 md:text-lg">
                    John McCulling
                  </div>
                  <p
                    class="text-center text-sm text-gray-500 md:mb-4 md:text-base"
                  >
                    Kesiswaan
                  </p>
                </div>
              </div>
              <!-- person - end -->
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection
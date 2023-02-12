@extends('layouts.main')

@section('container')


<div class="bg-white py-8 sm:py-16 lg:py-20">
    <div class="container max-w-screen-2xl px-4 md:px-8">
    <div class="mb-10 md:mb-16">
        <h2
        class="mb-4 text-center text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl"
        >
        Fasilitas
        </h2>

        <p
        class="mx-auto max-w-screen-md text-center font-light text-gray-500 sm:text-xl"
        >
        Pendidikan membutuhkan sarana dan prasarana untuk menjadi penunjang
        dalam pengembangan kemampuan siswa.
        </p>
    </div>
    <div class="grid gap-6 sm:grid-cols-2">
        <div
        class="group relative flex h-80 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg md:h-96"
        >
        <img
            src="https://images.unsplash.com/photo-1620243318482-fdd2affd7a38?auto=format&q=75&fit=crop&w=750"
            loading="lazy"
            alt="Photo by Fakurian Design"
            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
        />
        <div
            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"
        ></div>
        <div class="relative flex flex-col">
            <span class="text-lg font-semibold text-white lg:text-xl"
            >Perpustakaan</span
            >
        </div>
        </div>
        <div
        class="group relative flex h-80 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg"
        >
        <img
            src="https://images.unsplash.com/photo-1620243318482-fdd2affd7a38?auto=format&q=75&fit=crop&w=750"
            loading="lazy"
            alt="Photo by Fakurian Design"
            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
        />
        <div
            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"
        ></div>
        <div class="relative flex flex-col">
            <span class="text-lg font-semibold text-white lg:text-xl"
            >Lab. Komputer</span
            >
        </div>
        </div>
        <div
        class="group relative flex h-80 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg"
        >
        <img
            src="https://images.unsplash.com/photo-1620243318482-fdd2affd7a38?auto=format&q=75&fit=crop&w=750"
            loading="lazy"
            alt="Photo by Fakurian Design"
            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
        />
        <div
            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"
        ></div>
        <div class="relative flex flex-col">
            <span class="text-lg font-semibold text-white lg:text-xl"
            >Perpustakaan</span
            >
        </div>
        </div>
        <div
        class="group relative flex h-80 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg"
        >
        <img
            src="https://images.unsplash.com/photo-1620243318482-fdd2affd7a38?auto=format&q=75&fit=crop&w=750"
            loading="lazy"
            alt="Photo by Fakurian Design"
            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
        />
        <div
            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"
        ></div>
        <div class="relative flex flex-col">
            <span class="text-lg font-semibold text-white lg:text-xl"
            >Lab. Komputer</span
            >
        </div>
        </div>
    </div>
    </div>
</div>


@endsection
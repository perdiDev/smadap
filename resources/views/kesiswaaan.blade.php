@extends('layouts.main')

@section('container')

<section id="kesiswaan" class="container">
    <div class="space-y-12 pt-8 pb-16">
    <h2
        class="mb-8 text-center text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white lg:text-4xl"
    >
        Kesiswaan
    </h2>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-8">
        <div class="h-fit w-full md:col-span-2">
        <img
            src="https://dummyimage.com/600x500"
            alt=""
            class="h-72 w-full rounded object-cover object-center md:h-[400px]"
        />
        </div>
        <div class="h-fit w-full rounded-lg bg-yellow-100 p-8">
        <div class="flex flex-col items-center space-y-4">
            <img
            src="https://dummyimage.com/300x300"
            alt=""
            class="h-auto w-36 rounded md:w-48"
            />
            <h1
            class="text-center text-xl font-bold text-gray-900 md:text-2xl"
            >
            Information Communication and Technology
            </h1>
            <div>
            <button
                class="rounded bg-yellow-300 py-1 px-2 font-medium text-white hover:bg-yellow-400 hover:shadow-md"
            >
                Detail Kegiatan
            </button>
            </div>
        </div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-8">
        <div class="h-fit w-full md:col-span-2">
        <img
            src="https://dummyimage.com/600x500"
            alt=""
            class="h-72 w-full rounded object-cover object-center md:h-[400px]"
        />
        </div>
        <div class="h-fit w-full rounded-lg bg-yellow-100 p-8">
        <div class="flex flex-col items-center space-y-4">
            <img
            src="https://dummyimage.com/300x300"
            alt=""
            class="h-auto w-36 rounded md:w-48"
            />
            <h1
            class="text-center text-xl font-bold text-gray-900 md:text-2xl"
            >
            Information Communication and Technology
            </h1>
            <div>
            <button
                class="rounded bg-yellow-300 py-1 px-2 font-medium text-white hover:bg-yellow-400 hover:shadow-md"
            >
                Detail Kegiatan
            </button>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

@endsection
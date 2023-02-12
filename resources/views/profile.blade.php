@extends('layouts.main')

@section('container')

<section id="visi-misi" class="container">
      <div class="py-16 lg:px-4">
        <h2
          class="mb-8 text-center text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl"
        >
          Visi Misi
        </h2>
        <div class="mx-auto max-w-3xl space-y-12">
          <div
            class="flex w-full flex-col bg-yellow-100 py-12 px-4 shadow-lg md:px-8"
          >
            <h5
              class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900"
            >
              Visi
            </h5>
            <p class="font-light text-gray-500">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Quibusdam, ipsa?
            </p>
          </div>
          <div
            class="flex w-full flex-col space-y-2 bg-yellow-100 py-12 px-4 shadow-lg md:px-8"
          >
            <h5
              class="text-center text-2xl font-bold tracking-tight text-gray-900"
            >
              Misi
            </h5>
            <p class="font-light text-gray-500">
              1. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Ducimus quia laboriosam molestiae?
            </p>
            <p class="font-light text-gray-500">
              2. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Ducimus quia laboriosam molestiae?
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="sejarah">
      <div class="bg-gray-50 py-16">
        <h2
          class="mb-8 text-center text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl"
        >
          Sejarah
        </h2>
      </div>
    </section>

    <section id="identitas" class="container">
      <div class="py-16">
        <h2
          class="mb-8 text-center text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl"
        >
          Identitas Sekolah
        </h2>
        <div
          class="relative mx-auto max-w-3xl overflow-x-auto shadow-md sm:rounded-lg"
        >
          <table
            class="w-full text-left text-sm text-gray-500 dark:text-gray-400"
          >
            <thead
              class="bg-gray-50 text-xl uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400"
            >
              <tr>
                <th scope="col" colspan="2" class="px-6 py-3">
                  SMAN 2 Pangkep
                </th>
              </tr>
            </thead>
            <tbody>
              <tr
                class="border-b bg-white dark:border-gray-700 dark:bg-gray-800"
              >
                <td class="px-6 py-4">NPSN</td>
                <th
                  scope="row"
                  class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                >
                  40300589
                </th>
              </tr>
              <tr
                class="border-b bg-white dark:border-gray-700 dark:bg-gray-800"
              >
                <td class="px-6 py-4">Alamat</td>
                <th
                  scope="row"
                  class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                >
                  Jl. As. Dg. Kalebbu No. 2
                </th>
              </tr>
              <tr
                class="border-b bg-white dark:border-gray-700 dark:bg-gray-800"
              >
                <td class="px-6 py-4">Kecamatan</td>
                <th
                  scope="row"
                  class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                >
                  Segeri
                </th>
              </tr>
              <tr
                class="border-b bg-white dark:border-gray-700 dark:bg-gray-800"
              >
                <td class="px-6 py-4">Email</td>
                <th
                  scope="row"
                  class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                >
                  smanri40300589@yahoo.com
                </th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    @endsection
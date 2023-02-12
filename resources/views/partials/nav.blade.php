
<nav class="border-gray-200 bg-yellow-300">
      <div
        class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between gap-2 px-4 py-4 md:px-6 md:py-6"
      >
        <a href="/" class="flex items-center">
          <img
            src="/img/logo-smadap.png"
            class="mr-3 h-8 sm:h-9"
            alt="SMAN 2 Pangkep"
          />
          <span
            class="self-center whitespace-nowrap text-lg font-extrabold text-white md:text-xl"
            >SMAN 2 Pangkep</span
          >
        </a>
        <div class="flex items-center">
          <a
            href="mailto:admin@sma2pangkep.sch.id"
            class="mr-6 text-sm font-medium text-gray-50 hover:underline"
            >admin@sma2pangkep.sch.id</a
          >
          <a href="#" class="button-login-blue">Login</a>
        </div>
      </div>
    </nav>
    <nav
      class="sticky top-0 z-[999] w-full border-b border-gray-200 bg-gray-50 px-2 py-1 sm:px-4"
    >
      <div
        class="container flex flex-wrap items-center justify-between md:px-6"
      >
        <a href="/" class="flex items-center">
          <span
            class="self-center whitespace-nowrap font-medium text-yellow-300"
            >Beranda</span
          >
        </a>
        <button
          data-collapse-toggle="navbar-default"
          type="button"
          class="ml-3 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:bg-gray-100 md:hidden"
          aria-controls="navbar-default"
          aria-expanded="false"
        >
          <span class="sr-only">Open main menu</span>
          <svg
            class="h-6 w-6"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul
            class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:text-sm md:font-medium"
          >
            <li>
              <a
                href="/profile"
                class="block rounded py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-100 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-yellow-300"
                aria-current="page"
                >Profile</a
              >
            </li>
            <li>
              <button
                id="dropdownNavbarLink"
                data-dropdown-toggle="dropdownNavbar"
                class="flex w-full items-center justify-between rounded py-2 pl-3 pr-4 font-medium text-gray-700 hover:bg-gray-100 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-yellow-300"
              >
                Akademik
                <svg
                  class="ml-1 h-5 w-5"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <!-- Dropdown menu -->
              <div
                id="dropdownNavbar"
                class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow dark:divide-gray-600 dark:bg-gray-700"
              >
                <ul
                  class="py-2 text-sm text-gray-700 dark:text-gray-400"
                  aria-labelledby="dropdownLargeButton"
                >
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      >Struktur Sekolah</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      >Jadwal</a
                    >
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a
                href="#"
                class="block rounded py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-100 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-yellow-300"
                >Fasilitas</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block rounded py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-100 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-yellow-300"
                >Pengumaman</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block rounded py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-100 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-yellow-300"
                >Kesiswaan</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

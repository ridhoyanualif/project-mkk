<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../tailwind.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="flex flex-row bg-gray-900">
    <div class="flex items-center gap-2 h-screen w-16 flex-col justify-between bg-gray-800">
      <div>
        <div class="inline-flex size-16 items-center justify-center">
          <span class="grid size-10 place-content-center rounded-lg bg-blue-500 text-xs text-gray-100">
            R
          </span>
        </div>

        <div class="border-t border-gray-800">
          <div class="px-2">
            <div class="py-4">
              <a href="#" class="t group relative flex justify-center rounded bg-blue-50 px-2 py-1.5 text-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 opacity-75" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>

                <span
                  class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible">
                  General
                </span>
              </a>
            </div>

            <ul class="space-y-1 border-t border-gray-100 pt-4">
              <li>
                <a href="#"
                  class="t group relative flex justify-center rounded px-2 py-1.5 text-gray-100 hover:bg-blue-700">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 opacity-75" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>

                  <span
                    class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible">
                    Teams
                  </span>
                </a>
              </li>

              <li>
                <a href="#"
                  class="t group relative flex justify-center rounded px-2 py-1.5 text-gray-100 hover:bg-blue-700">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 opacity-75" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                  </svg>

                  <span
                    class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible">
                    Billing
                  </span>
                </a>
              </li>

              <li>
                <a href="#"
                  class="t group relative flex justify-center rounded px-2 py-1.5 text-gray-100 hover:bg-blue-700">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 opacity-75" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>

                  <span
                    class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible">
                    Invoices
                  </span>
                </a>
              </li>

              <li>
                <a href="#"
                  class="t group relative flex justify-center rounded px-2 py-1.5 text-gray-100 hover:bg-blue-700">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 opacity-75" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                  </svg>

                  <span
                    class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible">
                    Account
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="sticky inset-x-0 bottom-0 border-t border-gray-800 bg-gray-800 p-2">
        <form action="indeks.html">
          <button type="submit"
            class="group relative flex w-full justify-center rounded-lg px-2 py-1.5 bg-gray-800 text-sm text-gray-100 hover:bg-blue-700 hover:text-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 opacity-75" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>

            <span
              class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible">
              Logout
            </span>
          </button>
        </form>
      </div>



    </div class="">


    <header class="mt-[3rem] ml-[3rem] border-b border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-900">
      <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="flex flex-col items-start gap-4 md:flex-row md:items-center md:justify-between">
          <div>
            <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl dark:text-white">Dashboard</h1>

            <p class="mt-1.5 text-sm text-gray-500 dark:text-gray-400">
              Welcome to our school dashboard.
            </p>
          </div>
        </div>
      </div>
    </header>

    <div class="mt-[18rem] mr-[4rem] -ml-[13rem]">
      <div class="grid grid-cols-4 gap-6">
        <article
          class="rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25">
          <span class="inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
          </span>

          <a href="#">
            <h3 class="mt-0.5 text-lg font-medium text-gray-900 dark:text-white">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </h3>
          </a>

          <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur
            animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem, mollitia
            itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque dignissimos.
            Molestias explicabo corporis voluptatem?
          </p>

          <a href="#" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
            Find out more

            <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
              &rarr;
            </span>
          </a>
        </article>

        <article
          class="rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25">
          <span class="inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
          </span>

          <a href="#">
            <h3 class="mt-0.5 text-lg font-medium text-gray-900 dark:text-white">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </h3>
          </a>

          <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur
            animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem, mollitia
            itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque dignissimos.
            Molestias explicabo corporis voluptatem?
          </p>

          <a href="#" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
            Find out more

            <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
              &rarr;
            </span>
          </a>
        </article>

        <article
          class="rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25">
          <span class="inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
          </span>

          <a href="#">
            <h3 class="mt-0.5 text-lg font-medium text-gray-900 dark:text-white">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </h3>
          </a>

          <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur
            animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem, mollitia
            itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque dignissimos.
            Molestias explicabo corporis voluptatem?
          </p>

          <a href="#" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
            Find out more

            <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
              &rarr;
            </span>
          </a>
        </article>

        <article
          class="rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25">
          <span class="inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
          </span>

          <a href="#">
            <h3 class="mt-0.5 text-lg font-medium text-gray-900 dark:text-white">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </h3>
          </a>

          <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur
            animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem, mollitia
            itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque dignissimos.
            Molestias explicabo corporis voluptatem?
          </p>

          <a href="#" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
            Find out more

            <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
              &rarr;
            </span>
          </a>
        </article>

      </div>



      <div class="overflow-x-auto mt-[6rem]">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm dark:divide-gray-700 dark:bg-gray-900">

          <?php
            include 'connection.php';
            $no=1;

            $sql = "SELECT * FROM daftar_nilai";

            $data_siswa = $conn->query($sql);

            while ($row = $data_siswa->fetch_row()){
              $banyak_siswa[] = $row;
          }?>

          <thead class="text-left">
            <?php if (!isset($banyak_siswa)): ?>
            <p>Empty .</p>
            <?php else : ?>
            <tr>
              <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">No</th>
              <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">Nisn</th>
              <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                Nama
              </th>
              <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">Kelas</th>
              <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                Nilai
              </th>
              <th class="px-4 py-2"></th>
            </tr>
          </thead>

          <?php foreach ($banyak_siswa as $siswa): ?>

          <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            <tr>
              <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                <?= $no++;?>
              </td>
              <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200">
                <?= $siswa[0]?>
              </td>
              <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200">
                <?= $siswa[1]?>
              </td>
              <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200">
                <?= $siswa[2]?>
              </td>
              <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200">
                <?= $siswa[3]?>
              </td>
              <td class="whitespace-nowrap px-4 py-2">
                <a href="edit.php?nisn=<?php echo $siswa[0]; ?>"
                  class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700">
                  Edit
                </a>
              </td>
              <td class="whitespace-nowrap px-4 py-2">
                <a href="delete-siswa.php?nisn=<?php echo $siswa[0]; ?>"
                  class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700">
                  Delete
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
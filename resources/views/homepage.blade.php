@extends('layouts.guest')

@section('content')

<div class="bg-white pb-6 sm:pb-8 lg:pb-12">
  <header class="mb-8 border-b">
    <div class="mx-auto flex max-w-screen-2xl items-center justify-between px-4 md:px-8">
      <!-- logo - start -->
      <a href="/" class="inline-flex items-center gap-2.5 text-2xl font-bold text-black md:text-3xl" aria-label="logo">
        <img src="{{ URL::to('/assets/images/full.png') }}" class="w-32">
      </a>
      <!-- logo - end -->

      <!-- nav - start -->
      <nav class="hidden gap-12 lg:flex 2xl:ml-16">
        <a href="#home" class="text-lg font-semibold text-indigo-500">الصفحة الرئيسية</a>
        <a href="#about" class="text-lg font-semibold text-gray-600 transition duration-100 hover:text-indigo-500 active:text-indigo-700">من نحن</a>
        <a href="#values" class="text-lg font-semibold text-gray-600 transition duration-100 hover:text-indigo-500 active:text-indigo-700">قيمنا</a>
        <a href="#services" class="text-lg font-semibold text-gray-600 transition duration-100 hover:text-indigo-500 active:text-indigo-700">خدماتنا</a>
      </nav>
      <!-- nav - end -->

      <!-- buttons - start -->
      <div class="hidden gap-8 lg:flex 2xl:ml-12">
        <a href="#" class="text-lg font-semibold text-gray-600 transition duration-100 hover:text-indigo-500 active:text-indigo-700">مستخدم جديد</a>
        <a href="#" class="text-lg font-semibold text-gray-600 transition duration-100 hover:text-indigo-500 active:text-indigo-700">تسجيل الدخول</a>
      </div>
      <!-- buttons - end -->
    </div>
  </header>

  <section id="home" class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <div class="mb-8 flex flex-wrap justify-between md:mb-16 px-10">
      <div class="mb-6 flex w-full flex-col justify-center sm:mb-12 lg:mb-0 lg:w-1/3 lg:pb-24 lg:pt-48">
        <h2 class="mb-4 text-4xl font-bold text-black sm:text-5xl md:mb-8 md:text-5xl">ركايا آفاق واسعة<br />وإمكانيات عالية</h2>

        <p class="max-w-md leading-relaxed text-gray-500 xl:text-lg">Rakaya has broad horizons and high potential</p>
      </div>

      <div class="mb-12 flex w-full md:mb-16 lg:w-2/3">
        <div class="relative right-24 top-12 z-10 -ml-12 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:right-36 md:top-16 lg:ml-0">
          <img src="https://images.unsplash.com/photo-1542340916-951bb72c8f74?auto=format&q=75&fit=crop&w=550&h=550" loading="lazy" alt="Photo by Kaung Htet" class="h-full w-full object-cover object-center" />
        </div>

        <div class="overflow-hidden rounded-lg bg-gray-100 shadow-lg">
          <img src="https://images.unsplash.com/photo-1586295166487-b265f7e83a7f?auto=format&q=75&fit=crop&w=550&h=550" loading="lazy" alt="Photo by Manny Moreno" class="h-full w-full object-cover object-center" />
        </div>
      </div>
    </div>

    <div class="flex flex-col items-center justify-between gap-8 md:flex-row">
    </div>
  </section>
</div>





<div class="bg-white py-6 sm:py-8 lg:py-12" id="about">
  <div class="mx-auto max-w-screen-xl px-4 md:px-8">
    <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
      <div>
        <div class="h-64 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-64">
          <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600&h=750" loading="lazy" alt="Photo by Martin Sanchez" class="h-full w-full object-cover object-center" />
        </div>
      </div>

      <div class="md:pt-8">

        <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6 md:text-left">من نحن</h1>

        <p class="mb-6 text-gray-500 sm:text-lg md:mb-8 text-justify">شركة سعودية متخصصة في تقديم الخدمات الإستشارية ، لتمكين القدرات في
المنظمات والمجتمعات على السعي نحو مواكبة العالم في التطور لجميع
المجالات ، ولذلك نعمل مع عملاؤنا على تطوير منظماتهم ووضع لهم حلول
ابتكارية للتعامل مع التحديات والمصاعب</p>
      </div>
    </div>
  </div>
</div>





<div class="bg-white py-6 sm:py-8 lg:py-12" id="values">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">قيمنا</h2>

    </div>
    <!-- text - end -->

    <div class="grid gap-12 sm:grid-cols-2 xl:grid-cols-4 xl:gap-16">
      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
          </svg>
        </div>

        <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">النزاهة</h3>
        <p class="mb-2 text-center text-gray-500">نسعى دوما لنجاح عملاؤنا
ونقدم النتائج لهم ونسعى
جاهدين لتجاوز توقعاتهم</p>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
          </svg>
        </div>

        <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">التمكين</h3>
        <p class="mb-2 text-center text-gray-500">نعمل مع عملائنا جنبا لجنب
لتطوير الحلول سويا لضمان
استدامة نجاح الحلول لديه</p>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
          </svg>
        </div>

        <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">التركيز على العميل</h3>
        <p class="mb-2 text-center text-gray-500">نعمل جاهدين على الوفاء بوعودنا
ونتبنى دور الشريك الثقة لتمكين
عملاؤنا والعمل من المصلحة</p>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
          </svg>
        </div>

        <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">التميز</h3>
        <p class="mb-2 text-center text-gray-500">نسعى دوما للتحسين المستمر
من خلال البحث والتطوير وتقديم
أفضل الحلول المناسبة</p>
      </div>
      <!-- feature - end -->
    </div>
  </div>
</div>


<div class="bg-white py-6 sm:py-8 lg:py-12" id="services">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">خدماتنا</h2>
    </div>
    <!-- text - end -->

    <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-3 xl:gap-8">
      <!-- article - start -->
      <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
        <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
          <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        </a>

        <div class="flex flex-1 flex-col p-4 sm:p-6">
          <h2 class="mb-2 text-lg font-semibold text-gray-800">
            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">التخطيط الإستراتيجي</a>
          </h2>

          <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>
        </div>
      </div>
      <!-- article - end -->

      <!-- article - start -->
      <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
        <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
          <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        </a>

        <div class="flex flex-1 flex-col p-4 sm:p-6">
          <h2 class="mb-2 text-lg font-semibold text-gray-800">
            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">بناء قدرات الموارد البشرية</a>
          </h2>

          <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

          <div class="mt-auto flex items-end justify-between">
            <div class="flex items-center gap-2">
              <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                <img src="https://images.unsplash.com/photo-1586116104126-7b8e839d5b8c?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by peter bucks" class="h-full w-full object-cover object-center" />
              </div>

              <div>
                <span class="block text-indigo-500">Jane Jackobs</span>
                <span class="block text-sm text-gray-400">April 07, 2021</span>
              </div>
            </div>

            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
          </div>
        </div>
      </div>
      <!-- article - end -->

      <!-- article - start -->
      <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
        <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
          <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        </a>

        <div class="flex flex-1 flex-col p-4 sm:p-6">
          <h2 class="mb-2 text-lg font-semibold text-gray-800">
            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">التميز المؤسسي</a>
          </h2>

          <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

          <div class="mt-auto flex items-end justify-between">
            <div class="flex items-center gap-2">
              <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                <img src="https://images.unsplash.com/photo-1592660503155-7599a37f06a6?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by Jassir Jonis" class="h-full w-full object-cover object-center" />
              </div>

              <div>
                <span class="block text-indigo-500">Tylor Grey</span>
                <span class="block text-sm text-gray-400">March 15, 2021</span>
              </div>
            </div>

            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
          </div>
        </div>
      </div>
      <!-- article - end -->

      <!-- article - start -->
      <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
        <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
          <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        </a>

        <div class="flex flex-1 flex-col p-4 sm:p-6">
          <h2 class="mb-2 text-lg font-semibold text-gray-800">
            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">الإبداع وريادة الأعمال</a>
          </h2>

          <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

          <div class="mt-auto flex items-end justify-between">
            <div class="flex items-center gap-2">
              <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by Aiony Haust" class="h-full w-full object-cover object-center" />
              </div>

              <div>
                <span class="block text-indigo-500">Ann Park</span>
                <span class="block text-sm text-gray-400">January 27, 2021</span>
              </div>
            </div>

            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
          </div>
        </div>
      </div>
      <!-- article - end -->

      <!-- article - start -->
      <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
        <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
          <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        </a>

        <div class="flex flex-1 flex-col p-4 sm:p-6">
          <h2 class="mb-2 text-lg font-semibold text-gray-800">
            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">الخدمات الرقمية والتواصل الإجتماعي</a>
          </h2>

          <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

          <div class="mt-auto flex items-end justify-between">
            <div class="flex items-center gap-2">
              <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by Aiony Haust" class="h-full w-full object-cover object-center" />
              </div>

              <div>
                <span class="block text-indigo-500">Ann Park</span>
                <span class="block text-sm text-gray-400">January 27, 2021</span>
              </div>
            </div>

            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
          </div>
        </div>
      </div>
      <!-- article - end -->

      <!-- article - start -->
      <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
        <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
          <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        </a>

        <div class="flex flex-1 flex-col p-4 sm:p-6">
          <h2 class="mb-2 text-lg font-semibold text-gray-800">
            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">خدمة الامتياز التجاري ( فرنشايز )</a>
          </h2>

          <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

          <div class="mt-auto flex items-end justify-between">
            <div class="flex items-center gap-2">
              <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by Aiony Haust" class="h-full w-full object-cover object-center" />
              </div>

              <div>
                <span class="block text-indigo-500">Ann Park</span>
                <span class="block text-sm text-gray-400">January 27, 2021</span>
              </div>
            </div>

            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
          </div>
        </div>
      </div>
      <!-- article - end -->
    </div>
  </div>
</div>



<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-xl px-4 md:px-8">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">فريق ركايا</h2>
    </div>
    <!-- text - end -->

    <div class="grid grid-cols-2 gap-x-4 gap-y-6 sm:gap-y-8 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-12">
      <!-- person - start -->
      <div class="flex flex-col items-center gap-2 sm:flex-row md:gap-4">
        <div class="h-24 w-24 overflow-hidden rounded-full bg-gray-100 shadow-lg md:h-32 md:w-32">
          <img src="https://images.unsplash.com/photo-1567515004624-219c11d31f2e??auto=format&q=75&fit=crop&w=256" loading="lazy" alt="Photo by Radu Florin" class="h-full w-full object-cover object-center" />
        </div>

        <div>
          <div class="text-right font-bold text-indigo-500 sm:text-right md:text-lg">م. عمر خان</div>
          <p class="text-right text-sm text-gray-500 sm:text-right md:text-base">مدير إدارة تقنية المعلومات</p>
        </div>
      </div>
      <!-- person - end -->

      <!-- person - start -->
      <div class="flex flex-col items-center gap-2 sm:flex-row md:gap-4">
        <div class="h-24 w-24 overflow-hidden rounded-full bg-gray-100 shadow-lg md:h-32 md:w-32">
          <img src="https://images.unsplash.com/photo-1522529599102-193c0d76b5b6?auto=format&q=75&fit=crop&w=256" loading="lazy" alt="Photo by Elizeu Dias" class="h-full w-full object-cover object-center" />
        </div>

        <div>
          <div class="text-right font-bold text-indigo-500 sm:text-right md:text-lg">م. أسامة عبدالغني</div>
          <p class="text-right text-sm text-gray-500 sm:text-right md:text-base">مهندس برمجيات</p>
        </div>
      </div>
      <!-- person - end -->

      <!-- person - start -->
      <div class="flex flex-col items-center gap-2 sm:flex-row md:gap-4">
        <div class="h-24 w-24 overflow-hidden rounded-full bg-gray-100 shadow-lg md:h-32 md:w-32">
          <img src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?auto=format&q=75&fit=crop&w=256" loading="lazy" alt="Photo by Matheus Ferrero" class="h-full w-full object-cover object-center" />
        </div>

        <div>
          <div class="text-rigth font-bold text-indigo-500 sm:text-right md:text-lg">م. غيداء المغربي</div>
          <p class="text-right text-sm text-gray-500 sm:text-right md:text-base">مهندسة برمجيات</p>
        </div>
      </div>
      <!-- person - end -->
    </div>
  </div>
</div>



<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
      <h2 class="mb-2 text-center text-2xl font-bold text-gray-800 lg:mb-0 lg:text-3xl py-10">شركاء نجاحنا</h2>

    <div class="grid grid-cols-2 gap-4 rounded-lg md:grid-cols-3 lg:gap-6">
      <!-- logo - start -->
      <div class="flex h-16 items-center justify-center rounded-lg bg-gray-100 p-4 text-gray-400 sm:h-32">
        <img src="{{ URL::to('/assets/images/ektimal.png') }}" class="h-52"> 
      </div>
      <!-- logo - end -->

      <!-- logo - start -->
      <div class="flex h-16 items-center justify-center rounded-lg bg-gray-100 p-4 text-gray-400 sm:h-32">
        <img src="{{ URL::to('/assets/images/etqan.png') }}" class="h-40"> 
      </div>
      <!-- logo - end -->

      <!-- logo - start -->
      <div class="flex h-16 items-center justify-center rounded-lg bg-gray-100 p-4 text-gray-400 sm:h-32">
        <img src="{{ URL::to('/assets/images/rajhi.png') }}" class="h-16"> 
      </div>
      <!-- logo - end -->

    </div>
  </div>
</div>



<div class="bg-white pt-4 sm:pt-10 lg:pt-12">
  <footer class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <div class="flex flex-col items-center border-t pt-6">
      <!-- nav - start -->
      <nav class="mb-4 flex flex-wrap justify-center gap-x-4 gap-y-2 md:justify-start md:gap-6">
        <a href="#home" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">الصفحة الرئيسية</a>
        <a href="#about" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">من نحن</a>
        <a href="#values" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">قيمنا</a>
        <a href="#services" class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">خدماتنا</a>
      </nav>
      <!-- nav - end -->

      <!-- social - start -->
      <div class="flex gap-4">
        <a href="#" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
          <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
          </svg>
        </a>

        <a href="#" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
          <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
          </svg>
        </a>

        <a href="#" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
          <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
          </svg>
        </a>

        <a href="#" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
          <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
          </svg>
        </a>
      </div>
      <!-- social - end -->
    </div>

    <div class="py-8 text-center text-sm text-gray-400">© 2021 - Present Flowrift. All rights reserved.</div>
  </footer>
</div>
@endsection

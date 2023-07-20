@extends('layouts.guest')

@section('content')

@extends('components.loginModal')
@extends('components.registerModal')

<div class="bg-lightgray pb-6 sm:pb-8 lg:pb-12 " id="home" style="background: rgb(62,62,63);
background: linear-gradient(50deg, rgba(62,62,63,1) 0%, rgba(94,94,95,1) 39%, rgba(106,106,107,1) 53%, rgba(148,148,148,1) 75%, rgba(181,181,181,1) 85%, rgba(220,220,220,1) 92%, rgba(242,241,241,1) 100%);">
  
  <x-header/>

  <section id="home" class="w-full max-w-screen-2xl px-4 md:px-8 h-full">
    <div class="flex flex-wrap justify-between pr-10">
      <div class="flex w-full flex-col justify-center text-right h-screen lg:w-2/3">
        <h2 class="text-3xl font-bold text-lightgray sm:text-4xl md:text-5xl py-2">شركة إتقان الرقمية</h2>
        <h2 class="text-3xl font-bold text-lightgray sm:text-4xl md:text-5xl py-2">لخدمات وحلول تقنية المعلومات</h2>

        <p class="max-w-md text-lightgray xl:text-lg pt-3">استشارات - تصميم - توريد - تركيب - تدريب</p>
      </div>

      <!-- <div class="mb-12 flex w-full lg:w-2/3 mt-12">
        <div class="relative h-96 right-24 top-12 z-10 -ml-12 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:right-36 md:top-16 lg:ml-0">
          <img src="{{ URL::to('/assets/images/consulting 1.jpeg') }}" loading="lazy" alt="Photo by Kaung Htet" class="h-full w-full object-cover object-center" />
        </div>

        <div class="h-96 overflow-hidden rounded-lg bg-gray-100 shadow-lg">
          <img src="{{ URL::to('/assets/images/consulting2.jpeg') }}" loading="lazy" alt="Photo by Manny Moreno" class="h-full w-full object-cover object-center" />
        </div>
      </div>
    </div> -->

      <div class="flex flex-col items-center justify-between gap-8 md:flex-row">
      </div>
  </section>
</div>


<div class=" py-6 sm:py-8 lg:py-12" id="about">
  <div class="mx-auto max-w-screen-xl px-4 md:px-8">
    <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
      <div>
        <div class="h-64 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-64">
          <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600&h=750" loading="lazy" alt="Photo by Martin Sanchez" class="h-full w-full object-cover object-center" />
        </div>
      </div>

      <div class="md:pt-8">

        <h1 class="mb-4 text-center text-2xl font-bold text-wine sm:text-3xl md:mb-6 md:text-left"><span class="text-yellow">عن </span>شركة إتقان الرقمية</h1>

        <p class="mb-6 text-darkgray sm:text-lg md:mb-8 text-justify">من واقع خبرتنا في سوق العمل السعودي نقدم أحدث الأنظمة الأمنية والتقنيات الحديثة التي تواكب التقدم التكنولوجي من خلال فريق متخصص لتلبية متطلبات الشركات والأفراد وتطوير المجتمع</p>
      </div>
    </div>
  </div>
</div>



<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold text-wine md:mb-6 lg:text-3xl">نعمل في إتقان الرقمية على</h2>

      <p class="mx-auto max-w-screen-md text-center text-gray md:text-lg">تقديم الحلول التقنية والأمنية التي تلبي احتياجات العميل، بدءًا في تقديم الحلول المناسبة لنجمع مع خبدتنا فرصًا أكبر لتحقيق النجاحات بكفاءة والوصول لرضا عملاءنا</p>
    </div>
    <!-- text - end -->

    <div class="grid gap-12 sm:grid-cols-2 xl:grid-cols-3 xl:gap-16">
      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
          </svg>
        </div>
        <h3 class="mb-2 text-center text-lg font-bold md:text-xl text-wine">هدفنا</h3>
        <p class="mb-2 text-center text-gray">أن نقدم الخدمات والمنتجات الأمنية ذات جودة وقيمة باستخدام أفضل الأنظمة والحلول التقنية</p>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl ">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
          </svg>
        </div>
        <h3 class="mb-2 text-center text-lg font-bold md:text-xl text-wine">رؤيتنا</h3>
        <p class="mb-2 text-center text-gray">أن نكون سند وحماية تساهم في نمو ونجاح المؤسسات والشركات من خلال تقديم حلول متقنة بكفاءة عالية</p>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
          </svg>
        </div>
        <h3 class="mb-2 text-center text-lg font-bold md:text-xl text-wine">رسالتنا</h3>
        <p class="mb-2 text-center text-gray">تقديم خدمات تقنية ذات قيمة مضافة لعملائنا وحلول إبداعية تقنية مبتكرة تواكب العالم</p>
      </div>
      <!-- feature - end -->

    </div>
  </div>
</div>




<div class=" py-6 sm:py-8 lg:py-12" id="values">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold text-wine md:mb-6 lg:text-3xl">خدماتنا</h2>

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
        <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع الحكومي</h3>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
          </svg>
        </div>
        <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع الطبي</h3>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
          </svg>
        </div>
        <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع التعليمي</h3>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
          </svg>
        </div>
        <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع الجوي</h3>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
          </svg>
        </div>
        <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع المالي</h3>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
          </svg>
        </div>
        <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع التجاري</h3>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
          </svg>
        </div>
        <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع الخاص</h3>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex flex-col items-center">
        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
          </svg>
        </div>
        <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع الصناعي</h3>
      </div>
      <!-- feature - end -->
    </div>
  </div>
</div>



<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <h2 class="mb-2 text-center text-2xl font-bold text-wine lg:mb-0 lg:text-3xl py-10">شركاء نجاحنا</h2>

    <div class="grid grid-cols-2 gap-4 rounded-lg md:grid-cols-3 lg:gap-6">
      <!-- logo - start -->
      <div class="flex h-16 items-center justify-center rounded-lg bg-lightgray p-4 text-gray-400 sm:h-32">
        <img src="{{ URL::to('/assets/images/ektimal.png') }}" class="h-52">
      </div>
      <!-- logo - end -->

      <!-- logo - start -->
      <div class="flex h-16 items-center justify-center rounded-lg bg-lightgray p-4 text-gray-400 sm:h-32">
        <img src="{{ URL::to('/assets/images/full.png') }}" class="h-20">
      </div>
      <!-- logo - end -->

      <!-- logo - start -->
      <div class="flex h-16 items-center justify-center rounded-lg bg-lightgray p-4 text-gray-400 sm:h-32">
        <img src="{{ URL::to('/assets/images/rajhi.png') }}" class="h-16">
      </div>
      <!-- logo - end -->

    </div>
  </div>
</div>


<div class="  bg-wine">
  <footer class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <div class="flex flex-col items-center pt-6">
      <!-- nav - start -->
      <nav class="mb-4 flex flex-wrap justify-center gap-x-4 gap-y-2 md:justify-start md:gap-6">
        <a href="#home" class="text-lightgray transition duration-100 hover:text-yellow active:text-yellow">الصفحة الرئيسية</a>
        <a href="#about" class="text-lightgray transition duration-100 hover:text-yellow active:text-yellow">من نحن</a>
        <a href="#services" class="text-lightgray transition duration-100 hover:text-yellow active:text-yellow">خدماتنا</a>
      </nav>
      <!-- nav - end -->

      <!-- social - start -->
      <div class="flex gap-4">
        <a href="#" target="_blank" class="text-lightgray transition duration-100 hover:text-yellow active:text-yellow">
          <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
          </svg>
        </a>

        <a href="#" target="_blank" class="text-lightgray transition duration-100 hover:text-yellow active:text-yellow">
          <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
          </svg>
        </a>

        <a href="#" target="_blank" class="text-lightgray transition duration-100 hover:text-yellow active:text-yellow">
          <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
          </svg>
        </a>

        <a href="#" target="_blank" class="text-lightgray transition duration-100 hover:text-yellow active:text-yellow">
          <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
          </svg>
        </a>
      </div>
      <!-- social - end -->
    </div>

    <div class="py-8 text-center text-sm text-lightgray">© 2021 - Present Flowrift. All rights reserved.</div>
  </footer>
</div>
<script src="{{ URL::to('/assets/js/modalController.js') }}"></script>
@if($errors->has('email') || $errors->has('password')) 
<script>
const modal = localStorage.getItem('modal');
console.log(modal)



    toggleModal(modal)

</script>
@endif
@endsection


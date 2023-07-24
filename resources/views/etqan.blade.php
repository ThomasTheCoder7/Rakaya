@extends('layouts.guest')

@section('content')

<div class="bg-lightgray pb-6 sm:pb-8 lg:pb-12 " id="home"
    style="background: rgb(62,62,63);
background: linear-gradient(50deg, rgba(62,62,63,1) 0%, rgba(94,94,95,1) 39%, rgba(106,106,107,1) 53%, rgba(148,148,148,1) 75%, rgba(181,181,181,1) 85%, rgba(220,220,220,1) 92%, rgba(242,241,241,1) 100%);">


    <section id="home" class="w-full max-w-screen-2xl px-4 md:px-8 h-full">
        <div class="flex flex-wrap justify-between pr-10">
            <div class="flex w-full flex-col justify-center text-right h-screen lg:w-2/3">
                <h2 class="text-3xl font-bold text-lightgray sm:text-4xl md:text-5xl py-2">شركة إتقان الرقمية</h2>
                <h2 class="text-3xl font-bold text-lightgray sm:text-4xl md:text-5xl py-2">لخدمات وحلول تقنية المعلومات
                </h2>

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
                    <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600&h=750"
                        loading="lazy" alt="Photo by Martin Sanchez" class="h-full w-full object-cover object-center" />
                </div>
            </div>

            <div class="md:pt-8">

                <h1 class="mb-4 text-center text-2xl font-bold text-wine sm:text-3xl md:mb-6 md:text-left"><span
                        class="text-yellow">عن </span>شركة إتقان الرقمية</h1>

                <p class="mb-6 text-darkgray sm:text-lg md:mb-8 text-justify">من واقع خبرتنا في سوق العمل السعودي نقدم
                    أحدث الأنظمة الأمنية والتقنيات الحديثة التي تواكب التقدم التكنولوجي من خلال فريق متخصص لتلبية
                    متطلبات الشركات والأفراد وتطوير المجتمع</p>
            </div>
        </div>
    </div>
</div>



<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <!-- text - start -->
        <div class="mb-10 md:mb-16">
            <h2 class="mb-4 text-center text-2xl font-bold text-wine md:mb-6 lg:text-3xl">نعمل في إتقان الرقمية على</h2>

            <p class="mx-auto max-w-screen-md text-center text-gray md:text-lg">تقديم الحلول التقنية والأمنية التي تلبي
                احتياجات العميل، بدءًا في تقديم الحلول المناسبة لنجمع مع خبدتنا فرصًا أكبر لتحقيق النجاحات بكفاءة
                والوصول لرضا عملاءنا</p>
        </div>
        <!-- text - end -->

        <div class="grid gap-12 sm:grid-cols-2 xl:grid-cols-3 xl:gap-16">
            <!-- feature - start -->
            <div class="flex flex-col items-center">
                <div
                    class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h3 class="mb-2 text-center text-lg font-bold md:text-xl text-wine">هدفنا</h3>
                <p class="mb-2 text-center text-gray">أن نقدم الخدمات والمنتجات الأمنية ذات جودة وقيمة باستخدام أفضل
                    الأنظمة والحلول التقنية</p>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex flex-col items-center">
                <div
                    class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h3 class="mb-2 text-center text-lg font-bold md:text-xl text-wine">رؤيتنا</h3>
                <p class="mb-2 text-center text-gray">أن نكون سند وحماية تساهم في نمو ونجاح المؤسسات والشركات من خلال
                    تقديم حلول متقنة بكفاءة عالية</p>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex flex-col items-center">
                <div
                    class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h3 class="mb-2 text-center text-lg font-bold md:text-xl text-wine">رسالتنا</h3>
                <p class="mb-2 text-center text-gray">تقديم خدمات تقنية ذات قيمة مضافة لعملائنا وحلول إبداعية تقنية
                    مبتكرة تواكب العالم</p>
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
                <div
                    class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع الحكومي</h3>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex flex-col items-center">
                <div
                    class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع الطبي</h3>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex flex-col items-center">
                <div
                    class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع التعليمي</h3>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex flex-col items-center">
                <div
                    class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع الجوي</h3>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex flex-col items-center">
                <div
                    class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع المالي</h3>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex flex-col items-center">
                <div
                    class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع التجاري</h3>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex flex-col items-center">
                <div
                    class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-center text-lg font-semibold md:text-xl text-darkgray">القطاع الخاص</h3>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex flex-col items-center">
                <div
                    class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
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
@if(!Auth::check())
@include('components.loginModal')
@include('components.registerModal')
@endif



@endsection
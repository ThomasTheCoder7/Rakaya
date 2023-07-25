 <header class="sticky w-full top-0 py-3 bg-zinc shadow-xl">
     <div class="mx-auto flex max-w-screen-2xl items-center justify-between px-4 md:px-8">
         <!-- logo - start -->
         <a href="/" class="inline-flex items-center text-2xl font-bold text-black md:text-3xl" aria-label="logo">
             <img src="{{ URL::to('/assets/images/etqan.png') }}" class="w-32">
         </a>
         <!-- logo - end -->

         <!-- nav - start -->
         <nav class="hidden gap-12 lg:flex 2xl:ml-16 text-wine">
             <a href="#home"
                 class="text-lg font-semibold transition duration-100 hover:text-darkgray active:text-darkgray">الصفحة
                 الرئيسية</a>
             <a href="#about"
                 class="text-lg font-semibold transition duration-100 hover:text-darkgray active:text-darkgray"
                 onclick="setPadding()">من
                 نحن</a>
             <a href="#values"
                 class="text-lg font-semibold transition duration-100 hover:text-darkgray active:text-darkgray">خدماتنا</a>
         </nav>
         <!-- nav - end -->
         <!-- responsive -->
         <button data-collapse-toggle="navbar-default" type="button"
             class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
             aria-controls="navbar-default" aria-expanded="false">
             <span class="sr-only">Open main menu</span>
             <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M1 1h15M1 7h15M1 13h15" />
             </svg>
         </button>

         <!-- responsive -->
         @guest
         @if (Route::has('login'))
         <!-- buttons - start -->
         <div class="hidden gap-8 lg:flex 2xl:ml-12">
             <a class="text-lg font-semibold text-wine transition duration-100 hover:text-darkgray active:text-darkgray cursor-pointer"
                 onclick="toggleModal('registerModal')">تسجيل مستخدم جديد</a>
             <a class="text-lg font-semibold text-wine transition duration-100 hover:text-darkgray active:text-darkgray cursor-pointer	"
                 onclick="toggleModal('loginModal')">تسجيل الدخول</a>
         </div>
         @endif
         <!-- buttons - end -->
         @else
         <div class="hidden gap-8 lg:flex 2xl:ml-12">
             <a href="/profile"
                 class="text-lg font-semibold text-wine transition duration-100 hover:text-darkgray active:text-darkgray">{{Auth::user()->name}}</a>
             <a class="text-lg font-semibold text-wine transition duration-100 hover:text-darkgray active:text-darkgray"
                 href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                 تسجيل الخروج
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
         </div>
         @endguest
     </div>
 </header>

 <script>
function setPadding() {
    var values = document.getElementById("values");
    values.style.padding = "50px 0px 0px 0px";
    console.log('hhh');
}
 </script>
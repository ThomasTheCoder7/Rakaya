<header class="sticky top-0 py-3 bg-zinc shadow-xl">
    <div class="mx-auto flex max-w-screen-2xl items-center justify-between px-4 md:px-8">
        <!-- logo - start -->
        <a href="/" class="inline-flex items-center text-2xl font-bold text-black md:text-3xl" aria-label="logo">
            <img src="{{ URL::to('/assets/images/etqan.png') }}" class="w-32">
        </a>
        <!-- logo - end -->

        <!-- nav - start -->
        <nav class="hidden gap-12 lg:flex 2xl:ml-16 text-wine">
            <a href="/"
                class="text-lg font-semibold transition duration-100 hover:text-darkgray active:text-darkgray">الصفحة
                الرئيسية</a>
            <a href="#about"
                class="text-lg font-semibold transition duration-100 hover:text-darkgray active:text-darkgray">من
                نحن</a>
            <a href="#values"
                class="text-lg font-semibold transition duration-100 hover:text-darkgray active:text-darkgray">خدماتنا</a>
        </nav>
        <!-- nav - end -->
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
                                                     document.getElementById('logout-form').submit();
                                                     
                                                     ">
                تسجيل الخروج
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        @endguest
    </div>
</header>
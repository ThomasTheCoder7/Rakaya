<div id="registerModal"  class="fixed z-10 inset-0 overflow-hidden bg-black bg-opacity-50 backdrop-blur-sm hidden">
    <div class="flex justify-center items-center min-h-screen pt-4 px-4 pb-8 sm:px-6 lg:px-8">
        <div class="modal-content w-full max-w-lg bg-white rounded-lg px-5 py-8 relative shadow-lg" id='registerFormModalBody'>
            <div class="modal-header text-center flex justify-center">
                <h2 class="text-4xl font-bold leading-6 text-wine font-bold">نورتنا 👋</h2>
                <button type="button" class="absolute p-2  top-5 left-5" onclick="toggleModal('registerModal')">
                    <i class="bi bi-x-lg  text-wine text-xl  transition duartion-300 linear hover:text-rose-900"></i>
                </button>
            </div>
            <div class="modal-body text-center pt-3 mt-2">
                <form method="POST" action="{{ route('register') }}" id='registerForm'>
                @csrf
                <!-- Name -->
                    <div class="mb-6 text-end ">
                    <div id='registerForm_accountErrorContainer'>
                        </div>
                        <label for="email" class="text-wine font-bold px-2">اسم الكريم بالإنجليزي</label>
                        <div id='registerForm_nameErrorContainer'>
                        </div>
                        <input dir="ltr" type="text" id="name" name="name" value="{{ old('email') }}" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-gray-200 focus:border-wine border-3 mt-2 font-bold text-lg transition duration-300 " placeholder="Mohammad Khalid">
                    </div>
                    <!-- Email -->
                    <div class="mb-6 text-end ">
                        <label for="email" class="text-wine font-bold px-2">الايميل</label>
                        <div id='registerForm_emailErrorContainer'>
                        </div>
                        <input dir="ltr" type="email" id="email" name="email" value="{{ old('email') }}" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-gray-200 focus:border-wine border-3 mt-2 font-bold text-lg transition duration-300 " placeholder="email123@email.com">
                    </div>
                    <div class="mb-6 text-end">
                        <label for="password" class="text-wine font-bold px-2">كلمة المرور</label>
                        <div id='registerForm_passwordErrorContainer'>
                        </div>
                        <input dir='ltr' type="password" id="password" name="password" class=" bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-gray-200 focus:border-wine border-3 mt-2 font-bold text-lg transition duration-300" placeholder="XYZ1234!">
                    </div>
                    <div class="mb-6 text-end">
                        <label for="password" class="text-wine font-bold px-2">اعادة كلمة المرور</label>
                        <input dir='ltr' type="password" id="password-confirm" name="password_confirmation" class=" bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-gray-200 focus:border-wine border-3 mt-2 font-bold text-lg transition duration-300" placeholder="XYZ1234!">
                    </div>
                    <button type="submit" class="bg-wine px-5 text-white font-bold py-2 rounded-md transition duartion-300 linear hover:bg-rose-900"
                    >تسجيل</button>

                </form>
            </div>
        </div>
    </div>
</div>









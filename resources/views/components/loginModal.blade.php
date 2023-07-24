<div id="loginModal" class="fixed z-10 inset-0 overflow-hidden bg-black bg-opacity-50 backdrop-blur-sm 
hidden
">
    <div class="flex justify-center items-center min-h-screen pt-4 px-4 pb-8 sm:px-6 lg:px-8" id='loginFormModalBody'>
        <div class="modal-content w-full max-w-lg bg-white rounded-lg px-5 py-8 relative shadow-lg">
            <div class="modal-header text-center flex justify-center">
                <h2 class="text-xl lg:text-4xl font-bold leading-6 text-wine font-bold  ">اهلا بعودتك</h2>
                <button type="button" class="absolute p-2  top-5 left-5" onclick="toggleModal('loginModal')">
                    <i class="bi bi-x-lg  text-wine text-xl  transition duartion-300 linear hover:text-rose-900"></i>
                </button>
            </div>
            <div class="modal-body text-center pt-3">
                <form method="POST" action="{{ route('login') }}" id='loginForm'>
                    @csrf
                    <div class="mb-6 text-end ">
                        <div id='loginForm_accountErrorContainer'>
                        </div>

                        <label for="email" class="text-wine font-bold px-2">الايميل</label>

                        <div id='loginForm_emailErrorContainer'>
                        </div>

                        <input dir="ltr" type="email" id="loginForm_email" name="email" value="{{ old('email') }}" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-gray-200 focus:border-wine border-3 mt-2 font-bold text-lg transition duration-300 " placeholder="email123@email.com">
                    </div>
                    <div class="mb-6 text-end">
                        <label for="password" class="text-wine font-bold px-2">كلمة المرور</label>

                        <div id='loginForm_passwordErrorContainer'>
                        </div>

                        <input dir='ltr' type="password" id="loginForm_password" name="password" class=" bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-gray-200 focus:border-wine border-3 mt-2 font-bold text-lg transition duration-300" placeholder="XYZ1234!">
                    </div>
                    <div class="flex text-end items-center">
                        <input class="border-wine rounded-lg accent-wine w-5 h-5 px-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="text-wine font-bold px-2" for="remember">
                            تذكرني
                        </label>
                    </div>
                    <button type="submit" class="bg-wine my-2 px-5 text-white font-bold py-3 rounded-md transition duartion-300 linear hover:bg-rose-900">دخول</button>
                </form>
            </div>
        </div>
    </div>
</div>
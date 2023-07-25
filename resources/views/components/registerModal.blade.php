<div id="registerModal" class="fixed z-10 inset-0 bg-black bg-opacity-50 backdrop-blur-sm hidden">
    <div class="flex justify-center items-center pt-4 px-4 pb-8 sm:px-6 lg:px-8">
        <div class="modal-content w-full max-w-lg bg-white rounded-lg py-8 relative shadow-lg" id='registerFormModalBody'>
            <div class="modal-header text-center flex justify-center">
                <h2 class="text-4xl font-bold leading-6 text-wine font-bold">نورتنا 👋</h2>
                <button type="button" class="absolute p-2  top-5 left-5" onclick="toggleModal('registerModal')">
                    <i class="bi bi-x-lg  text-wine text-xl  transition duartion-300 linear hover:text-rose-900"></i>
                </button>
            </div>
            <div class="modal-body text-center mt-2 px-2">
                <form method="POST" action="{{ route('register') }}" id='registerForm' class="overflow-y-auto scrollbar w-full px-5 mt-3" style="max-height: 65vh; height:auto;" dir='ltr'>
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
                    <!-- phone -->
                    <div class="mb-6 text-end ">
                        <label for="phone" class="text-wine font-bold px-2">رقم الجوال</label>
                        <div id='registerForm_phoneErrorContainer'>
                        </div>
                        <div class="parent focus-within:border-wine flex items-center bg-white appearance-none border-2 border-gray-200 rounded w-full text-gray-700 focus:outline-none focus:bg-gray-200 focus:border-wine border-3 mt-2 font-bold text-lg transition duration-300 ">
                            <p class="h-full py-2 px-4 text-black border-r border-gray-300">+966</p>
                            <input dir="ltr" type="tel" id="phone" name="phone" value="{{ old('phone') }}" maxlength="9" class="focus:outline-none py-2 px-4 w-full" placeholder="512345678" `>
                        </div>
                    </div>
                    <!-- userType -->
                    <div class="mb-6 text-end ">
                        <label for="user_type" class="text-wine font-bold px-2">الوظيفة</label>
                        <div id='registerForm_user_typeErrorContainer'>
                        </div>

                        <div class="parent focus-within:border-wine flex items-center border-3  cursor-pointer transition duration-300 bg-white  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-gray-200 mt-2 font-bold text-lg justify-center mb-6">
                            <select name="user_type" id="user_type" class=" w-full focus:outline-none overflow-hidden" dir='rtl' onfocus='this.size=4;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                                <option disabled selected hidden>
                                    -------
                                </option>
                                <option value="consultant" class="hover:text-wine transition duration-300 font-bold">مستشار</option>
                                <option value="developer" class="hover:text-wine transition duration-300 font-bold">مطور</option>
                                <option value="client" class="hover:text-wine transition duration-300 font-bold">عميل</option>
                                <option value="intern" class="hover:text-wine transition duration-300 font-bold">متدرب</option>
                            </select>
                        </div>
                        <!-- gender -->
                        <div class="mb-6 text-end">
                            <label for="gender" class="text-wine font-bold px-2">الجنس</label>
                            <div id='registerForm_genderErrorContainer'>
                            </div>
                            <div class="parent focus-within:border-wine flex items-center border-3 cursor-pointer transition duration-300 bg-white  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 mt-2 font-bold text-lg justify-center mb-6">
                                <select name="gender" id="gender" onfocus='this.size=2;' onblur='this.size=0;' onchange='this.size=1; this.blur();' class=" w-full focus:outline-none hover: transition duration-300 overflow-hidden h-full" dir='rtl'>
                                    <option disabled selected hidden>
                                        -------
                                    </option>
                                    <option value="male" class="hover:text-wine transition duration-300 font-bold">ذكر</option>
                                    <option value="female" class="hover:text-wine transition duration-300 font-bold">انثى</option>
                                </select>
                            </div>

                        </div>

                        <!-- password -->
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
                        <button type="submit" class="bg-wine px-5 text-white font-bold py-2 rounded-md transition duartion-300 linear hover:bg-rose-900">تسجيل</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
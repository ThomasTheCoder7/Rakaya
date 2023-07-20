@inject('request', 'Illuminate\Http\Request')
<div id="loginModal" class="fixed z-10 inset-0 overflow-y-auto bg-black bg-opacity-50 backdrop-blur-sm 
hidden
">
<!-- @if(!($errors->has('email') || $errors->has('password'))) hidden @endif  -->
    <div class="flex justify-center items-center min-h-screen pt-4 px-4 pb-8 sm:px-6 lg:px-8">
        <div class="modal-content w-full max-w-lg bg-white rounded-lg px-5 py-8 relative shadow-lg">
            <div class="modal-header text-center flex justify-center">
                <h1>{{$request->route()->getName()}}</h1>
                <h2 class="text-4xl font-bold leading-6 text-wine font-bold">اهلا بعودتك 👋</h2>
                <button type="button" class="absolute p-2  top-5 left-5" onclick="toggleModal('loginModal')">
                    <i class="bi bi-x-lg  text-wine text-xl  transition duartion-300 linear hover:text-rose-900"></i>
                </button>
            </div>
            <div class="modal-body text-center pt-3">
                <form method="POST" action="{{ route('login') }}" id='loginForm'>
                    @csrf
                    <div class="mb-6 text-end ">
                        <!-- TODO: IF INCORRECT -->
                        @if($errors->has('email') && $errors->has('password'))
                        <div class="text-center font-bold text-red-500 text-xl mt-3 mb-4">
                            <h1>البريد الإلكتروني او كلمة المرور غير صحيحة</h1>
                        </div>
                        @endif
                        <label for="email" class="text-wine font-bold px-2">الايميل</label>
                        @error('email')
                        <br>
                        <strong class="text-red-500 font-bold px-2">{{ $message }}</strong>
                        @enderror
                        <input dir="ltr" type="email" id="email" name="email" value="{{ old('email') }}" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-gray-200 focus:border-wine border-3 mt-2 font-bold text-lg transition duration-300 " placeholder="email123@email.com">
                    </div>
                    <div class="mb-6 text-end">
                        <label for="password" class="text-wine font-bold px-2">كلمة المرور</label>
                        @error('password')
                        <br>
                        <strong class="text-red-500 font-bold px-2">الرجاء ادخال كلمة المرور</strong>
                        @enderror
                        <input dir='ltr' type="password" id="password" name="password" class=" bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-gray-200 focus:border-wine border-3 mt-2 font-bold text-lg transition duration-300" placeholder="XYZ1234!">
                    </div>
                    <div class="flex text-end items-center">
                        <input class="border-wine rounded-lg accent-wine w-5 h-5 px-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="text-wine font-bold px-2" for="remember">
                            تذكرني
                        </label>
                    </div>
                    <button type="submit"  class="bg-wine px-5 text-white font-bold py-2 rounded-md transition duartion-300 linear hover:bg-rose-900"
                    
                    >الدخول</button>

                </form>


            </div>
        </div>
    </div>
</div>

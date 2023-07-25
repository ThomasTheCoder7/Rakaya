@extends('layouts.guest')
@section('content')
@include('components.deleteUserModal')

<div class="flex items-center justify-content-center h-full flex-col">

    <form action="{{route('save')}}" class="" id='userProfileForm' method="POST" enctype="multipart/form-data">
        @csrf

        <h1 class="font-bold text-3xl text-center py-5 text-darkgray">الملف الشخصي</h1>
        <div class="form-group py-3">
            <label for="name" class="text-sm font-medium text-wine pl-6"><strong>الاسم
                    الكامل</strong></label>
            <input type="text" name="name" id="name" pattern="[A-Za-z]+" disabled class="rounded-md border-0 py-1.5 pl-3 pr-3 text-gray ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{Auth::user()->name}}">
        </div>
        <div class="form-group py-3">
            <label for="phone" class="text-sm font-medium text-wine pl-6"><strong>رقم الجوال</strong></label>
            <input type="text" name="phone" id="phone" maxlength="9" minlength="9" disabled class="rounded-md border-0 py-1.5 pl-3 pr-3 text-gray ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{Auth::user()->phone}}">
        </div>
        <div class="form-group py-3 flex items-center">
            <label for="user_type" class="text-sm font-medium text-wine pl-6"><strong>الوظيفة</strong></label>
            <div class="disabled parent cursor-pointer focus-within:border-wine flex items-center border-3 cursor-pointer transition duration-300 bg-white  border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 focus:outline-none focus:bg-gray-200 mt-2 font-bold text-lg justify-center mb-6">
                <select name="user_type" disabled id="user_type" class=" w-full focus:outline-none overflow-hidden cursor-pointer" dir='rtl' onfocus='this.size=4;' onblur='this.size=0;' onchange='this.size=1; this.blur();'>
                    <option hidden selected id='current_type' value='{{Auth::user()->user_type}}'>
                        
                    </option>
                    <option value="consultant" class="hover:text-wine transition duration-300 font-bold">مستشار</option>
                    <option value="developer" class="hover:text-wine transition duration-300 font-bold">مطور</option>
                    <option value="client" class="hover:text-wine transition duration-300 font-bold">عميل</option>
                    <option value="intern" class="hover:text-wine transition duration-300 font-bold">متدرب</option>
                </select>
            </div>
        </div>
        <div class="form-group pb-3">
            <label for="email" class=" text-sm font-medium leading-6 text-wine pl-2"><strong>البريد
                    الالكتروني</strong></label>
            <input type="text" name="email" id="email" disabled class=" rounded-md border-0 py-1.5 pl-3 pr-3 text-gray ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{Auth::user()->email}}">
        </div>
        <div class="form-group pb-3">
            <?php
            $url = 'storage/avatars/' . Auth::user()->id . '.png';
            ?>
            <label for="avatar" class="text-sm font-medium leading-6 text-wine pl-2"><strong>الصورة
                    الشخصية</strong></label>
            <img src="{{asset($url)}}" width="300">
            <input type="file" name="avatar" id="avatar" disabled accept="image/*" class="rounded-md border-0 py-1.5 px-3 text-gray ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
        <button type="button" id="update" class="inline-flex items-center rounded-md bg-white ml-6 px-3 py-2 text-sm font-semibold text-gray shadow-sm ring-1 ring-inset ring-gray hover:wine">
            <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400 ml-2" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
            </svg>
            تعديل البيانات الشخصية
        </button>
        <button type="submit" id="save" disabled class="disabled inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300">
            <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400 mx-2" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
            </svg>
            حفظ
        </button>
    </form>
    <div class="mt-5">
        <button class="bg-red-500 px-7 py-2 mb-5 text-bold text-white hover:bg-red-700 transition duration-300 rounded rounded-md" onclick="toggleModal('deleteUserModal')">حذف الحساب <i class="bi bi-trash-fill"></i></button>
    </div>
</div>
</div>


<script>
    const user_type_dictionary =  {"consultant":"مستشار","developer":"مطور","client":"عميل","intern":"متدرب"}
    const translate = (data)=> user_type_dictionary[data];
    document.getElementById('current_type').innerText = translate("{{Auth::user()->user_type}}")
    document.getElementById("update").addEventListener("click", function() {
        document.getElementById("name").disabled = false;
        document.getElementById("email").disabled = false;
        document.getElementById("save").disabled = false;
        document.getElementById("avatar").disabled = false;
        document.getElementById("phone").disabled = false;
        document.getElementById("user_type").disabled = false;
        document.querySelectorAll('.disabled').forEach((elem)=>{
            elem.classList.remove('disabled')
        })
    });

    document.getElementById('userProfileForm').addEventListener('submit', submitForm);

    function submitForm(e) {
        e.preventDefault();
        document.querySelectorAll('.disabled').forEach((elem)=>{
            elem.classList.add('disabled')
        })
        this.submit();
        alert('تم حفظ معلوماتك بنجاح');
        return true;
    }
</script>

@endsection
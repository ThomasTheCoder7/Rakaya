@extends('layouts.guest')

@section('content')

<x-header />
<div class="flex items-center justify-content-center h-96">
    <form action="/save" method="POST" class="">
        @csrf
        <div class=" sm:px-0">
            <h1 class="font-bold font-6xl text-darkgray">الملف الشخصي</h1>
        </div>
        <div class="form-group py-3">
            <label for="name" class="text-sm font-medium text-wine pl-6"><strong>الاسم
                    الكامل</strong></label>
            <input type="text" name="name" id="name"
                class=" rounded-md border-0 py-1.5 pl-3 pr-3 text-gray ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                value="{{Auth::user()->name}}" disabled>
        </div>
        <div class="form-group pb-3">
            <label for="email" class=" text-sm font-medium leading-6 text-wine pl-2"><strong>البريد
                    الالكتروني</strong></label>
            <input type="text" name="email" id="email"
                class=" rounded-md border-0 py-1.5 pl-3 pr-3 text-gray ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                value="{{Auth::user()->email}}" disabled>
        </div>
        <button type="button"
            class="inline-flex items-center rounded-md bg-white ml-6 px-3 py-2 text-sm font-semibold text-gray shadow-sm ring-1 ring-inset ring-gray hover:bg-wine"
            onclick="updateInfo()">
            <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400 ml-2" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path
                    d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
            </svg>
            تعديل البيانات الشخصية
        </button>
        <button type="submit" id="save"
            class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
            onclick="saveInfo()">
            <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400 mx-2" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path
                    d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
            </svg>
            حفظ
        </button>
    </form>
</div>


<script>
function updateInfo() {
    document.getElementById("name").disabled = false;
    document.getElementById("email").disabled = false;
    document.getElementById("save").disabled = false;
}

function saveInfo() {
    // document.getElementById("name").disabled = true;
    // document.getElementById("email").disabled = true;
    // document.getElementById("save").disabled = true;

    // alret("تم حفظ تغييراتك");
}
</script>

@endsection
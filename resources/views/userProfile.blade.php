@extends('layouts.guest')
@section('content')
@include('components.deleteUserModal')

<div class="flex items-center justify-content-center h-screen flex-col">
    <form action="{{route('save')}}" method="POST" class="" id='userProfileForm' enctype="multipart/form-data">
        @csrf
        <h1 class="font-bold text-3xl text-center py-5 text-darkgray">الملف الشخصي</h1>
        <div class="form-group py-3">
            <label for="name" class="text-sm font-medium text-wine pl-6"><strong>الاسم
                    الكامل</strong></label>
            <input type="text" name="name" id="name" pattern="[A-Za-z]+" disabled
                class="rounded-md border-0 py-1.5 pl-3 pr-3 text-gray ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                value="{{Auth::user()->name}}">
        </div>
        <div class="form-group pb-3">
            <label for="email" class=" text-sm font-medium leading-6 text-wine pl-2"><strong>البريد
                    الالكتروني</strong></label>
            <input type="text" name="email" id="email" disabled
                class=" rounded-md border-0 py-1.5 pl-3 pr-3 text-gray ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                value="{{Auth::user()->email}}">
        </div>
        <div class="form-group pb-3">
            <?php 
$url = 'storage/avatars/' . Auth::user()->id . '.png';
?>
            <label for="avatar" class="text-sm font-medium leading-6 text-wine pl-2"><strong>الصورة
                    الشخصية</strong></label>
            <img src="{{asset($url)}}" width="300">
            <input type="file" name="avatar" id="avatar" disabled accept="image/*"
                class="rounded-md border-0 py-1.5 px-3 text-gray ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
        <button type="button" id="update"
            class="inline-flex items-center rounded-md bg-white ml-6 px-3 py-2 text-sm font-semibold text-gray shadow-sm ring-1 ring-inset ring-gray hover:wine">
            <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400 ml-2" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path
                    d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
            </svg>
            تعديل البيانات الشخصية
        </button>
        <button type="submit" id="save" disabled
            class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300">
            <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400 mx-2" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path
                    d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
            </svg>
            حفظ
        </button>
    </form>
    <div class="mt-5">
        <button
            class="bg-red-500 px-7 py-2 mb-5 text-bold text-white hover:bg-red-700 transition duration-300 rounded rounded-md"
            onclick="toggleModal('deleteUserModal')">حذف الحساب <i class="bi bi-trash-fill"></i></button>
    </div>
</div>
</div>


<script>
document.getElementById("update").addEventListener("click", function() {
    document.getElementById("name").disabled = false;
    document.getElementById("email").disabled = false;
    document.getElementById("save").disabled = false;
    document.getElementById("avatar").disabled = false;
});

document.getElementById('userProfileForm').addEventListener('submit', submitForm);

function submitForm(e) {
    e.preventDefault();
    this.submit();
    alert('تم حفظ معلوماتك بنجاح');
    return true;
}
</script>

@endsection
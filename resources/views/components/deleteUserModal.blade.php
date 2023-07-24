<div id="deleteUserModal" class="fixed z-10 inset-0 overflow-hidden bg-black bg-opacity-50 backdrop-blur-sm hidden">
    <div class="flex justify-center items-center min-h-screen pt-4 px-4 pb-8 sm:px-6 lg:px-8">
        <div class="modal-content w-full max-w-lg bg-white rounded-lg px-5 py-8 relative shadow-lg"
            id='deleteUserFormModalBody'>
            <div class="modal-header text-center flex justify-center">
                <h2 class="text-4xl font-bold leading-6 text-wine font-bold">حذف الحساب</h2>

                <button type="button" class="absolute p-2  top-5 left-5" onclick="toggleModal('deleteUserModal')">
                    <i class="bi bi-x-lg  text-wine text-xl  transition duartion-300 linear hover:text-rose-900"></i>
                </button>
            </div>
            <div class="modal-body text-center pt-3 mt-2">
                <form action="{{route('profile.delete')}}" id='deleteUserForm'>
                    @csrf
                    @method('delete')
                    <div id='deleteUserFormErrorHeader'>
                    </div>
                    <div class="mb-6 text-end">
                        <label for="password" class="text-wine font-bold px-2">كلمة المرور</label>
                        <div id='deleteUserForm_passwordErrorContainer'>
                        </div>
                        <input dir='ltr' type="password" id="deleteUserForm_password" name="password"
                            class=" bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-gray-200 focus:border-wine border-3 mt-2 font-bold text-lg transition duration-300"
                            placeholder="XYZ1234!">
                        <button type="submit"
                            class="bg-red-500 my-4 px-5 text-white font-bold py-3 rounded-md transition duartion-300 linear hover:bg-red-700 w-full">حذف</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
const form = document.getElementById('deleteUserForm');
const styledErrorHeader = (message) =>
    `<h1 class='text-center font-bold text-red-500 text-xl mt-3 mb-4'>${message}</h1> `;
form.addEventListener('submit', submitForm)


async function submitForm(event) {
    event.preventDefault();
    var token = null;
    const formId = this.getAttribute('id');
    const inputs = this.querySelectorAll("input");
    const data = {};
    for (const input of inputs) {
        if (input.name == "_token") {
            token = input.value;
            continue;
        }
        if (input.name == '_method')
            continue;
        const name = input.name;
        //to clear all the error messages
        document.getElementById(`${formId}_${input.name}ErrorContainer`).innerHTML = "";

        const value = input.value;
        data[name] = value;
    }

    const request = await fetch(this.getAttribute("action"), {
        method: 'DELETE',
        body: JSON.stringify(data),
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-Token": token,
            Accept: "application/json",
        },
    });
    console.log(request.status);
    const response = await request.json();
    if (request.status === 200) {
        //on success
        window.location.reload();
        alert('تم حذف حسابك بنجاح');
        return;
    }
    console.log(response);
    //on failure
    shakeModal(document.getElementById(`${this.getAttribute('id')}ModalBody`));

    document.getElementById('deleteUserFormErrorHeader').innerHTML = styledErrorHeader(response.errors)

}

const shakeModal = (modal) => {
    modal.classList.add("shake");
    modal.addEventListener("animationend", () =>
        modal.classList.remove("shake")
    );
};
</script>
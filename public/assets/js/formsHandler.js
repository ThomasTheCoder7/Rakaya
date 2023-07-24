const nonErrorFields = ['remember', 'password_confirmation'];
const headerMessages = ['These credentials do not match our records.', 'The email has already been taken.']
const loginForm = document.getElementById("loginForm");
const registerForm = document.getElementById('registerForm');
const deleteUserForm = document.getElementById('deleteUserForm')
loginForm.addEventListener("submit", submitForm);
registerForm.addEventListener("submit", submitForm);



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
        const name = input.name;   
        //to clear all the error messages
        if(! nonErrorFields.includes(input.name)){
            document.getElementById(`${formId}_${input.name}ErrorContainer`).innerHTML = "";
        }
        
        const value = input.value;
        data[name] = value;
    }

    const request = await fetch(this.getAttribute("action"), {
        method: this.getAttribute("method"),
        body: JSON.stringify(data),
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-Token": token,
            Accept: "application/json",
        },
    });
    console.log(request.status);
    if (request.status === 204 || request.status === 201) {
        //on success
        window.location.reload();
        return;
    }
    //on failure
    const response = await request.json();
    shakeModal(document.getElementById(`${this.getAttribute('id')}ModalBody`));
    console.log(response)
    if ("errors" in response) {
        const entries = Object.entries(response.errors);
        displayErrors(entries,this.getAttribute('id'));
    }
}

const shakeModal = (modal) => {
    modal.classList.add("shake");
    modal.addEventListener("animationend", () =>
        modal.classList.remove("shake")
    );
};

const displayErrors = (entries,formName) => {
    const styledErrorHeader = (message)=> `<div class="text-center font-bold text-red-500 text-xl mt-3 mb-4" > <h1>${message}</h1> </div>`;
    const styledErrorMessage = (message) =>
        `<strong class="text-red-500 font-bold px-2">${message}</strong>`;

    const accountErrorContainer = document.getElementById(
        `${formName}_accountErrorContainer`
    );
    accountErrorContainer.innerHTML = "";


    if(entries[0][1] == 'The email has already been taken.'){
        accountErrorContainer.innerHTML = styledErrorHeader('هذا الايميل مستخدم مسبقا');
        return;
    }
    if (entries[0][1]=='These credentials do not match our records.') {
        accountErrorContainer.innerHTML = styledErrorHeader('الايميل او كلمة السر غير صحيحة');
        return;
    }
    //Displaying Errors

    for([key,val] of entries){
        let elem = document.getElementById(`${formName}_${key}ErrorContainer`);
        elem.innerHTML = styledErrorMessage(val);
    }
};

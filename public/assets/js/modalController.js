const toggleModal = (modalID) => {
    const modal = document.getElementById(modalID);
    localStorage.setItem("modal", modalID);
    modal.classList.toggle("hidden");
    document.body.classList.toggle("overflow-hidden");
};



"use strict"

window.addEventListener("bs-modal-hide", (event) => {
    let data = event.detail;
    const targetedModal = bootstrap.Modal.getOrCreateInstance(`#${data.name}`);
    targetedModal.hide();
});

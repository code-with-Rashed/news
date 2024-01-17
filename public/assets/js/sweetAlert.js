"use strict";

window.addEventListener("alert", (event) => {
    let data = event.detail;

    const Toast = Swal.mixin({
        toast: true,
        position: data.position ? data.position : "top-end",
        showConfirmButton: false,
        timer: data.timer ? data.timer : 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        },
    });
    Toast.fire({
        icon: data.type,
        title: data.title,
    });
});

"use strict";

function handleCkeditor(targetElement, dataAttribute, propertyName, actionButtonElement) {

    let selectedElement = document.querySelector(targetElement);
    let button = document.querySelector(actionButtonElement);

    ClassicEditor.create(selectedElement)
        .then((editor) => {
            editor.model.document.on("change:data", () => {
                button.addEventListener("click", () => {
                    let data = selectedElement.getAttribute(dataAttribute);
                    eval(data).set(propertyName, editor.getData());
                });
            });
        })
        .catch((error) => {
            console.error(error);
        });
}

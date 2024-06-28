// script.js

const icons = {
    success: '<span class="material-symbols-outlined">task_alt</span>',
    danger: '<span class="material-symbols-outlined">error</span>',
    warning: '<span class="material-symbols-outlined">warning</span>',
    info: '<span class="material-symbols-outlined">info</span>',
};

const showToast = (message = "Sample Message", toastType = "info", duration = 5000) => {
    toastType = icons[toastType] ? toastType : "info";

    const box = document.createElement("div");
    box.classList.add("toast", `toast-${toastType}`);
    box.innerHTML = `
        <div class="toast-content-wrapper">
            <div class="toast-icon">${icons[toastType]}</div>
            <div class="toast-message">${message}</div>
            <div class="toast-progress" style="animation-duration: ${duration / 1000}s;"></div>
        </div>`;

    const existingToast = document.querySelector(".toast");
    if (existingToast) {
        existingToast.remove();
    }

    document.body.appendChild(box);
};

// Function to be called inside your JS code
const triggerToast = (toastType, message) => {
    showToast(message, toastType);
};

// Example of calling the function directly in JS
// triggerToast("success", "Article Submitted Successfully");
// triggerToast("info", "Do POTD and Earn Coins");
// triggerToast("danger", "Failed unexpected error");
// triggerToast("warning", "!warning! server error");

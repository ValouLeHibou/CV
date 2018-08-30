function tchat() {
    var windows = document.getElementById("tchat");
    windows.classList.add("sneaky");
    var sneaky = document.getElementById("sneaky-header");
    sneaky.classList.remove("sneaky");
}

function koukou() {
    var windows = document.getElementById("tchat");
    windows.classList.remove("sneaky");
    var sneaky = document.getElementById("sneaky-header");
    sneaky.classList.add("sneaky");
}

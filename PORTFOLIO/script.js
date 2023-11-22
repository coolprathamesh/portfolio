function toggleMenu(){
    const menu=document.querySelector(".menu-links");
    const icon=document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
    
}
function toggleconctact(){
    const menu=document.querySelector("contact-links");
    const icon=document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
}

document.getElementById("contactButton").addEventListener("click", function() {
    document.getElementById("contactDropdown").classList.toggle("show");
});

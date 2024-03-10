function toggleSubMenu(button) {
    button.classList.toggle("active");
    let subMenu = button.nextElementSibling;
    if (subMenu.style.display === "block") {
      subMenu.style.display = "none";
    } else {
      subMenu.style.display = "block";
    }
}
"use strict";

// toggle sidebar
const sidebar = document.querySelector("#sidebar");
function toggle() {
  sidebar.classList.toggle("expand");
  if (sidebar.classList.value) {
    document.querySelector(".main").style.width = "calc(100% - 260px)";
  } else {
    document.querySelector(".main").style.width = "calc(100% - 70px)";
  }
}


// Current active page
var activePage = () => {
  const sidebar_link = document.querySelectorAll(".sidebar-link");
  for (let i = 0; i < sidebar_link.length; i++) {
    let links = sidebar_link[i].href;
    if (links == location.origin + location.pathname) {
      sidebar_link[i].classList.add("active");
    }
  }
};
activePage();

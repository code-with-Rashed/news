"use strict";

// Current active page
var activePage = () => {
  const sidebar = document.querySelectorAll(".list-group-item");
  const sidebar_link = document.querySelectorAll(".list-group-item a");
  for (let i = 0; i < sidebar_link.length; i++) {
      let links = sidebar_link[i].href;
      if(links == location.href){
        sidebar[i].classList.add("list-group-item-primary");
      }
  }
};
activePage();

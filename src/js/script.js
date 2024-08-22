const iconBars = document.querySelector(".fa-bars");
const iconTimes = document.querySelector(".fa-times");
const navMobile = document.querySelector(".c-nav-mobile");
const customContainer = document.querySelector(".c-header-container");
const mobileButtons = document.querySelector(".mobile-buttons");

window.addEventListener("scroll", function () {
  var container = document.querySelector(".c-header-container");
  if (window.scrollY > 0) {
    container.classList.add("scrolled");
  } else {
    container.classList.remove("scrolled");
  }
});

function toggleSubmenu(event, element) {
  event.preventDefault();
  const parentLi = element.parentElement;
  const iconDown = element.querySelector(".fa-angle-down");
  const iconUp = element.querySelector(".fa-angle-up");
  const isOpen = parentLi.classList.contains("is-open");

  // Referência ao cabeçalho
  const headerContainer = document.querySelector(".c-header-container");

  // Fecha todos os submenus abertos
  document.querySelectorAll(".menu-itens li").forEach((item) => {
    item.classList.remove("is-open");
    const itemLink = item.querySelector(".menu-link");
    if (itemLink) {
      const itemIconDown = itemLink.querySelector(".fa-angle-down");
      const itemIconUp = itemLink.querySelector(".fa-angle-up");
      itemIconDown.style.display = "inline";
      itemIconUp.style.display = "none";
      itemLink.style.color = "";
    }
  });

  // Se o submenu estava fechado, abre e aplica o box-shadow
  if (!isOpen) {
    parentLi.classList.add("is-open");
    iconDown.style.display = "none";
    iconUp.style.display = "inline";
    element.style.color = "#3057F2";
    headerContainer.classList.add("submenu-open"); // Adiciona a classe para aplicar o box-shadow
  } else {
    iconDown.style.display = "inline";
    iconUp.style.display = "none";
    element.style.color = "";
    headerContainer.classList.remove("submenu-open"); // Remove a classe quando o submenu fecha
  }
}

document.addEventListener("click", function (event) {
  const isClickInsideMenu = event.target.closest(".menu-itens li");
  if (!isClickInsideMenu) {
    document.querySelectorAll(".menu-itens li.is-open").forEach((item) => {
      item.classList.remove("is-open");
    });
  }
});

function openMobileMenu() {
  navMobile.classList.add("animate__slideInRight");
  navMobile.style.display = "block";
  navMobile.classList.remove("animate__slideOutRight");
  iconBars.style.display = "none";
  iconTimes.style.display = "block";
  customContainer.style["boxShadow"] = "0 0 5px #999999";
  mobileButtons.style.display = "block";
}

function closeMobileMenu() {
  navMobile.classList.add("animate__slideOutRight");
  setTimeout(() => {
    navMobile.style.display = "none";
    iconBars.style.display = "block";
    iconTimes.style.display = "none";
    customContainer.style["boxShadow"] = "none";
    mobileButtons.style.display = "none";
  }, 500);
}

function isFormPresent() {
  let hasForm = document.querySelector("#form-agendar-demo");
  let demo = document.querySelectorAll(".demo");
  if (!hasForm) {
    demo.forEach((el) => {
      el.setAttribute("href", "https://3cplusnow.com/#form-agendar-demo");
    });
  } else {
    demo.forEach((el) => {
      var formContainer = document.getElementById("form-agendar-demo");
      var navbarHeight = -280;
      var formTop = formContainer.getBoundingClientRect().top + window.scrollY;

      window.scrollTo({
        top:
          formTop -
          (window.innerHeight / 2 - formContainer.offsetHeight / 2) -
          navbarHeight,
        behavior: "smooth",
      });
    });
  }
  closeMobileMenu();
}

document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuItems = document.querySelectorAll(
    ".c-nav-mobile .menu-mobile > li"
  );

  mobileMenuItems.forEach((item) => {
    const submenuHeader = item.querySelector(".submenu-mobile-header");
    const submenu = item.querySelector(".submenu-mobile");

    submenuHeader.addEventListener("click", function () {
      // Fecha outros submenus abertos
      document.querySelectorAll(".submenu-mobile").forEach((otherSubmenu) => {
        if (otherSubmenu !== submenu) {
          otherSubmenu.style.display = "none";
          otherSubmenu.parentElement.classList.remove("menu-open");
        }
      });

      // Abre ou fecha o submenu atual
      const isOpen = submenu.style.display === "block";
      submenu.style.display = isOpen ? "none" : "block";
      item.classList.toggle("menu-open", !isOpen);
    });
  });
});

function toggleMenu(event) {
  const header = event.currentTarget;
  const submenu = header.nextElementSibling;
  const isOpen = submenu.classList.contains("submenu-open");

  document.querySelectorAll(".submenu-mobile").forEach((submenu) => {
    submenu.classList.remove("submenu-open");
  });

  document.querySelectorAll(".submenu-mobile-header").forEach((header) => {
    header.classList.remove("menu-open");
  });

  if (!isOpen) {
    submenu.classList.add("submenu-open");
    header.classList.add("menu-open");
  }
}

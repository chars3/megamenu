const iconBars = document.querySelector(".fa-bars");
const iconTimes = document.querySelector(".fa-times");

const navMobile = document.querySelector(".c-nav-mobile");
const customContainer = document.querySelector(".c-header-container");
const mobileButtons = document.querySelector(".mobile-buttons"); // Seleciona a div mobile-buttons

window.addEventListener("scroll", function () {
  var container = document.querySelector(".c-header-container");
  if (window.scrollY > 0) {
    container.classList.add("scrolled");
  } else {
    container.classList.remove("scrolled");
  }
});

//togle menu itens
function toggleSubmenu(event, element) {
  event.preventDefault();

  // Fecha todos os submenus abertos, exceto o atual
  document.querySelectorAll(".menu-itens li").forEach((item) => {
    if (item !== element.parentElement) {
      item.classList.remove("is-open");
    }
  });

  // Alterna o submenu do item clicado
  const parentLi = element.parentElement;
  parentLi.classList.toggle("is-open");
}

// Fecha o submenu ao clicar fora dele no menu desktop
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
  mobileButtons.style.display = "block"; // Exibe a div mobile-buttons
}

function closeMobileMenu() {
  navMobile.classList.add("animate__slideOutRight");
  navMobile.classList.remove("animate__slideInLeft");
  setTimeout(() => {
    navMobile.style.display = "none";
    iconBars.style.display = "block";
    iconTimes.style.display = "none";
    customContainer.style["boxShadow"] = "none";
    mobileButtons.style.display = "none"; // Esconde a div mobile-buttons
  }, 500); // Ajuste o tempo conforme a duração da animação
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
      // el.setAttribute('href', '#form-agendar-demo');
      var formContainer = document.getElementById("form-agendar-demo");
      var navbarHeight = -280;

      var formTop = formContainer.getBoundingClientRect().top + window.scrollY;

      // Ajustar a rolagem considerando a altura da navbar
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
    item.addEventListener("click", function () {
      // Fecha outros submenus abertos no menu mobile
      mobileMenuItems.forEach((otherItem) => {
        if (otherItem !== item) {
          const otherSubmenu = otherItem.querySelector(".submenu-mobile");
          if (otherSubmenu && otherSubmenu.style.display !== "none") {
            otherSubmenu.classList.add("animate__fadeOut"); // Adiciona a animação de fade out
            setTimeout(() => {
              otherSubmenu.style.display = "none";
              otherSubmenu.classList.remove(
                "animate__fadeIn",
                "animate__fadeOut"
              ); // Remove as animações para resetar o estado
            }, 500); // Deve coincidir com a duração da animação
          }
          otherItem.classList.remove("is-active");
        }
      });

      // Abre ou fecha o submenu do item clicado no menu mobile
      const submenu = item.querySelector(".submenu-mobile");
      if (submenu) {
        if (submenu.style.display === "none" || submenu.style.display === "") {
          submenu.style.display = "block"; // Mostra o submenu
          submenu.classList.remove("animate__fadeOut"); // Garante que a animação de fechar não seja aplicada
          submenu.classList.add("animate__fadeIn"); // Adiciona a animação de fade in
        }
        //  else {
        //   submenu.classList.replace("animate__fadeIn", "animate__fadeOut"); // Substitui fade in por fade out
        //   setTimeout(() => {
        //     submenu.style.display = "none"; // Esconde o submenu após a animação
        //   }, 300); // Deve coincidir com a duração da animação
        // }
      }
    });
  });

  // function normalizeUrl(url) {
  //   var urlObject = new URL(url);
  //   return urlObject.origin + urlObject.pathname;
  // }

  // let currentUrl = normalizeUrl(window.location.href);
  // let links = document.querySelectorAll(".menu-link");

  // links.forEach(function (link) {
  //   link.classList.remove("active");
  //   let linkUrl = normalizeUrl(link.href);

  //   if (currentUrl === linkUrl) {
  //     link.classList.add("active");
  //   }
  // });
});

// Quando o usuário rolar para baixo 20px do topo do documento, mostrar o botão
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//         document.getElementById("scrollToTopButton").style.display = "block";
//     } else {
//         document.getElementById("scrollToTopButton").style.display = "none";
//     }
// }

// function scrollToTop() {
//     window.scrollTo({
//         top: 0,
//         behavior: 'smooth'
//     });
// }

let demoButton = document.querySelector(".demo");

demoButton.addEventListener("click", () => {
  var formContainer = document.getElementById("form-agendar-demo");
  var navbarHeight = -280;

  var formTop = formContainer.getBoundingClientRect().top + window.scrollY;

  // Ajustar a rolagem considerando a altura da navbar
  window.scrollTo({
    top:
      formTop -
      (window.innerHeight / 2 - formContainer.offsetHeight / 2) -
      navbarHeight,
    behavior: "smooth",
  });
});

/* 
Ao clicar em submenu-mobile-header:
  - mostrar/esconder submenu-mobile-header_interno

  Ao clicar em submenu-mobile-header_interno:
  - mostrar/esconder submenu-mobile_interno


*/

// Lida com o menu principal e o submenu interno
// Para o menu externo (Produtos)
document.querySelectorAll(".submenu-mobile-header").forEach((header, index) => {
  header.addEventListener("click", () => {
    const submenu = header.nextElementSibling; // Seleciona o próximo elemento, que é o submenu

    // Verifica se o submenu contém um submenu interno
    const hasInternalHeader = submenu.querySelector(
      ".submenu-mobile-header_interno"
    );

    if (hasInternalHeader) {
      // Se houver um submenu interno, apenas alterna o submenu externo
      if (submenu.classList.contains("submenu-open")) {
        submenu.classList.remove("submenu-open");
      } else {
        submenu.classList.add("submenu-open");
      }
    } else {
      // Se não houver submenu interno, expande diretamente o submenu
      if (submenu.classList.contains("submenu-open")) {
        submenu.classList.remove("submenu-open");
      } else {
        submenu.classList.add("submenu-open");
      }
    }
  });
});

// Lida com os submenus internos, caso existam
document
  .querySelectorAll(".submenu-mobile-header_interno")
  .forEach((header) => {
    header.addEventListener("click", () => {
      const submenuInterno = header.nextElementSibling;

      // Alterna a exibição do submenu interno
      submenuInterno.classList.toggle("submenu-open");
    });
  });

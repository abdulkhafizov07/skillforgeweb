window.addEventListener("load", () => {
  document.querySelectorAll(".navbar-link").forEach((navbarLink) => {
    navbarLink.classList.remove("active");

    if (
      window.location.pathname.trim() == navbarLink.getAttribute("href").trim()
    ) {
      navbarLink.classList.add("active");
    }
  });
});

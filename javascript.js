const links = document.querySelectorAll('.link');

// Adds a class to the links i the navbar
Array.from(links).forEach((link) => {
  link.addEventListener('click', (event) => {
    link.classList.add("click-link");
  })
  link.addEventListener('', () => {
    document.link.classList.remove('click-link')
  })
});

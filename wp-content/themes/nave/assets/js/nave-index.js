document.addEventListener("DOMContentLoaded", function(e) {
  const headerToggle = document.querySelector('#headerToggleNav');
  headerToggle.addEventListener('click', (e) => {
    const nav = document.querySelector('nav');
    nav.classList.toggle('active');
  });

  const colCards = document.querySelectorAll('.col-card .img-wrapper');
  colCards.forEach((colCard) => {
    colCard.addEventListener('click', (e) => {
      const colCardImg = colCard.querySelector('img');
      colCardImg.classList.toggle('active');
    });
  });

  const main = document.querySelector('main');
  main.addEventListener('scroll', function() {
    const scroll = main.scrollTop;
    const max = main.scrollHeight;
    const perc = scroll/max*100;
    const backgroundElem = document.querySelector('.background');
    backgroundElem.style.filter = `hue-rotate(45deg), brightness(${perc/100});`;
    backgroundElem.style.backgroundPosition = `0% ${perc}%`;
  });
})


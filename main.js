function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }
  
  window.onscroll = function() {
    toggleScrollToTopButton();
  };
  
  function toggleScrollToTopButton() {
    var scrollToTopButton = document.querySelector('.scroll-to-top-btn');
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      scrollToTopButton.style.display = "block";
    } else {
      scrollToTopButton.style.display = "none";
    }
  }
  
  const slider = document.querySelector('.card-slider');
const cards = document.querySelectorAll('.card');
let currentCard = 0;

function nextCard() {
  slider.dataset.active = currentCard;
  currentCard = (currentCard + 1) % cards.length;
  cards.forEach(card => {
    card.classList.remove('active');
  });
  cards[currentCard].classList.add('active');
}

setInterval(nextCard, 5000);






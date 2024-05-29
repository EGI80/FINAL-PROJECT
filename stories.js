
<script>
const text = "Stories";
let index = 0;
const interval = 200;

  function displayText() {
    if (index < text.length) {
      document.getElementById("stories").textContent += text.charAt(index);
      index++;
      setTimeout(displayText, interval);
    }
  }

  displayText();
</script>

const burger = document.querySelector('.burger');
const navLinks = document.querySelector('.nav-links');

burger.addEventListener('click', () => {
    navLinks.classList.toggle('nav-active');

    burger.classList.toggle('toggle');
});

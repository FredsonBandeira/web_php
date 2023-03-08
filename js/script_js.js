const menu= document.querySelector('nav');

function activeScroll(){
    menu.classList.toggle('ativo', scrollY > 0);
    
}

window.addEventListener('scroll',activeScroll);

function scroll_left(){
  var left = document.querySelector("*.scrolldiv");
  //left.scrollBy(150,0);
  left.scrollBy({
      top: 0,
      left: 340,
      behavior: 'smooth'
    });
}

function scroll_right(){
  var right = document.querySelector("*.scrolldiv");
  right.scrollBy({
      top: 0,
      left: -340,
      behavior: 'smooth'
    });
}
document.querySelector('.social_icons a:first-child').addEventListener('click', function() {
    this.style.background = '#16a085';
    document.querySelector('.social_icons a:last-child').style.background = '#c4c6c7';
  });
  
  document.querySelector('.social_icons a:last-child').addEventListener('click', function() {
    this.style.background = '#16a085';
    document.querySelector('.social_icons a:first-child').style.background = '#c4c6c7';
  });
  
//fim da pagina registro


// Função para animar o scroll da página
function scrollToTop() {
  // Obtém a posição atual da página
  var currentPosition = window.pageYOffset;
  // Define o intervalo de tempo da animação (em milissegundos)
  var animationInterval = setInterval(function() {
      // Diminui a posição atual em 10 pixels a cada intervalo de tempo
      currentPosition -= 10;
      // Se a posição atual for menor ou igual a zero, para a animação
      if (currentPosition <= 0) {
          clearInterval(animationInterval);
          currentPosition = 0;
      }
      // Move a página para a posição atual
      window.scrollTo(0, currentPosition);
  }, 5); // Intervalo de 5 milissegundos
}

// Adiciona o evento de clique ao botão
document.getElementsByClassName("btnTop").addEventListener("click", scrollToTop);

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
}


const txtElement = ['TRAVEL GANTENG'];
let count = 0;
let txtIndex = 0;
let currentTxt = '';
let words = '';

(function ngetik(){

  if(count == txtElement.length){
    count = 0;
  }

  currentTxt = txtElement[count];

  words = currentTxt.slice(0, ++txtIndex);
  document.querySelector('.efek-ngetik').textContent = words;

  if(words.length == currentTxt.length){
    count++;
    txtIndex = 0;
  }

  setTimeout(ngetik, 300);

})();



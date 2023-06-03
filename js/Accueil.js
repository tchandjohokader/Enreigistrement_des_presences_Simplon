import {filtre} from './filtreXSS.js'
const input =document.querySelectorAll('input')

input.forEach(input => {
  input.addEventListener('keyup',()=>{
    if(filtre(input.value)){
      input.value=''
    }
    valider(input)
  })
});

function valider(element) {
  if(element.name !='Numero'){
    if(verif(element.value)){
      element.parentNode.childNodes[3].classList.add('afficher')
    }else{
      element.parentNode.childNodes[3].classList.remove('afficher')
    }
  }else{
    if(isNaN(element.value)){
      element.parentNode.childNodes[3].classList.add('afficher')
    }else{
      element.parentNode.childNodes[3].classList.remove('afficher')
    }
  }
}
function verif(mot){
  for (let i = 0; i < mot.length; i++) {
      if(!isNaN(mot[i]) && mot[i]!=' '){
        return true
      }
  }
}
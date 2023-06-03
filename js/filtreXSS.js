export  function filtre (valeur){
    var patterne=['<','>',';',',','script','\"','/','!','%','#','--']
    var verif=false
    patterne.forEach(e=>{
    if(valeur.match(e)){
        verif=true
    }})
    return verif
}


//récupération de tout les éléments
const form=document.querySelector("form");
const name=document.getElementsByClassName("name")[0];
const firstname=document.getElementsByClassName("firstname")[0];
const email=document.getElementsByClassName("email")[0];
const comment=document.getElementsByClassName("comment")[0];
const inputs = document.querySelectorAll("input");


//validation que l'utilisateur a rempli tout les  champs
for(let elem of inputs){
    if(elem.className!="hp"){
        elem.required=true;
    }
}

//validation du nombre de caractères de l'input
name.minLength=2;
name.maxLength=255;
firstname.minLength=2;
firstname.maxLength=255;
email.minLength=2;
email.maxLength=255;
comment.minLength=250;
comment.maxLength=1000;

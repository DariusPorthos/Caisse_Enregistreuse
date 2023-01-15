let b=document.querySelectorAll("#abc");
let valider= document.getElementById('payer')

for(let i=0;i<b.length;i++){
    b[i].addEventListener('click',function (){
        console.log("click");
        let p=document.querySelectorAll(".prix_prod");
        let prix=p[i].textContent;
        let n=document.querySelectorAll(".nom_prod");
        let nom=n[i].textContent;
        let q=document.querySelectorAll("#quantite");
        let quantite=q[i].value;
        ajouter_article(nom,prix,quantite);
        calcul_total();
    });
}

valider.addEventListener('click',function (){
   vider_panier();
});




function ajouter_article(nom_article,prix_article,quantite_article){
    let div=document.createElement('div');
    div.className="elt";
    let p_article=document.createElement('p');
    let p_prix=document.createElement('p');
    p_prix.className="p_ticket";
    let p_quantite=document.createElement('p');
    p_quantite.className="q_ticket";
    p_article.textContent=nom_article;
    p_prix.textContent=prix_article;
    p_quantite.textContent=quantite_article;
    div.append(p_article);
    div.append(p_prix);
    div.append(p_quantite);
    let bloc=document.querySelector(".panier");
    bloc.append(div);
}


function calcul_total(){
    let nb=document.querySelectorAll(".p_ticket");
    let q=document.querySelectorAll(".q_ticket");
    let res=0;
    for(let i=0;i<nb.length;i++){
        res+=nb[i].textContent.substring(0,4)*q[i].textContent;
    }
    let inserer=document.querySelector(".inserer");
    inserer.textContent=res;
}

function vider_panier(){
    let liste_achat=document.querySelectorAll('.')
}



class Personne{
    constructor(n, p, a){
        this.nom = n;
        this.prenom = p;
        this.age = a;
    }
    sePresenter(){
        document.write("Bonjour je suis "+ this.nom+" "+this.prenom+" j'ai "+ this.age + " ans <br>")
    }
}
let p1 = new Personne("Robert", "Nesla", 60);
p1.sePresenter()

class compteBancaire{
    constructor(titulaire, solde, numerotation){
        this.titulaire = titulaire;
        this.solde = solde;
        this.numerotation =numerotation;
    }
    monCompte(){
        document.write("Titulaire : "+this.titulaire+"<br> solde : "+ this.solde + "<br> numerotation : "+this.numerotation)
    }
    ajouter(somme){
    this.solde = somme + this.solde;
    document.write("solde :"  + this.solde )
    }
    retire(somme){
        if(this.solde >= somme){
          this.solde =  this.solde-somme ;
    document.write("solde :"  + this.solde )  
        }  
    
    }
}

let client = new compteBancaire ("Salimou", 1200, 6487569556444894)
client.monCompte();
client.ajouter();
client.retire();

class etudiant{
    constructor(nom, matricule, note){
        this.nom = nom;
        this.matricule = matricule;
        this.note = note;
    }
    personne(){
        document.write("<br>nom : " + this.nom +" " +"matricule :"+ this.matricule+" "+"note : " +this.note +"<br>" )
    }

}

class gestionEtudiant{
    constructor(){
        this.listeEtudiant = [];
    }
    ajouter(etudiant){
        this.listeEtudiant.push(etudiant)
        document.write(this.listeEtudiant)
    }
    moyenne(){

    }
}

let e1 = new etudiant("Salimou", "HGSZHDFHDH", 17);
let e2 = new etudiant("sd", "FGFHGFTGFJ", 10);
let e3 = new etudiant("fg", "HRSTHYTTY", 1);
let e4 = new etudiant("jk", "YTRHYRFHRF", 18);

let gestion1 = new gestionEtudiant () 
e1.personne();
e2.personne();
e3.personne();
e4.personne();

gestion1.ajouter(e1.nom+" "+e1.matricule+" "+e1.note)

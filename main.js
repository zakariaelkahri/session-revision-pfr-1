let id = 1
let validated = 0 
let pended = 0 
let rejected = 0 

let candidatures =
[

    {
        id: 1,
        nom: "Ali Benali",
        age: 20,
        projet: "Application mobile de recyclage",
        statut: "en attente" // ou "validée", "rejetée"
    },

]
 function ajouterCandidature(nom, age, projet){
   id++
   candidature = {
      id:id,
      nom: nom ,
      age: age,
      projet: projet,
      statut: "en attente"
     
   }
   candidatures.push(candidature)
   return 'condidature add successfully';

 }
   function afficherToutesLesCandidatures(){
     
     candidatures.foreach((candidature)=>{
     console.log(candidature[nom])
     })
     return ;
   }

   function validerCandidature(id){
    candidatures.foreach((candidature)=>{
       if(candidature[id] == id){
         candidature[statu] = 'validée'
       }
       })
     return 'success'
  }


   function rejeterCandidature(id){
    candidatures.foreach((candidature)=>{
       if(candidature[id] == id){
         candidature[statu] = 'rejetée'
       }
       })
     return 'success'
  }

  function rechercherCandidat(nom){
       candidatures.foreach((candidature)=>{
       if(candidature[nom] == nom){
         console.log(candidature[nom])
       }
       })
  return 'done'
  }

  function filtrerParStatut(statut){
    
    candidatures.foreach((candidature)=>{
      if(candidature[statut] == statut ){
        
        console.log(candidature[nom])
        
      }
    })
    return
  }


  function statistiques(){
    
        candidatures.foreach((candidature)=>{
      if(candidature[statut] == "en attente" ){
        pended++
      }else if(candidature[statut] == "validée"){
        validated++
      }else if(candidature[statut] == "rejetée"){
        rejected++
      }
    })
    console.log(`En attente :${pended}` )
    console.log(`Validées :${validated}` )
    console.log(`Rejetées  :${rejected}` )
  }
  



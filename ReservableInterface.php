<?php

interface ReservableInterface{
	
	public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation;
	
	
}


 abstract class Vehicule{

	protected $id;
	protected $immatriculation;
	protected $marque;
	protected $modele;
	protected $prixJour;
	protected $disponible;
	
	 public function __construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible){
	 	
	 	$this->id = $id ;
	 	$this->immatriculation = $immatriculation ;
	 	$this->marque = $marque;
	 	$this->modele = $modele;
	 	$this->prixJour = $prixJour ;
	 	$this->disponible = $$disponible;
	 	
	 }
	
	public function afficherDetails(){

        return 'Vehicule-> id ='.$this->id.', immatriculation :  '.$this->immatriculation.', marque : '.$this->marque.', modele :'.$this->modele.', prixJour : '.$this->prixJour.', disponible : '.$this->disponible. '<br>';
	
	
}
	public function calculerPrix(int $jours): float{
		
		return $this->prixJour * $jours ;
		
	}
	
	public function estDisponible(): bool{
		
		return $this->disponible ; 
		
	}

	abstract function getType():string ;
	

}

    class Voiture extends Vehicule implements ReservableInterface 
{
    
    private $nbPortes;
    private $transmission;
    
        public function __construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible,$nbPortes, $transmission) {
            
            parent::__construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible);
            $this->nbPortes = $nbPortes;
            $this->transmission = $transmission;
            
        }

        public function getType():string{
    
            return 'voiture';
            
        }

        public function afficherDetails(){

            return 'voiture details ->  nbPortes : '.$this->nbPortes.', transmission : '.$this->transmission.'<br>' ;

        }

        public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation{

            return ;
        
        }
        
        
        
    }

    class Moto extends Vehicule implements ReservableInterface 
	{
		
		private $cylindree;
		
    public function __construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible,$cylindree ) {
        
        parent::__construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible);
        $this->cylindree = $cylindree;

    }

    public function getType():string{
 
        return 'Moto';
        
    }

    public function afficherDetails(){

        return 'voiture details ->  nbPortes : '.$this->cylindree.'<br>' ;

    }

    public function reserver(Client $client, DateTime $dateDebut, int $cylindree): Reservation{

        return ;
    
    }
    
    
		
	}



    class Camion extends Vehicule implements ReservableInterface 
	{
		
		private $capaciteTonnage;
		
    public function __construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible,$capaciteTonnage ) {
        
        parent::__construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible);
        $this->capaciteTonnage = $capaciteTonnage;

    }

    public function getType():string{
 
        return 'voiture';
        
    }

    public function afficherDetails(){

        return 'voiture details ->  nbPortes : '.$this->capaciteTonnage.'<br>' ;

    }

    public function reserver(Client $client, DateTime $dateDebut, int $cylindree): Reservation{

        return ;
    
    }
    
    
		
	}


    abstract class Personne
	{
		
		protected $nom;
		protected $prenom;
		protected $email;
		
		abstract function afficherProfil();
		
		

		
	}

    class Client extends Personne
	{
		
		private $numeroClient; 
		private $reservations = [];
		
		public function __construct($nom,$prenom,$email,$numeroClient,$reservations){

			
			parent::__construct($nom,$prenom,$email);
			$this->numeroClient = $numeroClient;
			$this->reservations = $reservations;
			
		}
		
		public function ajouterReservation(Reservation $r){
			
			
			
		}
		
		
		public function afficherProfil(){
			
			
			
		}
		
		
		public function getHistorique(){
			
			
			
		}

		
		

		
	}

    class Agence
	{
		
		private $nom ;
		private $ville ;
		private $vehicules =[] ;
		private $clients = [] ;
		 
		public function __construct($nom,$ville,$vehicules,$clients){
			
			$this->nom = $nom;
			$this->ville = $ville;
			$this->vehicules = $vehicules;
			$this->clients = $clients;

			
		}
		
		public function ajouterVehicule(Vehicule $v){
			
			$this->vehicules = $v;
			
		}
		
		public function rechercherVehiculeDisponible(string $type){
		
		
			
			if($voiture->getType() == $type){
				
				// foreach($vehicules as $vehicule)
				
				
			}elseif($moto->getType() == $type){
				
				
				
			}else{
				
				
				
			}
			
	}
	
	
	}



    

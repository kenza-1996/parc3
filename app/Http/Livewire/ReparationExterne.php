<?php

namespace App\Http\Livewire;

use App\Models\Materiel;
use App\Models\Personnel;
use App\Models\Reparateur;
use App\Models\Reparations_Externe;
use App\Models\Structure;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class ReparationExterne extends Component
{
    
    use WithPagination;
    protected $paginationTheme="bootstrap";

    public $editReparation=[];
    public $newReparation=[];

    public $isBtnEditReparationClicked=false;
    public $isBtnAddReparationClicked=false;

    public $currentPage =PAGELIST;



    public function rules(){
        if($this->isBtnEditReparationClicked){

   return [ 

   
   'editReparation.designation' =>'required',
   'editReparation.date_panne' =>'required',
   'editReparation.date_retour' =>'required',
   'editReparation.date_sortie' =>'required',
  

  ];
 }
  return [ 

   
    'newReparation.designation' =>'required',
    'newReparation.etat' =>'required',
    'newReparation.date_panne' =>'required',
    'newReparation.date_sortie' =>'required',
    'newReparation.date_retour' =>'required',
    'newReparation.materiel_id' =>'required',
    'newReparation.reparateur_id' =>'required',
    'newReparation.personnel_id' =>'required',
    'newReparation.structure_id' =>'required',
   
 
  ];

    }

    public function render()
    {
        //Carbon::setLocale("fr");
        return view('livewire.reparations_externe.index',[
            "structures"=>Structure::all(),
            "materiels"=>Materiel::all(),
            "reparateurs"=>Reparateur::all(),
            "personnels"=>Personnel::all(),
            "reparations_externe" => Reparations_Externe::latest()->paginate(10)
        ])


        ->extends('layouts.master')
        ->section('contenu');
    }

    public function goToEditReparation($id){
        $this->editReparation=Reparations_Externe::find($id)->toArray();
       
          $this->isBtnEditReparationClicked=true;
      }
  
      //renvoie la page create
      public function goToAddReparation(){
            $this->isBtnAddReparationClicked=true;
  
        }
    
  
  //renvoi la page liste
      public function goToListReparation(){
          $this->isBtnEditReparationClicked=false;
          $this->isBtnAddReparationClicked=false;
      }
  
  
      //fct de modification lot 
      public function updateReparation(){
       
          // Vérifier que les informations envoyées par le formulaire sont correctes
          $validationAttributes = $this->validate();
  
  
          Reparations_Externe::find($this->editReparation["id"])->update($validationAttributes["editReparation"]);
  
          $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Reparation mis à jour avec succès!"]);
      }
  
      //fct dajout de lot 
      public function addReparation(){
          $validationAttributes = $this->validate();
  
  
          Reparations_Externe::create($validationAttributes["newReparation"]);
  
            $this->newReparation=[];
            $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Reparation cree avec succés!"]);
         }
  
  
  
  //suppression lot 
  public function confirmDelete( $id){
      $this->dispatchBrowserEvent("showConfirmMessage",[ "message"=> [
  "text" => "vous etes sur le point de supprimer la reparation $id  ! ,",
  "title"=> 'Etes-vous sur de continuer ?',
  "type"=>"warning",
  "data"=> [ "reparation_id"=> $id ],
  
  
       ] ]);  
  }
  
  public function deleteLot($id){
  Reparations_Externe::destroy($id);
  $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Reparation supprimee avec succés!"]);
  }
  
}

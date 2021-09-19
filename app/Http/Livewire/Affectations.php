<?php

namespace App\Http\Livewire;

use App\Models\Affectation;
use App\Models\Materiel;
use App\Models\Personnel;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Affectations extends Component
{
    use WithPagination;

    protected $paginationTheme="bootstrap";

    public $isBtnAddClicked=false;
    public $isBtnEditClicked=false;
 
    public $newAffectation = [];
    public $editAffectation = [];


    public function rules(){
        if($this->isBtnEditClicked){

   return [ 

   'editAffectation.dateDebut' =>'required',
   'editAffectation.materiel_id' =>'required',
   'editAffectation.personnel_id' =>'required',

  ];
 }
  return [ 

    'newAffectation.dateDebut' =>'required|date',
    'newAffectation.materiel_id' =>'required',
    'newAffectation.personnel_id' =>'required',
    
 
  ];

    }



    public function render()
    {
        return view('livewire.affectations.index',[
            "materiels"=>Materiel::where('affectation','=','0')->get(),
                                  
            "personnels"=>Personnel::all(),
            "affectations"=> Affectation::latest()->paginate(4)
        ]) 
        ->extends("layouts.master")
        ->section("contenu");
    }


    public function goToAddAffectation(){
        $this->isBtnAddClicked=true;
    }
     //renvoi la page edit 
     public function goToEditAffectation($id){
       
       
          $this->isBtnEditClicked=true;
      }

    public function goToListAffectation(){
        $this->isBtnAddClicked=false;
        $this->isBtnEditClicked=false;
    }

    public function addAffectation(){
       
       $validationAttributes= $this->validate();
       Affectation::create($validationAttributes["newAffectation"]);
       Materiel::find($this->newAffectation["materiel_id"])->update(["affectation"=>"1"]);

       $this->newAffectation=[];
       $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Affectation effectué avec succés!"]);
    }



  //fct de modification lot 
  public function updateAffectation(){
     
    // Vérifier que les informations envoyées par le formulaire sont correctes
    $validationAttributes = $this->validate();


    Affectation::find($this->editAffectation["id"])->update($validationAttributes["editAffectation"]);

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Affectation mis à jour avec succès!"]);
}


public function confirmDelete($name, $id){
  $this->dispatchBrowserEvent("showConfirmMessage",[ "message"=> [
"text" => "vous etes sur le point de supprimer cette affectation  ! ,",
"title"=> 'Etes-vous sur de continuer ?',
"type"=>"warning",
"data"=> [ "affectationid"=> $id ,"materielid"=>$name],


   ] ]);  
}



public function deleteAffectation($name,$id){
  $idmat= Materiel::find($name);
  if($idmat){
      $idmat->affectation ='0';
      $idmat->save(); 
              }

Affectation::destroy($id);

$this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Affectation supprimee avec succés!"]);
}






}

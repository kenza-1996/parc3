<?php

namespace App\Http\Livewire;

use App\Models\Reparateur;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Reparateurs extends Component
{
    use WithPagination;

    protected $paginationTheme="bootstrap";

    public $isBtnAddClicked=false;
    public $isBtnEditClicked=false;
    public $newReparateur = [];
    public $editReparateur = [];

    public function rules(){
        if($this->isBtnEditClicked){
            return  [ 
                'editReparateur.nom'=> 'required',
                'editReparateur.societe'=> 'required',
                'editReparateur.prenom'=> 'required',
                'editReparateur.email'=> ['required', 'email' , Rule::unique("reparateurs", "email")->ignore($this->editReparateur['id'])],
                'editReparateur.telephone'=> ['required', 'numeric' , Rule::unique("reparateurs", "telephone")->ignore($this->editReparateur['id'])],
                'editReparateur.adresse'=> 'required',
                'editReparateur.adresse'=> 'boolean',
                
            
            ];
        }
        return [ 
           
            'newReparateur.nom'=> 'required',
            'newReparateur.societe'=> 'required',
            'newReparateur.prenom'=> 'required',
            'newReparateur.email'=> 'required|email|unique:reparateurs,email',
            'newReparateur.telephone'=> 'required|numeric|unique:reparateurs,telephone',
            'newReparateur.adresse'=> 'required',
            
          
        
        ];
    }
    public function render()
    {
        Carbon::setLocale("fr");
        return view('livewire.reparateurs.index',[
            
            "reparateurs" => Reparateur::latest()->paginate(10)
        ])


        ->extends('layouts.master')
        ->section('contenu');
    }

    public function goToAddReparateur(){
        $this->isBtnAddClicked=true;
    }
    public function goToListReparateur(){
        $this->isBtnAddClicked=false;
        $this->isBtnEditClicked=false;
        $this->editReparateur = [];
  }


  public function goToEditReparateur($id){
    $this->editReparateur = Reparateur::find($id)->toArray();
    $this->isBtnEditClicked=true;

}
public function goTo($id){
   
        Reparateur::find($id)->update(["disponibilite"=>"1"]);
   
   
   }
   public function goToChange($id){
   
    Reparateur::find($id)->update(["disponibilite"=>"0"]);


}



public function addReparateur(){
    
    //vérifier les information envoyée  ask correctes
      $validationAttributes = $this->validate();
      
    //ajouter un nouvel utilisateur
    Reparateur::create($validationAttributes["newReparateur"]);

    $this->newReparateur = [];
   

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Reparateur créé avec succès!"]);
}


public function updateReparateur(){
    $validationAttributes = $this->validate();

    Reparateur::find($this->editReparateur["id"])->update($validationAttributes["editReparateur"]);
    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Reparateur mis à jour avec succès!"]);
}


public function confirmDelete( $id){
    $this->dispatchBrowserEvent("showConfirmMessage", ["message"=>[
    "text" => "vous etes sur le point de supprimer $id de la listes des reparateur, voulez-vous continuer",
    "title" => "Etes-vous sur de continuer?",
    "type" => "warning",
   "data" => [
       "reparateur_id" => $id
   ]

    ]]);
}


public function deleteReparateur($id){
    Reparateur::destroy($id);

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Reparateur supprimé avec succès!"]);
}




}

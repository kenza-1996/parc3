<?php

namespace App\Http\Livewire;

use App\Models\Modele;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Modeles extends Component
{ use WithPagination;
    protected $paginationTheme="bootstrap";
    
    
    public $isBtnAddClicked=false;
    public $isBtnEditClicked=false;
    public $newModel = [];
    public $editModel = [];

    public function rules(){
        if($this->isBtnEditClicked){

   return [ 

   'editModel.nom' =>['required', Rule::unique("modeles", "nom")->ignore($this->editModel['id'])],
  
 

  ];
 }
  return [ 

    'newModel.nom' =>'required|string|unique:modeles,nom',
   
    
 
  ];

    }





    public function render()
    {
        return view('livewire.modeles.index',[
            
            "modeles"=> Modele::latest()->paginate(4)
        ]) 
        ->extends("layouts.master")
        ->section("contenu");
    }

    public function goToAddModel(){
      
        $this->isBtnAddClicked=true;
    }
    //renvoi la page edit 
    public function goToEditModel($id){
        $this->editModel=Modele::find($id)->toArray();
       
          $this->isBtnEditClicked=true;
      }




    public function goToList(){
        $this->isBtnAddClicked=false;
        $this->isBtnEditClicked=false;
    }


   //fct de modification lot 
   public function updateM(){
     
    // Vérifier que les informations envoyées par le formulaire sont correctes
    $validationAttributes = $this->validate();


    Modele::find($this->editModel["id"])->update($validationAttributes["editModel"]);

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Modele mis à jour avec succès!"]);
}


    public function addM(){
         //vérifier les information envoyée  ask correctes
         $validationAttributes = $this->validate();
    

         //ajouter un nouvel utilisateur
         Modele::create($validationAttributes["newModel"]);
     
         
        $this->newModel=[];
        $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Modele cree avec succés!"]);
     }

     public function confirmDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessage",[ "message"=> [
 "text" => "vous etes sur le point de supprimer le modele $name  ! ,",
"title"=> 'Etes-vous sur de continuer ?',
"type"=>"warning",
 "data"=> [ "modelid"=> $id ],
    
    
         ] ]);  
    }

public function deleteM($id){
    Modele::destroy($id);
    $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Modele supprimee avec succés!"]);
}

}

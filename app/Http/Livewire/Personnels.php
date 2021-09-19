<?php

namespace App\Http\Livewire;

use App\Models\Personnel;
use App\Models\Structure;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Personnels extends Component
{


    use WithPagination;
    protected $paginationTheme = "bootstrap";
    
    

    public $newPersonnel = [];
    public $editPersonnel = [];
    public $isBtnAddClicked=false;
    public $isBtnEditClicked=false;


    public function render()
    {
        return view('livewire.personnels.index',[
            "structures"=>Structure::all(),
            "personnels" => Personnel::latest()->paginate(10)
        ])


        ->extends('layouts.master')
        ->section('contenu');
    }

    public function rules(){
        if($this->isBtnEditClicked){
            return  [ 
                'editPersonnel.nom'=> 'required',
                'editPersonnel.prenom'=> 'required',
                'editPersonnel.email'=> ['required', 'email' , Rule::unique("personnels", "email")->ignore($this->editPersonnel['id'])],
               
                'editPersonnel.structure_id'=> 'required',
              
                'editPersonnel.matricule'=> ['required' , Rule::unique("personnels", "pieceIdentite")->ignore($this->editPersonnel['id'])],
               
            
            ];
        }
        return [ 
            'newPersonnel.nom'=> 'required',
            'newPersonnel.prenom'=> 'required',
            'newPersonnel.email'=> 'required|email|unique:personnels,email',
          
           
            'newPersonnel.structure_id'=> 'required',
            'newPersonnel.num_bureau'=> 'required',
            'newPersonnel.matricule'=> 'required|unique:personnels,matricule'
           
        
        ];
    }

    public function goToAddPersonnel(){
          
        $this->isBtnAddClicked=true;
         
    }
    public function goToListPersonnel(){
        $this->isBtnAddClicked=false;
        $this->isBtnEditClicked=false;
        $this->editPersonnel = [];
  }
  public function goToEditPersonnel($id){
    $this->editPersonnel = Personnel::find($id)->toArray();
    $this->isBtnEditClicked=true;

}
  public function addPersonnel(){
    


    //vérifier les information envoyée  ask correctes
      $validationAttributes = $this->validate();
    

    //ajouter un nouvel utilisateur
    Personnel::create($validationAttributes["newPersonnel"]);

    $this->newPersonnel = [];
   

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Personnel créé avec succés"]);
}


public function updatePersonnel(){
    $validationAttributes = $this->validate();

    Personnel::find($this->editPersonnel["id"])->update($validationAttributes["editPersonnel"]);
    $this->dispatchBrowserEvent("showSuccessMessage" , ["message"=> "Utilisateur mis a jour avec succes"]);
}

public function confirmDelete($name, $id){
    $this->dispatchBrowserEvent("showConfirmMessage", ["message"=>[
    "text" => "vous etes sur le point de supprimer $name de la listes des utilisateur, voulez-vous continuer",
    "title" => "Etes-vous sur de continuer?",
    "type" => "warning",
   "data" => [
       "personnel_id" => $id
   ]

    ]]);
}
public function deletePersonnel($id){
    Personnel::destroy($id);

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utlisateur supprimer avec succés"]);
}
     
}


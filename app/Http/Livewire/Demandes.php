<?php

namespace App\Http\Livewire;

use App\Models\DemandeDps;

use App\Models\Materiel;


use Illuminate\Validation\Rule;
use Livewire\Component;

use Livewire\WithPagination;

class Demandes extends Component
{
    use WithPagination;
  
    protected $paginationTheme = "bootstrap";
    public $search = "";
    

    public $currentPage = PAGELIST;
    
    public $newDps = [];
    public $editDps = [];

    public function rules(){
        if($this->currentPage == PAGEEDITFORM){

   return [ 

   'editDps.num_dps' =>['required', Rule::unique("dpsdemandes", "num_dps")->ignore($this->editDps['id'])],
   'editDps.date' =>'required',
   
   

  ];
 }
  return [ 
    'newDps.num_dps' => 'required|string|unique:dpsdemandes,num_dps',
    'newDps.date' =>'required',
    'newDps.materiel1' =>'required',
    'newDps.materiel2' =>'required',
    'newDps.materiel3' =>'required',
    'newDps.traiter' =>'boolean',
  
  
  
    
    
 
  ];

    }
    public function render()
    {

        
        $searchCriteria = "%".$this->search."%";
        return view('livewire.demande.index',[
             "materiels"=>Materiel::where('etat','=','en panne')->get(),
             
             "dpsdemandes"=> DemandeDps::where("num_dps", "like", $searchCriteria )->latest()->paginate(5)
        ]) 

        ->extends("layouts.master")
        ->section("contenu");
    }
    public function goToAddDps(){
        $this->currentPage = PAGECREATEFORM;

    }

    public function goToEditDps($id){
        $this->editDps=DemandeDps::find($id)->toArray();
        $this->currentPage = PAGEEDITFORM;

    }
//renvoi la page liste
  public function goToListDps(){
    $this->currentPage = PAGELIST;
    $this->editDps = [];
    $this->newDps = [];
  }
 


    /////////
    public function goTo($id){

        DemandeDps::find($id)->update(["traiter"=>"1"]);
       }
    
 
   //fct dajout de lot 
   public function addDps(){
   
        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();


        DemandeDps::create($validationAttributes["newDps"]);

      $this->newDps=[];
      $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Dps cree avec succés!"]);
   }
  
  


    //fct de modification lot 
    public function updateMateriel(){
     
        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();


        DemandeDps::find($this->editDps["id"])->update($validationAttributes["editDps"]);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"dps mis à jour avec succès!"]);
    }
    public function confirmDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
            "text" => "Vous êtes sur le point de supprimer $name de la liste des dps. Voulez-vous continuer?",
            "title" => "Êtes-vous sûr de continuer?",
            "type" => "warning",
            "data" => [
                "dpsdemande_id" => $id
            ]
        ]]);
    }

    public function deleteDps($id){
        DemandeDps::destroy($id);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"dps supprimé avec succès!"]);
    }


}

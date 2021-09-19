<?php

namespace App\Http\Livewire;

use App\Models\BonComandes;
use App\Models\DemandeDps;
use App\Models\Materiel;
use App\Models\Reparateur;
use App\Models\Structure;


 use Barryvdh\DomPDF\Facade as PDF ;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Comandes extends Component
{
    
    use WithPagination;
  
    protected $paginationTheme = "bootstrap";
    
    
  public $isBtnClicked=false;
    public $currentPage = PAGELIST;
    
    public $newBoncomm = [];
    public $editBoncomm = [];
    public function rules(){
        if($this->currentPage == PAGEEDITFORM){

   return [ 

   'editBoncomm.num_boncom' =>['required', Rule::unique("bon_commandes", "num_boncom")->ignore($this->editBoncomm['id'])],
   'editBoncomm.materiel1' =>'required',
   'editBoncomm.materiel2' =>'required',
   'editBoncomm.materiel3' =>'required',
   'editBoncomm.prix1' =>'required',
   'editBoncomm.prix2' =>'required',
   'editBoncomm.prix3' =>'required',
   'editBoncomm.tva' =>'required',
  
   
   'editBoncomm.reparateur_id' =>'required',
   'editBoncomm.dpsdemande_id' =>'required',
   'editBoncomm.structure1' =>'required',
    'editBoncomm.structure2' =>'required',
    'editBoncomm.structure3' =>'required',
   
   
   

  ];
 }
  return [ 
    'newBoncomm.num_boncom' => 'required|string|unique:bon_commandes,num_boncom',
    'newBoncomm.reparateur_id' =>'required',
    'newBoncomm.structure1' =>'required',
    'newBoncomm.structure2' =>'required',
    'newBoncomm.structure3' =>'required',
    'newBoncomm.dpsdemande_id' =>'required',
    'newBoncomm.materiel1' =>'required',
    'newBoncomm.materiel2' =>'required',
    'newBoncomm.materiel3' =>'required',
    'newBoncomm.prix1' =>'required',
    'newBoncomm.prix2' =>'required',
    'newBoncomm.prix3' =>'required',
    'newBoncomm.tva' =>'required',
    
  
  
  
    
    
 
  ];

    }

    public function render()
    {
        return view('livewire.commandes.index',[
            "structures"=>Structure::all(),
        "reparateurs"=>Reparateur::where('disponibilite','=','0')->get(),
        "dpsdemandes"=>DemandeDps::where('traiter','=','0')->get(),
        "materiels"=>Materiel::where('etat','=','en panne')->get(),
             
        "bon_commandes"=> BonComandes::latest()->paginate(5)
        ])
        ->extends("layouts.master")
        ->section("contenu");
    }
    public function goToAddBoncomm(){
        $this->currentPage = PAGECREATEFORM;

    }

    public function goToEditBoncomm($id){
        $this->editBoncomm=BonComandes::find($id)->toArray();
        $this->currentPage = PAGEEDITFORM;
    }
    public function goToBoncomm(){
        $this->currentPage = PAGELIST;
        $this->editBoncomm = [];
        $this->newBoncomm = [];
      }
      public function goToPDF($id){
        BonComandes::find($id)->toArray();
        $this->isBtnClicked=true;
      }
      public function addBoncomm(){
   
        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();


        BonComandes::create($validationAttributes["newBoncomm"]);

      $this->newBoncomm=[];
      $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Bon de commande cree avec succés!"]);
   }
   public function updateBoncomm(){
     
    // Vérifier que les informations envoyées par le formulaire sont correctes
    $validationAttributes = $this->validate();


    BonComandes::find($this->editBoncomm["id"])->update($validationAttributes["editBoncomm"]);

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Bon de commande mis à jour avec succès!"]);
}
public function generatePDF()

{
  

        
        $bon_commandes =  BonComandes::all();
        $materiels= Materiel::all();
        $structures=Structure::all();
        $pdf= PDF::loadView('livewire.commandes.boncommand', compact('bon_commandes', 'materiels', 'structures'));
        return $pdf->download('boncommandes.pdf');
        
        
        //$structure=  Structure::all();
        //$reparat=Reparateur::where('disponibilite','=','0')->get();
       //$dpsdemande=DemandeDps::where('traiter','=','0')->get();
        //$materiel=Materiel::where('etat','=','en panne')->get();
  
      
    //view()->share('livewire.commandes.boncommand', $boncomm ,$structure ,$reparat ,$dpsdemande, $materiel);
    //$pdf= PDF::loadView('livewire.commandes.boncommand', ["bon_commandes"=>$boncomm,"structures"=>$structure,"reparateurs"=>$reparat,"dpsdemandes"=>$dpsdemande,"materiels"=>$materiel])->output();
    //return $pdf->download('boncomm.pdf');
   
    //$this ->redirect('/boncomm.pdf');
}
public function confirmDelete($name, $id){
    $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
        "text" => "Vous êtes sur le point de supprimer $name de la liste des dps. Voulez-vous continuer?",
        "title" => "Êtes-vous sûr de continuer?",
        "type" => "warning",
        "data" => [
            "bon_commande_id" => $id
        ]
    ]]);
}

public function deleteDps($id){
    BonComandes::destroy($id);

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Bon de commande supprimé avec succès!"]);
}

}
<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Lot;
use App\Models\Marque;
use App\Models\Modele;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
class Lots extends Component
{
    use WithPagination;
    protected $paginationTheme="bootstrap";

    public $byCategories=null;
    public $parPage=5;
    public $search;
    public $editLot=[];
    public $newLot=[];
    

    public $isBtnEditLotClicked=false;
    public $isBtnAddLotClicked=false;

    public $currentPage =PAGELIST;



    public function rules(){
        if($this->isBtnEditLotClicked){

   return [ 

   'editLot.num_lot' =>'required',
   'editLot.num_ao' =>'required',
   'editLot.num_ap' =>'required',
   'editLot.fournisseur' =>'required|string',
   'editLot.cout' =>'required|numeric',
   'editLot.qte' =>'required|integer',
   'editLot.modele_id' =>'required',
   'editLot.categorie_id' =>'required',
    'editLot.marque_id' =>'required',
    'editLot.dateAchat' =>'required|date',

  ];
 }
  return [ 

    'newLot.num_lot' =>'required',
    'newLot.num_ao' =>'required',
    'newLot.num_ap' =>'required',
    'newLot.fournisseur' =>'required|string',
    'newLot.cout' =>'required|numeric',
    'newLot.qte' =>'required|integer',
    'newLot.categorie_id' =>'required',
    'newLot.marque_id' =>'required',
    'newLot.modele_id' =>'required',
    'newLot.dateAchat' =>'required|date',
  ];

    }




//renvoi la liste
    public function render()
    {
        return view('livewire.lots.index',[
            "categories"=> Categorie::orderBy('nom','asc')->get(), 
            "marques" => Marque::all(),
            "modeles" => Modele::all(),
            "lots"=> Lot::when($this->byCategories,function($query){
                            $query->where('categorie_id',$this->byCategories);
            })
            ->search(trim($this->search))
            ->paginate($this->parPage)
        ]) 
        ->extends("layouts.master")
        ->section("contenu");
    }

    //renvoi la page edit 
    public function goToEditLot($id){
      $this->editLot=Lot::find($id)->toArray();
     
        $this->isBtnEditLotClicked=true;
    }

    //renvoie la page create
    public function goToAddLot(){
        
         
          $this->isBtnAddLotClicked=true;
    }
  

//renvoi la page liste
    public function goToListLot(){
        $this->isBtnEditLotClicked=false;
        $this->isBtnAddLotClicked=false;
    }


    //fct de modification lot 
    public function updateLot(){
     
        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();


        Lot::find($this->editLot["id"])->update($validationAttributes["editLot"]);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Lot mis à jour avec succès!"]);
    }

    //fct dajout de lot 
    public function addLot(){
        $validationAttributes = $this->validate();


        Lot::create($validationAttributes["newLot"]);

          $this->newLot=[];
          $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"LOT cree avec succés!"]);
       }



//suppression lot 
public function confirmDelete($name, $id){
    $this->dispatchBrowserEvent("showConfirmMessage",[ "message"=> [
"text" => "vous etes sur le point de supprimer le LOT $name  ! ,",
"title"=> 'Etes-vous sur de continuer ?',
"type"=>"warning",
"data"=> [ "lotid"=> $id ],


     ] ]);  
}

public function deleteLot($id){
Lot::destroy($id);
$this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Lot supprimee avec succés!"]);
}










}

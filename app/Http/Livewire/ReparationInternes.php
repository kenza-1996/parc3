<?php

namespace App\Http\Livewire;

use App\Models\Affectation;
use App\Models\Materiel;
use App\Models\ReparationInterne;
use Livewire\Component;
use Maatwebsite\Excel\Concerns\FormCollection;
use Maatwebsite\Excel\Facades\Excel;
use  App\Exports\ReparationInterneExports;
use Livewire\WithPagination;

class ReparationInternes extends Component
{
    use WithPagination;

    protected $paginationTheme="bootstrap";

    public $newRI = [];
    public $editRI = [];
  

    public $isBtnAddClicked=false;
    public $isBtnEditClicked=false;

    public function rules(){
        if($this->isBtnEditClicked){

   return [ 

    'newRI.datePanne' =>'required|date',
    'newRI.dateIntervention' =>'required|date',
    'newRI.materiel_id' =>'required',
    'newRI.actesExecutes' =>'required',
    'newRI.observations' =>'required',
  ];
 }
  return [ 

    'newRI.datePanne' =>'required|date',
    'newRI.dateIntervention' =>'required|date',
    'newRI.materiel_id' =>'required',
    'newRI.actesExecutes' =>'required',
    'newRI.observations' =>'required',
    
 
  ];

    }


    public function render()
    { 
        return view('livewire.reparationInternes.index',[
        "materiels"=>Materiel::where('etat','=','en panne')->get(),
        "affectations"=>Affectation::all(),
       "ReparationInternes" =>ReparationInterne ::latest()->paginate(4)        

    ]) 
    ->extends("layouts.master")
    ->section("contenu");

    }

     public function goToAddRI(){
        $this->isBtnAddClicked=true;
    }

    public function goToListRI(){
      $this->isBtnAddClicked=false;
      $this->isBtnEditClicked=false;
    }
  
    public function goToEditRI($id,$mat){
     
     
    
      
       $this->editRI=ReparationInterne::find($id)->toArray();
       $this->isBtnEditClicked=true;
    }

public function export($exl){
  return Excel::download(new ReparationInterneExports,'users.pdf');
}


    public function addReparationInterne(){
       
        $validationAttributes= $this->validate();
        ReparationInterne::create($validationAttributes["newRI"]);
        Materiel::find($this->newRI["materiel_id"])->update(["etat"=>"reparé"]);
 
        $this->newRI=[];
        $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"operation effectué avec succés!"]);
     }


}

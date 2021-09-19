<?php

namespace App\Http\Controllers;

use App\Models\BonComandes;
use App\Models\DemandeDps;
use App\Models\Materiel;
use App\Models\Reparateur;
use App\Models\Structure;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF ;

class DynamicPDFController extends Controller
{
    public function generatePDF()

    {
      

        
            $boncomm= BonComandes::latest()->paginate(1);
            $structure=  Structure::all();
            $reparat=Reparateur::where('disponibilite','=','0')->get();
           $dpsdemande=DemandeDps::where('traiter','=','0')->get();
            $materiel=Materiel::where('etat','=','en panne')->get();
      
          
        view()->share('livewire.commandes.boncommand', $boncomm ,$structure ,$reparat ,$dpsdemande, $materiel);
        $pdf= PDF::loadView('livewire.commandes.boncommand', ["bon_commandes"=>$boncomm,"structures"=>$structure,"reparateurs"=>$reparat,"dpsdemandes"=>$dpsdemande,"materiels"=>$materiel])->output();
        return response()->streamDownload(
            fn()=>print($pdf), 'boncomm.pdf'
        );
        $this ->redirect('/boncomm.pdf');
    }
}

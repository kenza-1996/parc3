<div class="content">
<div class="row mt-4" >
              <div class="col-sm-8 ">
                 <a href="#" class="btn btn-orange bg-orange" role="button" data-bs-toggle="button" wire:click.prevent="goToAddBoncomm()"  ><b> Etablir une Commande</b> <i class="fas fa-file-signature fa-2x"></i></i></a>
                 <a href="#" class="btn btn-orange bg-orange " role="button" data-bs-toggle="button" aria-pressed="true" @foreach ($bon_commandes as $bon_commande)
                     
                  wire:click.prevent='goToEditBoncomm({{$bon_commande->id}})'@endforeach> <b>Editer</b> <i class="fas fa-edit fa-2x"></i></a>
             </div>
          <div class="d-grid gap-2 d-md-flex justify-content-end col-sm-4 ">
              <button wire:click="exportPDF" class="btn btn-orange bg-orange" type="button" data-bs-toggle="button"  ><b> Exporter vers PDF   {{_('Export PDF')}}</b> <i class="fas fa-file-signature fa-2x"></i></i></button>
         </div>
        </div>
    <div class="content p-4 pt-5">
         
           
        <div class="col-12">
        
            <div class="card">
               
               <div class="card-body">
                    <div class="text-center " style="font-size:30px;"> <b>BON DE COMMANDE </b></div>
                    <hr>
                       <div class="d-flex bd-highlight">
          
                          <div class="p-3 flex-fill bd-highlight">
                            <img class="img-thumbnail md-6" src="{{asset('images/logo_sadeg_2.png')}}" style="width:30% "> 
                         </div> 
                         <div class="p-2 flex-fill  bd-highlight">
                            <div class="mt-4 "> <b>N°: @foreach ($bon_commandes as $bon_commande)
                                 {{$bon_commande->num_boncom}}
                            @endforeach </b> </div>
                         </div>    
                     </div>
                  
                  <hr>
                 
                         <div class="d-flex bd-highlight mt-4">
                               <div class="p-2 flex-fill bd-highlight px-5 float-start">
                                    <div  style="font-size:15px;"> <b> Fournisseur :  @foreach ($bon_commandes as $bon_commande)
                                        {{$bon_commande->reparateur->nom}} {{$bon_commande->reparateur->prenom}}
                                    @endforeach </b></div>
                                </div>
        
                            </div>
                            <div class="d-flex bd-highlight mt-2 ">
                               <div class="p-2 flex-fill bd-highlight px-5 float-start">
                                    <div  style="font-size:15px; "><b> Adresse :  @foreach ($bon_commandes as $bon_commande)
                                        {{$bon_commande->reparateur->adresse}} 
                                    @endforeach</b></div>
                                </div>
        
                            </div>
                            <hr>
                          <div class="bd-example">
                              <table class="table ">
                                   <thead class="table-light ">
                                      <tr >
                                          <th scope="col" >ID</th>
                                           <th scope="col " >DESIGNATION DES MATERIEL</th>
                                           
                                          <th scope="col ">PRIX TOTAL</th>
     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($bon_commandes as $bon_commande)
                                        
                                   
                                        <tr>
                                           <td></td>
                                            
                                           <td >@foreach ($materiels as $materiel )
                         @if ($materiel->id==$bon_commande->materiel1)
                         {{$materiel->codebarre}}/{{$materiel->nom}}
    
                         @endif
                       @endforeach @foreach ($structures as $structure)
                              @if ($structure->id==$bon_commande->structure1)
                                  {{$structure->nom_struct}} 
                              @endif
                          
                       @endforeach</td>
                                          
                                           <td>{{$bon_commande->prix1}}</td>
      
                                          </tr>
                                        <tr class="table-light ">
                                             <td></td>
                                             
                                              
                                             <td >@foreach ($materiels as $materiel )
                         @if ($materiel->id==$bon_commande->materiel2)
                         {{$materiel->codebarre}}/{{$materiel->nom}}
    
                         @endif
                       @endforeach  @foreach ($structures as $structure)
                              @if ($structure->id==$bon_commande->structure2)
                                  {{$structure->nom_struct}} 
                              @endif
                          
                       @endforeach</td>
                                            
                                            <td>{{$bon_commande->prix2}}</td>
     
                                          </tr>
                                          <tr class="table-light ">
                                               <td></td>
                                                
                                              <td >@foreach ($materiels as $materiel )
                         @if ($materiel->id==$bon_commande->materiel3)
                         {{$materiel->codebarre}}/{{$materiel->nom}}
    
                         @endif
                       @endforeach  @foreach ($structures as $structure)
                              @if ($structure->id==$bon_commande->structure3)
                                  {{$structure->nom_struct}} 
                              @endif
                          
                       @endforeach</td>
                                               
                                               <td>{{$bon_commande->prix3}}</td>
     
                                          </tr>
    
    
     
                                      @endforeach
                                      </tbody>
                                    </table>
                              <hr class="bg-black">
                               <div class="row ">
          
                                            <div class="col-6 px-5 float-start">
                                                  <div class="cols-2" style="margin-left:60px">
                                                      <div ><b> N° DPS : @foreach ($bon_commandes as $bon_commande )
                                                          {{$bon_commande->dpsdemande->num_dps}}
                                                      @endforeach</b> </div>
                                                      <div > <b>Date :  @foreach ($bon_commandes as $bon_commande )
                                                          {{$bon_commande->dpsdemande->date}}
                                                      @endforeach</b></div>
                                                      
                                                  </div> 
                                              </div> 
                                            <div class="col-4 px-5 float-start" >
                                                   <div class="cols-3 " style="margin-left:120px">
                                                      <div class="d-flex" ><b> HT : </b> @foreach ($bon_commandes as $bon_commande)
                                                         
                                                         {{$bon_commande->ht=$bon_commande->prix1+$bon_commande->prix2+$bon_commande->prix3}}
                                                      @endforeach </div>
                                                      <br>
                                                      <div class="d-flex" > <b>TVA : </b> @foreach ($bon_commandes as $bon_commande){{$bon_commande->tva}}@endforeach</div>
                                                      <br>
                                                      <div ><b>  TTC : @foreach ($bon_commandes as $bon_commande)
                                                         
                                                         {{$bon_commande->ttc=$bon_commande->ht+$bon_commande->tva}}
                                                      @endforeach </b> </div>
                                                    </div>
                                             </div>    
                                        </div>
                                        <hr class="bg-black">
                                         <div class="row">
                                             <div class="col-sm">factrure devra etre etablie en </div>
                                             <div class="col-sm">TAXE PERCUE</div>
                                            <div class="col-sm">SUSPENSION DE TAXE</div>
                                          </div>
                                           <hr >
                                          <div class="row">
                                             <div class="col-sm">Signture </div>
                                             <div class="col-sm"></div>
                                            <div class="col-sm">chef de service </div>
                                          </div>
                                          <div class="d-flex bd-highlight mt-5">
                <div class="p-2 flex-fill bd-highlight"></div>
                
                <div class="p-2 flex-fill bd-highlight"></div>
          </div>
                  
                          </div>
               </div>             
            </div>
        </div>
            
    </div>
</div>

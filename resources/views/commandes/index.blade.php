<div class="row  p-4 pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header  bg-orange">
                <h3 class="card-title"><b>Liste Des Materiels</b></h3>

                <div class="card-tools d-flex align-items-center">
                <a class="btn btn-link text-white mr-4 d-block bg-black bg-black" {{--wire:click.prevent='goToAddBoncomm()' ><i class="fas fa-plus-circle "--}}></i>Nouveau Materiel</a>
                  <div class="input-group input-group-md" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                     
                      <th>N° Bon Commande</th>
                      <th class="text-center">N° DPS</th>
                      <th class="text-center">Date DPS</th>
                      <th class="text-center">Designation 1</th>
                      <th class="text-center">Designation 2</th>
                      <th class="text-center">Designation 3</th>
                      <th class="text-center">Nom reparateur</th>
                      <th class="text-center">Adresse</th>
                      
                      <th class="text-center">HT</th>
                       <th class="text-center">TVA</th>
                        <th class="text-center">TTC</th>
                         <th class="text-center">Ajouté</th>
                          <th class="text-center">Action</th>
                           <th class="text-center">Exporter</th>
                    </tr>
                  </thead>


                   @foreach ($bon_commandes as $bon_commande )
                  <tbody>
                    <tr>
                      <td></td>
                      <td class="text-center">{{ $bon_commande->num_boncom }}</td>
                      <td class="text-center"> {{ $bon_commande->dpsdemande->num_dps }}</td>
                      <td class="text-center">{{$bon_commande->dpsdemande->date }}</td>

                      <td class="text-center"> @foreach ($materiels as $materiel )
                         @if ($materiel->id==$bon_commande->materiel1)
                         C/B:{{$materiel->codebarre}}  / {{$materiel->nom}}
    
                         @endif @endforeach prix: {{$bon_commande->prix1}} structure: @foreach ($structures as $structure)
                              @if ($structure->id==$bon_commande->structure1)
                                  {{$structure->nom_struct}} 
                              @endif
                          
                       @endforeach</td>
                      <td class="text-center">@foreach ($materiels as $materiel )
                         @if ($materiel->id==$bon_commande->materiel2)
                         C/B:{{$materiel->codebarre}}  / {{$materiel->nom}}
    
                         @endif @endforeach prix: {{$bon_commande->prix2}} structure: @foreach ($structures as $structure)
                              @if ($structure->id==$bon_commande->structure2)
                                  {{$structure->nom_struct}} 
                              @endif
                          
                       @endforeach</td>
                      <td class="text-center"> @foreach ($materiels as $materiel )
                         @if ($materiel->id==$bon_commande->materiel3)
                         C/B:{{$materiel->codebarre}}  / {{$materiel->nom}}
    
                         @endif @endforeach  Prix: {{$bon_commande->prix3}} structure: @foreach ($structures as $structure)
                              @if ($structure->id==$bon_commande->structure3)
                                  {{$structure->nom_struct}} 
                              @endif
                          
                       @endforeach</td>
                      <td class="text-center">{{ $bon_commande->reparateur->nom}}{{ $bon_commande->reparateur->prenom}}</td>
                         <td class="text-center">{{ $bon_commande->reparateur->adresse }}</td> 
                          <td>{{$bon_commande->ht=$bon_commande->prix1+$bon_commande->prix2+$bon_commande->prix3}}</td>            
                           <td> {{$bon_commande->tva}}</td>

                            <td> {{$bon_commande->ttc=$bon_commande->ht+$bon_commande->tva}}</td>
                             <td class="text-center"><span class="tag tag-success">{{ $bon_commande->created_at->diffForHumans() }}</span></td>

                      {{--<td class="text-center">
                      <button class="btn btn-link bg-orange" wire:click.prevent='goToEditBoncomm({{$bon_commande->id}})'><i class="far fa-edit"></i></button> 
                      <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{$bon_commande->id}}')" ><i class="far fa-trash-alt"></i></button>
                      
                      </td>
                      <td><div class="d-flex justify-content-end mb-4">
            <a wire:click='generatePDF({{$bon_commande->id}})'class="btn btn-primary" href="#">Export to PDF</a>
        </div>
        </td>--}}
                    </tr>
                    @endforeach
                </tbody>



                       

                  
                </table>
              </div>
              <!-- /.card-body -->
            
             <div class ="card-footer">
                 <div class="float-right"> 
                {{ $bon_commandes->links() }}
                 </div>

              </div>
              <!-- /.card -fotter-->

             <!-- /.card -->

   
             </div>
          </div>
</div>
{{--
  <div>
  <h2 class="text-gray-dark  text-center md-3">Liste des Bon de Commande</h2>
   </div>
    <div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-orange d-flex align-items-center">
                <h3 class="card-title flex-grow-1"> <i class="fas fa-users fa-2x"></i> Liste des Bon de Commandes</h3>

                <div class="card-tools d-flex align-items-center">
                  <a class="btn btn-link text-white mr-4 d-block bg-black" wire:click.prevent="goToAddBoncomm()"> <i class="fas fa-user-plus"></i>
                  Nouvel Bon Commande</a>

                  <div class="input-group input-group-md" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                    
                     
                      <th style="width:25% ;"class="text-center">N° Bon Comande</th>
                      <th style="width:25% ;"class="text-center">N° DPS</th>
                      <th style="width:25% ;"class="text-center">Date DPS</th>
                      
                      <th style="width:25% ;"class="text-center">Designation 1</th>
                       <th style="width:25% ;"class="text-center">Designation 2</th>
                       
                     
                      <th style="width:25% ;"class="text-center">Designation 3</th>
                       <th style="width:25% ;"class="text-center">Nom Reparateur</th>
                      <th style="width:25% ;"class="text-center">Adresse Reparateur</th>
                      <th style="width:25% ;"class="text-center">HT</th>
                      <th style="width:25% ;"class="text-center">TVA</th>
                      <th style="width:25% ;"class="text-center">TTC</th>
                      
                    

                      <th style="width:20% ;"class="text-center">Ajouté</th>
                      <th style="width:30%;"class="text-center">Action</th>
                      
                    </tr>
                    
                  </thead>
                  <tbody>
                  @foreach ($bon_commandes as $bon_commande)
                    
                  
                    <tr>
                    <td class="text-center"> {{ $bon_commande->num_boncom }}</td>
                     
                      
                      <td class="text-center">
                         {{ $bon_commande->dpsdemande->num_dps }}
                      </td>
                      <td class="text-center"> {{$bon_commande->dpsdemande->date }}</td>
                       <td class="text-center"> @foreach ($materiels as $materiel )
                         @if ($materiel->id==$bon_commande->materiel1)
                         C/B:{{$materiel->codebarre}}  / {{$materiel->nom}}
    
                         @endif prix: {{$bon_commande->prix1}} structure: @foreach ($structures as $structure)
                              @if ($structure->id==$bon_commande->structure1)
                                  {{$structure->nom_struct}} 
                              @endif
                          
                       @endforeach</td>
                      
                          <td class="text-center"> @foreach ($materiels as $materiel )
                         @if ($materiel->id==$bon_commande->materiel2)
                         C/B:{{$materiel->codebarre}}  / {{$materiel->nom}}
    
                         @endif prix: {{$bon_commande->prix1}} structure: @foreach ($structures as $structure)
                              @if ($structure->id==$bon_commande->structure2)
                                  {{$structure->nom_struct}} 
                              @endif
                          
                       @endforeach</td>
                         <td class="text-center"> @foreach ($materiels as $materiel )
                         @if ($materiel->id==$bon_commande->materiel3)
                         C/B:{{$materiel->codebarre}}  / {{$materiel->nom}}
    
                         @endif prix: {{$bon_commande->prix1}} structure: @foreach ($structures as $structure)
                              @if ($structure->id==$bon_commande->structure3)
                                  {{$structure->nom_struct}} 
                              @endif
                          
                       @endforeach</td>
                         <td class="text-center"> {{ $bon_commande->reparateur->nom}}{{ $bon_commande->reparateur->prenom}}</td>
                          <td class="text-center"> {{ $bon_commande->reparateur->adresse }}</td>
                          <td>
                       
                        {{$bon_commande->ht=$bon_commande->prix1+$bon_commande->prix2+$bon_commande->prix3}}
                       
                       </td>
                         <td> {{$bon_commande->tva}}</td> 
                          
                         
                        <td> {{$bon_commande->ttc=$bon_commande->ht+$bon_commande->tva}}</td>
                     
                      <td class="text-center"><span class="tag tag-success">{{ $bon_commande->created_at->diffForHumans() }}</span></td>
                      <td class="text-center">
                      <button class="btn btn-link bg-orange" wire:click="goToEditBoncomm({{$bon_commande->id}})"><i class="far fa-edit"></i></button>
                      <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{$bon_commande->id}}')"><i class="far fa-trash-alt"></i></button>
                      </td>
                    </tr>
                   
                   
                     
                   
                    
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

             <div  class="card-footer">
                <div class="float-right">
                 {{$bon_commandes-> links()}}
                </div>
             </div>

            </div>
            <!-- /.card -->
          </div>
        </div>
       


</div>
</div>
--}}
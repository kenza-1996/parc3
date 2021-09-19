<div class="row p-5 pt-6">
 <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title"><b>Editer le bon de Commande </b></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent='updateBoncomm()' method="POST">

                <div class="card-body">
                <div class="form-group flex-grow-1 mr-2">
                  <div class="form-group">
                   <label for="exampleSelectRounded0">N° BON DE COMMANDE</label>
                   <input class="form-control" type="text" placeholder="tapez ici" wire:model='editBoncomm.num_boncom'class='form-control @error('editBoncomm.num_boncom') is-invalid @enderror'>
                   @error('editBoncomm.num_boncom') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                  </div>

  <div class="form-group">
                    <label for="exampleSelectRounded0">Fournisseur</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editBoncomm.reparateur_id'>
                             <option>select one </option>
                              @foreach ($reparateurs as $reparateur)
                               @if ($reparateur->disponibilite== "0")
                                    <option value="{{$reparateur->id}}">{{$reparateur->nom}} {{$reparateur->prenom}}</option>
                               @endif
                   
                     
                    @endforeach
                  </select>
                  </div>
                   <div class="form-group">
                    <label for="exampleSelectRounded0">Adresse</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editBoncomm.reparateur_id'>
                             <option>select one </option>
                               @foreach ($reparateurs as $reparateur)
                    <option value="{{$reparateur->id}}">{{$reparateur->adresse}} </option>  
                    @endforeach
                  </select>
                  </div>
                <div class="d-flex">
                   <div class="form-group flex-grow-1 mr-2">
                    <label for="exampleSelectRounded0">materiel 1</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editBoncomm.materiel'>
                             <option>select one </option>
                              @foreach ($materiels as $materiel)
                    <option value="{{$materiel->id}}">{{$materiel->nom}}   C/B {{$materiel->codebarre}}  N/S  {{$materiel->num_serie}}</option>  
                    @endforeach
                  </select>
                  </div>
                   <div class="form-group flex-grow-1 mr-2">
                    <label for="exampleSelectRounded0">Structure</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editBoncomm.structure1'>
                             <option>select one </option>
                               @foreach ($structures as $structure)
                    <option value="{{$structure->id}}">{{$structure->nom_struct}}</option>  
                    @endforeach
                  </select>
                  </div>
                   <div class="form-group flex-grow-1">
                   <label for="exampleSelectRounded0">Prix </label>
                   <input class="form-control" type="text" placeholder="tapez ici" wire:model='editBoncomm.prix1'class='form-control @error('editBoncomm.prix1') is-invalid @enderror'>
                   @error('editBoncomm.prix1') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                  </div>
                </div>  
                 <div class="d-flex">
                   <div class="form-group flex-grow-2">
                    <label for="exampleSelectRounded0">materiel 2</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editBoncomm.materie2'>
                             <option>select one </option>
                                  @foreach ($materiels as $materiel)
                    <option value="{{$materiel->id}}">{{$materiel->nom}} C/B{{$materiel->codebarre}} N/S{{$materiel->num_serie}}</option>  
                    @endforeach
                  </select>
                  </div>
                   <div class="form-group flex-grow-1 mr-2">
                    <label for="exampleSelectRounded0">Structure</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editBoncomm.structure2'>
                             <option>select one </option>
                               @foreach ($structures as $structure)
                    <option value="{{$structure->id}}">{{$structure->nom_struct}}</option>  
                    @endforeach
                  </select>
                  </div>
                   <div class="form-group flex-grow-1">
                   <label for="exampleSelectRounded0">Prix </label>
                   <input class="form-control" type="text" placeholder="tapez ici" wire:model='editBoncomm.prix2'class='form-control @error('editBoncomm.prix2') is-invalid @enderror'>
                   @error('editBoncomm.prix2') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                  </div>
                </div>
                <div class="d-flex">
                  <div class="form-group flex-grow-2">
                    <label for="exampleSelectRounded0">materiel 3</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editBoncomm.materie3'>
                             <option>select one </option>
                                 @foreach ($materiels as $materiel)
                    <option value="{{$materiel->id}}">{{$materiel->nom}} C/B{{$materiel->codebarre}} N/S{{$materiel->num_serie}}</option>  
                    @endforeach
                  </select>
                  </div>
                   <div class="form-group flex-grow-1 mr-2">
                    <label for="exampleSelectRounded0">Structure</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editBoncomm.structure3'>
                             <option>select one </option>
                               @foreach ($structures as $structure)
                    <option value="{{$structure->id}}">{{$structure->nom_struct}}</option>  
                    @endforeach
                  </select>
                  </div>
                   <div class="form-group flex-grow-1">
                   <label for="exampleSelectRounded0">Prix </label>
                   <input class="form-control" type="text" placeholder="tapez ici" wire:model='editBoncomm.prix3'class='form-control @error('editBoncomm.prix3') is-invalid @enderror'>
                   @error('editBoncomm.prix3') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                  </div>
                 </div>  
                   <div class="form-group">
                    <label for="exampleSelectRounded0">N° DPS</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editBoncomm.dpsdemande_id'>
                             <option>select one </option>
                               @foreach ($dpsdemandes as $dpsdemande)
                    <option value="{{$dpsdemande->id}}">{{$dpsdemande->num_dps}}</option>  
                    @endforeach
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectRounded0">Date DPS</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editBoncomm.dpsdemande_id'>
                             <option>select one </option>
                               @foreach ($dpsdemandes as $dpsdemande)
                    <option value="{{$dpsdemande->id}}">{{$dpsdemande->date}}</option>  
                    @endforeach
                  </select>
                  </div>
                     <div class="form-group flex-grow-1 mr-2">
                  <div class="form-group">
                   <label for="exampleSelectRounded0">TVA</label>
                   <input class="form-control" type="text" placeholder="tapez ici" wire:model='editBoncomm.tva'class='form-control @error('editBoncomm.tva') is-invalid @enderror'>
                   @error('editBoncomm.tva') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                  </div>
                  
                  
                 </div>
                       <div  class="float-right">
                         <button type="submit" class="btn btn-primary btn-sm">AJOUTER</button>
                         <button type="button" class="btn btn-warning btn-sm"  wire:click.prevent='goToBoncomm()'>ANNULER</button>
                       </div> 
                <!-- /.card-body -->

              
              </form>
            </div>
            <!-- /.card -->

           
           

          </div>



</div>
 
  
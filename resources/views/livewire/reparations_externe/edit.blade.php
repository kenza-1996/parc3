<div class="row p-4 pt-5">
          <div class="col-8">
            <div class="card">



              <div class="card-header  bg-orange">
                <h3 class="card-title">Modifier Les informations du reparation</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form class="form-horizontal" wire:submit.prevent="updateReparation()">
                <div class="card-body ">
                
                  
                   <div class="form-group">
                  <label class="col-sm-5 col-form-label" >N° serie </label>
                  <select class="custom-select form-control-border border-width-2"  style="width: 40%" wire:model='editReparation.materiel_id'>
                     @foreach ($materiels as $materiel)
                        <option value="{{$materiel->id}}">{{$materiel->num_serie}}</option>  
                     @endforeach
                    
                  </select>
                </div>
                  <div class="form-group">
                  <label class="col-sm-5 col-form-label" >Code barre </label>
                  <select class="custom-select form-control-border border-width-2"  style="width: 40%" wire:model='editReparation.materiel_id'>
                     @foreach ($materiels as $materiel)
                        <option value="{{$materiel->id}}">{{$materiel->codebarre}}</option>  
                     @endforeach
                    
                  </select>
                </div>
                   <div class="form-group">
                  <label class="col-sm-5 col-form-label" >Nom personnel</label>
                  <select class="custom-select form-control-border border-width-2"  style="width: 40%" wire:model='editReparation.personnel_id'>
                     @foreach ($personnels as $personnel)
                        <option value="{{$personnel->id}}">{{$personnel->nom}}</option>  
                     @endforeach
                    
                  </select>
                </div>
                  <div class="form-group">
                  <label class="col-sm-5 col-form-label" >Prenom personnel </label>
                  <select class="custom-select form-control-border border-width-2"  style="width: 40%" wire:model='editReparation.personnel_id'>
                     @foreach ($personnels as $personnel)
                        <option value="{{$personnel->id}}">{{$personnel->prenom}}</option>  
                     @endforeach
                    
                  </select>
                </div>
                   <div class="form-group">
                  <label class="col-sm-5 col-form-label" >Nom reparateur </label>
                  <select class="custom-select form-control-border border-width-2"  style="width: 40%" wire:model='editReparation.reparateur_id'>
                     @foreach ($reparateurs as $reparateur)
                        <option value="{{$reparateur->id}}">{{$reparateur->nom}}</option>  
                     @endforeach
                    
                  </select>
                </div>
                  <div class="form-group">
                  <label class="col-sm-5 col-form-label" >Prenom reparateur </label>
                  <select class="custom-select form-control-border border-width-2"  style="width: 40%" wire:model='editReparation.reparateur_id'>
                     @foreach ($reparateurs as $reparateur)
                        <option value="{{$reparateur->id}}">{{$reparateur->prenom}}</option>  
                     @endforeach
                    
                  </select>
                </div>
                 
                 <div class="form-group">
                  <label class="col-sm-5 col-form-label" >Nom structure </label>
                  <select class="custom-select form-control-border border-width-2"  style="width: 40%" wire:model='editReparation.structure_id'>
                     @foreach ($structures as $structure)
                        <option value="{{$structure->id}}">{{$structure->nom_struct}}</option>  
                     @endforeach
                    
                  </select>
                </div>


                 
  
                

                       <div class="form-group row">
                    <label  class="col-sm-5 col-form-label">Désignation:</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control"  placeholder="" wire:model='editReparation.designation' @error('editReparation.designation') is-invalid @enderror>
                       @error('editReparation.designation') 
                         <span class="text-danger">{{$message}}</span>
                       @enderror
                    </div>
                  </div>

                       <div class="form-group row">
                    <label  class="col-sm-5 col-form-label">Date de panne :</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control"  placeholder="" wire:model='editReparation.date_panne' @error('editReparation.date_panne') is-invalid @enderror>
                       @error('editReparation.date_panne') 
                         <span class="text-danger">{{$message}}</span>
                       @enderror
                    </div>
                  </div>

                       <div class="form-group row">
                    <label  class="col-sm-5 col-form-label">Date de sortie :</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control"  placeholder="" wire:model='editReparation.date_sortie' @error('editReparation.date_sortie') is-invalid @enderror>
                       @error('editReparation.date_sortie') 
                         <span class="text-danger">{{$message}}</span>
                       @enderror
                    </div>
                  </div>

                      <div class="form-group row">
                    <label  class="col-sm-5 col-form-label">Date de retour </label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control"  placeholder="" wire:model='editReparation.date_retour' @error('editReparation.date_retour') is-invalid @enderror>
                       @error('editReparation.date_retour') 
                         <span class="text-danger">{{$message}}</span>
                       @enderror
                    </div>
                    
                  </div>

                  
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Modifier</button>
                  <button type="button" class="btn btn-warning btn-sm"  wire:click.prevent='goToListReparation()'>Annuler</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>


        </div>
    </div>
</div>
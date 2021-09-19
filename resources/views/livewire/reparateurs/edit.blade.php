<div class="row p-4 pt-5">

       <div class="col-md-6">
        <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title"> <i class="fas fa-user-plus fa-2x"></i> Formulaire d'edition  Reparateur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" wire:submit.prevent="updateReparateur()">
                <div class="card-body">
                 
                    
                 
                   
                  
                  <div class="form-group ">
                    <label >Nom </label>
                    <input type="text" wire:model="editReparateur.nom" class="form-control @error('editReparateur.nom') is invalide @enderror">
                        @error("editReparateur.nom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   <div class="form-group ">
                    <label >Prenom </label>
                    <input type="text" wire:model="editReparateur.prenom" class="form-control @error('editReparateur.prenom') is invalide @enderror">
                        @error("editReparateur.prenom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   <div class="form-group ">
                    <label >Adresse </label>
                    <input type="text" wire:model="editReparateur.adresse" class="form-control @error('editReparateur.adresse') is invalide @enderror">
                        @error("editReparateur.adresse")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   <div class="form-group ">
                    <label >Email </label>
                    <input type="text" wire:model="editReparateur.email" class="form-control @error('editReparateur.email') is invalide @enderror">
                        @error("editReparateur.email")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   <div class="form-group ">
                    <label >Telephone </label>
                    <input type="text" wire:model="editReparateur.telephone" class="form-control @error('editReparateur.telephone') is invalide @enderror">
                        @error("editReparateur.telephone")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   <div class="form-group ">
                    <label >Société </label>
                    <input type="text" wire:model="editReparateur.societe" class="form-control @error('editReparateur.societe') is invalide @enderror">
                        @error("editReparateur.societe")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   <div class="form-group">
                    <label >Disponibilité</label>
                    <select class="form-control @error('editReparateur.disponibilite') is-invalid @enderror" wire:model="editReparateur.disponibilite">
                        <option value=""></option>
                        <option value="disponible">Disponible</option>
                        
                        
                    </select>
                    @error("editReparateur.disponibilite")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                  </div>
                  
                 
                
                 
                
                 
                
                 
                
                 
                
                   
                   
                   
                   
               
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modifier</button>
                   <button type="button" wire:click="goToListReparateur()" class="btn btn-danger">liste des Reparateur</button>
                </div>
              </form>
            </div>
        </div>
      


    
         
          
         </div>
      </div>
    </div>
  </div>  
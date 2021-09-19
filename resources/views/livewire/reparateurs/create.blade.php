<div class="row p-4 pt-5">
       <div class="col-md-6">
        <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title"> <i class="fas fa-user-plus fa-2x"></i> Creation d'un nouvel Reparateurs</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" wire:submit.prevent="addReparateur()">
                <div class="card-body">
                  
                   
                     <div class="form-group ">
                        <label >Nom </label>
                        <input type="text" wire:model="newReparateur.nom" class="form-control @error('newReparateur.nom') is invalide @enderror">
                        @error("newReparateur.nom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-group ">
                        <label >Prenom </label>
                        <input type="text" wire:model="newReparateur.prenom" class="form-control @error('newReparateur.prenom') is invalide @enderror">
                        @error("newReparateur.prenom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-group ">
                        <label >Adresse </label>
                        <input type="text" wire:model="newReparateur.adresse" class="form-control @error('newReparateur.adresse') is invalide @enderror">
                        @error("newReparateur.adresse")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                        <div class="form-group ">
                        <label >Société </label>
                        <input type="text" wire:model="newReparateur.societe" class="form-control @error('newReparateur.societe') is invalide @enderror">
                        @error("newReparateur.societe")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                       <div class="form-group">
                        <label >Telephone </label>
                        <input type="text" wire:model="newReparateur.telephone" class="form-control @error('newReparateur.telephone') is invalide @enderror">
                        @error("newReparateur.telephone")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                   <div class="form-group">
                        <label >Email </label>
                        <input type="text" wire:model="newReparateur.email" class="form-control @error('newReparateur.email') is invalide @enderror">
                        @error("newReparateur.email")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                 
                  
                  
                  
                 
                  
                
                   
                   
                
                 
                  
                 
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                   <button type="button" wire:click="goToListReparateur()" class="btn btn-danger">Annuler</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>

 <script>
  window.addEventListener("showSuccessMessage",event=>{
      Swal.fire({
          position:'top-end',
          icon:'success',
          toast:true,
          title:"Reparateur cree avec succes !",
          showConfirmButton:false,
          timer:4500
      })
  })
  
  </script>
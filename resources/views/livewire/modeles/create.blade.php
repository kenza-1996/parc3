<div class="row p-4 pt-5">
            <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire de création d'une nouvelle modele</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent="addModele()">
                <div class="card-body">

               

                  
                 

                  <div class="form-group">
                    <label >Nom</label>
                    <input type="text" class="form-control @error('newModele.nom') is-invalid @enderror" wire:model="newModele.nom">
                    @error("newModele.nom")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                  </div>
                   


                 
                      
                      
               

                 


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <button type="button" wire:click="goToListModele()" class="btn btn-danger">Annuler</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>


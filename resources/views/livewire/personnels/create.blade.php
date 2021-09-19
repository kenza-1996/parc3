<div class="row p-4 pt-5">
       <div class="col-md-6">
        <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title"> <i class="fas fa-user-plus fa-2x"></i> <b>Creation d'un nouvel utilisateur </b></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" wire:submit.prevent="addPersonnel()">
                <div class="card-body">
                  <div class="d-flex">
                   
                     <div class="form-group flex-grow-1 mr-2">
                        <label >Nom</label>
                        <input type="text" wire:model="newPersonnel.nom" class="form-control @error('newPersonnel.nom') is invalide @enderror">
                        @error("newPersonnel.nom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                   <div class="form-group flex-grow-1">
                         <label >Prenom</label>
                         <input type="text" wire:model="newPersonnel.prenom" class="form-control @error('newPersonnel.prenom') is invalide @enderror">
                        @error("newPersonnel.prenom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   </div>
                  
                  <div class="form-group ">
                    <label >Matricule</label>
                    <input type="text" wire:model="newPersonnel.matricule" class="form-control @error('newPersonnel.matricule') is invalide @enderror">
                        @error("newPersonnel.matricule")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   <div class="form-group ">
                    <label >N° bureau</label>
                    <input type="text" wire:model="newPersonnel.num_bureau" class="form-control @error('newPersonnel.num_bureau') is invalide @enderror">
                        @error("newPersonnel.num_bureau")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                  
                    
                   
                     <div class="form-group  ">
                    <label >Adresse E-mail</label>
                    <input type="text" wire:model="newPersonnel.email" class="form-control @error('newPersonnel.email') is invalide @enderror">
                        @error("newPersonnel.email")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                 
                
                 <div class="form-group  ">
                  <label for="exampleSelectRounded0">Structure</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newPersonnel.structure_id'>
                               @foreach ($structures as $structure)
                    <option value="{{$structure->id}}">{{$structure->nom_struct}}</option>  
                    @endforeach
                  </select>
              </div>
           

                
                  
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">AJOUTER</button>
                   <button type="button" wire:click="goToListPersonnel()" class="btn btn-danger">liste des Personnel</button>
                </div>
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
          title:"Personnel cree avec succes !",
          showConfirmButton:false,
          timer:3500
      })
  })
  
  </script>
  

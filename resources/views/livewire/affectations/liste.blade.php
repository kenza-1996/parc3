<div class="row  p-4 pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header  bg-orange">
                <h3 class="card-title"> <b>Les Affectations </b></h3>

                <div class="card-tools d-flex align-items-center">
                <a class="btn btn-link text-white mr-4 d-block bg-black" wire:click.prevent='goToAddAffectation()' ><i class="fas fa-plus-circle "></i>Nouvelle affectation?</a>
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
                    <th>ID</th>
                     
                      <th>N°materiel</th>
                      <th>Personnel</th>
                      <th>ID structure</th>
                      <th>Date Affectation</th>
                      
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>


                   @foreach ($affectations as $affectation )
                  <tbody>
                    <tr>
                    <td>{{$affectation->id}}</td>
                      
                      <td>{{$affectation->materiel->codebarre}}--{{$affectation->materiel->num_serie}}--{{$affectation->materiel->nom}}</td>
                      <td>{{$affectation->personnel->nom}} {{$affectation->personnel->prenom}}</td>
                      <td>{{$affectation->personnel->structure->nom_struct}}</td>
                      <td>{{$affectation->dateDebut}}</td>
                
                      
                     

                      <td class="text-center">
                       <button class="btn btn-link bg-orange" wire:click.prevent='goToEditAffectation({{$affectation->id}})'><i class="far fa-edit"></i></button> 
                       <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{$affectation->materiel_id}}','{{$affectation->id}}',)"><i class="far fa-trash-alt"></i></button>
                      
                      </td>
                    </tr>
                    @endforeach
                </tbody>



                       

                  
                </table>
              </div>
              <!-- /.card-body -->
            
             <div class ="card-footer">
                 <div class="float-right"> 
                {{ $affectations->links() }}
                 </div>

              </div>
              <!-- /.card -fotter-->

             <!-- /.card -->

   
             </div>
          </div>
</div>
<script>
  window.addEventListener("showConfirmMessage",event=>{
     Swal.fire({
  title: event.detail.message.title,
  text: event.detail.message.text,
  icon: event.detail.message.type,
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Continuer',
   cancelButtonText: 'Annuler',
}).then((result) => {
  if (result.isConfirmed) {
    @this.deleteAffectation(event.detail.message.data.materielid,event.detail.message.data.affectationid)
  }
})
  })
   
  window.addEventListener("showSuccessMessage",event=>{
      Swal.fire({
          position:'top-end',
          icon:'success',
          toast:true,
          title:event.detail.message,
          showConfirmButton:false,
          timer:4500
      })
  })
  
  
  </script>
  
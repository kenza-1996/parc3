<div class="row  p-4 pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header  bg-orange">
                <h3 class="card-title"> <b>Liste Des Reparations en Interne </b></h3>

                <div class="card-tools d-flex align-items-center">
                <a class="btn btn-link text-white mr-3 d-block bg-black" wire:click.prevent='goToAddRI()' ><i class="fa fa-plus"></i>Nouvelle REP-I</a>
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
                     
                      <th>DATE PANNE</th>
                      <th class="text-center">DATE INTERVENTION</th>
                      <th class="text-center">MATERIEL</th>
                      <th class="text-center">ACTES EXECUTES</th>
                      <th class="text-center">OBSERVATION</th>
                    
                      
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>


                   @foreach ($ReparationInternes as $ReparationInterne )
                  <tbody>
                    <tr>
                      <td>{{$ReparationInterne->datePanne}}</td>
                      <td class="text-center">{{$ReparationInterne->dateIntervention}}</td>
                      <td class="text-center">{{$ReparationInterne->Materiel->num_serie}}</td>
                      <td class="text-center">{{$ReparationInterne->actesExecutes}}</td>
                     <td class="text-center">{{$ReparationInterne->observations}}</td>
                      
                       <td class="text-center"><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
 Caracteristiques
</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
   
     
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        
      </div>
    </div>
  </div>
</div>
</td>

                      <td class="text-center">
                      <button class="btn btn-link bg-orange" wire:click.prevent="goToEditRI('{{$ReparationInterne->id}}','{{$ReparationInterne->materiel_id}}')"><i class="far fa-edit"></i></button> 
                      <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{$ReparationInterne->id}}','{{$ReparationInterne->id}}')" ><i class="far fa-trash-alt"></i></button>
                      
                      </td>
                    </tr>
                    @endforeach
                </tbody>



                       

                  
                </table>
              </div>
              <!-- /.card-body -->
            
             <div class ="card-footer">
                 <div class="float-right"> 
                {{ $ReparationInternes->links() }}
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
    @this.deleteMateriel(event.detail.message.data.materielid)
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
          timer:3500
      })
  })
  
  
  </script>
  
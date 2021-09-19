<div class="row  p-4 pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header  bg-orange">
                <h3 class="card-title"><b>Liste Des Materiels</b></h3>

                <div class="card-tools d-flex align-items-center">
                <a class="btn btn-link text-white mr-4 d-block bg-black bg-black" wire:click.prevent='goToAddMateriel()' ><i class="fas fa-plus-circle "></i>Nouveau Materiel</a>
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
                     
                      <th>N°serie</th>
                      <th class="text-center">Code Barre</th>
                      <th class="text-center">N°Lot</th>
                      <th class="text-center">Designation</th>
                      <th class="text-center">Etat</th>
                      <th class="text-center">Affectation</th>
                      <th class="text-center">En panne</th>
                      <th class="text-center">Details</th>
                      
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>


                   @foreach ($materiels as $materiel )
                  <tbody>
                    <tr>
                      <td>{{$materiel->num_serie}}</td>
                      <td class="text-center">{{$materiel->codebarre}}</td>
                      <td class="text-center">{{$materiel->lot->num_lot}}</td>
                      <td class="text-center">{{$materiel->nom}}</td>

                      <td class="text-center"><span class="tag tag-success">{{$materiel->etat}}</span></td>
                      <td class="text-center">
                      @if($materiel->affectation)
                        affecté
                      @else
                        non affecté 
                      @endif
                      </td>
 
<td class="text-center">
<button class="btn btn-link" wire:click.prevent='goTo({{$materiel->id}})'>clicker</button>

</td>

                       <td class="text-center"><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
 Caracteristiques
</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <table>
        <thead>
                    <tr>
                     <th >Caracteristiques</th>
                      <th>Date de Creation </th>
                      
                     
                      <th >Derniere Modification </th>
                       </tr>
                  </thead>
                      <tbody>
                    <tr>
                     <td class="text-center">{{$materiel->caracteristiques}}</td>
                      <td>{{$materiel->created_at}}</td>
                     
                     
                       <td >{{$materiel->updated_at}}</td></td>
                    
                 </tr>
                </tbody>
                </table>
     
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        
      </div>
    </div>
  </div>
</div>
</td>

                      <td class="text-center">
                      <button class="btn btn-link bg-orange" wire:click.prevent='goToEditMateriel({{$materiel->id}})'><i class="far fa-edit"></i></button> 
                      <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{$materiel->num_serie}}','{{$materiel->id}}')" ><i class="far fa-trash-alt"></i></button>
                      
                      </td>
                    </tr>
                    @endforeach
                </tbody>



                       

                  
                </table>
              </div>
              <!-- /.card-body -->
            
             <div class ="card-footer">
                 <div class="float-right"> 
                {{ $materiels->links() }}
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
  
<div class="row p-4 pt-5">
   
    <div class="row mb-3 p-2">
       
       <div class="col-md-7">
         <label for="">Categories</label>
         <select wire:model='byCategories' class="form-control">
           <option value="">No selected</option>
           @foreach ($categories as $categorie )
              <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
           @endforeach
           
         </select>
       </div>

       <div class="col-md-3">
         <label for=""> Par Page</label>
         <select class="form-control" wire:model='parPage'>
           <option value="5">5</option>
           <option value="10">10</option>
           <option value="15">25</option>
         </select>
       </div>

    </div>
 
          <div class="col-12">
            <div class="card">
              
              <div class="card-header bg-orange">
                <h3 class="card-title"><b>Liste des Lots </b></h3>

                <div class="card-tools d-flex align-items-center">
                <a class="btn btn-link text-white mr-4 d-block bg-black" wire:click.prevent='goToAddLot()'><i class="fas fa-plus-circle "></i>Nouveau Lot</a>
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

              <div class="card-body table-responsive p-0 ">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                     <th >DATE ACHAT</th>
                      <th >N°contrat</th>
                      
                      <th >N°AO</th>
                      <th >N°AP</th>
                      <th >Categorie</th>
                      <th >Marque</th>
                      <th >Modele</th>
                     
                      
                      <th >Fournisseur</th>
                      <th >QTE</th>
                      <th >COUT</th>
                     
                      <th  class="text-center">Ajouté </th>
                      <th  class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($lots as $lot )
                     
                   
                    <tr>
                     <td>{{$lot->dateAchat}}</td>
                      <td>{{$lot->num_lot}}</td>
                    
                      <td>{{$lot->num_ao}}</td>
                      <td>{{$lot->num_ap}}</td>
                     <td>{{$lot->categorie->nom}}</td>
                     <td>{{$lot->marque->nom}}</td>
                        <td>{{$lot->modele->nom}}</td>
                      
                      
                      <td>{{$lot->fournisseur}}</td>
                      <td>{{$lot->qte}}</td>
                      <td>{{$lot->cout}}</td>
                     
                      <td class="text-center"><span class="tag tag-success">{{ $lot->created_at->diffForHumans()}}</span></td>
                      <td class="text-center">
                      <button class="btn btn-link bg-orange" wire:click.prevent='goToEditLot({{$lot->id}})'><i class="far fa-edit"></i></button> 
                      <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{$lot->num_lot}}','{{$lot->id}}')" ><i class="far fa-trash-alt"></i></button>
                      
                      </td>
                      
                    </tr>
                   @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class ="card-footer">
                 <div class="float-right"> 
                {{ $lots->links() }}
                 </div>

              </div>
              <!-- /.card -fotter-->
             </div>
            <!-- /.card -->
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
    @this.deleteLot(event.detail.message.data.lotid)
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
  
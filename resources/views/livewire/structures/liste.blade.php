
<div>
    
     <div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-orange d-flex align-items-center">
                <h3 class="card-title flex-grow-1">   <i class="fas fa-laptop-house fa-2x"></i><b> Liste des Structures </b></h3>

                <div class="card-tools d-flex align-items-center">
                  <a class="btn btn-link text-white mr-4 d-block bg-black" wire:click.prevent="goToAddStructure()"> <i class="fas fa-plus-circle "></i>
                  Nouvel Structure</a>

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
              <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                     
                      <th style="width:25% ; "class="text-center">Nom </th>
                      
                      <th class="text-center">Ajouté</th>
                      <th class="text-center">Action</th>
                      
                    </tr>
                    
                  </thead>
                  <tbody>
                  @foreach ($structures as $structure)
                    
                  
                    <tr>
                     
                      <td class="text-center">{{ $structure->nom_struct }} </td>
                     
                      <td class="text-center"><span class="tag tag-success">{{ \Carbon\Carbon::parse($structure->created_at)->diffForHumans() }}</span></td>
                      <td class="text-center">
                      <button class="btn btn-link  bg-orange" wire:click="goToEditStructure({{$structure->id}})"><i class="far fa-edit"></i></button>
                      <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{$structure->id}}')"><i class="far fa-trash-alt"></i></button>

                    </tr>
                   
                   
                     
                   
                    
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

             <div  class="card-footer">
                <div class="float-right">
                     {{$structures-> links()}}
                </div>
             </div>

            </div>
            <!-- /.card -->
          </div>
        </div>
</div>

  <script>
    window.addEventListener("showConfirmMessage", event=>{
    Swal.fire({
        title: event.detail.message.title,
        text: event.detail.message.text,
        icon: event.detail.message.type,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Continuer!'
      }).then((result) => {
        if (result.isConfirmed) {
            @this.deleteStructure(event.detail.message.data.structure_id)
        }
      })
    })

</script>

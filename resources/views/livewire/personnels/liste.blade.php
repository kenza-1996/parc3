<div>
  
   
    <div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-orange d-flex align-items-center">
                <h3 class="card-title flex-grow-1"> <i class="fas fa-users fa-2x"></i><b> Liste des Personnels </b></h3>

                <div class="card-tools d-flex align-items-center">
                  <a class="btn btn-link text-white mr-4 d-block bg-black" wire:click.prevent="goToAddPersonnel()"> <i class="fas fa-user-plus"></i>
                  Nouvel Prsonnels</a>

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
                     
                      <th style="width:25% ;">Matricule</th>
                      <th style="width:25% ;">Prenom</th>
                      <th style="width:25% ;">Nom</th>
                       <th style="width:25% ;">email</th>
                      <th style="width:25% ;">N° bureau</th>
                      <th style="width:25% ;">structure</th>
                      <th class="text-center">Ajouté</th>
                      <th class="text-center">Action</th>
                      
                    </tr>
                    
                  </thead>
                  <tbody>
                  @foreach ($personnels as $personnel)
                    
                  
                    <tr>
                    <td > {{ $personnel->matricule }}</td>
                    
                     
                      
                      <td >
                         {{ $personnel->prenom }}
                      </td>
                      <td > {{ $personnel->nom }}</td>
                       <td > {{ $personnel->email }}</td>
                        <td > {{ $personnel->num_bureau }}</td>
                        
                         <td > {{ $personnel->structure->nom_struct }}</td>
                     
                      
                      <td class="text-center"><span class="tag tag-success">{{ $personnel->created_at->diffForHumans() }}</span></td>
                      <td class="text-center">
                      <button class="btn btn-link bg-orange" wire:click="goToEditPersonnel({{$personnel->id}})"><i class="far fa-edit"></i></button>
                      <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{ $personnel->prenom }} {{ $personnel->nom }}',{{$personnel->id}})"><i class="far fa-trash-alt"></i></button>

                    </tr>
                   
                   
                     
                   
                    
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

             <div  class="card-footer">
                <div class="float-right">
                 {{$personnels-> links()}}
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
            @this.deletePersonnel(event.detail.message.data.personnel_id)
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

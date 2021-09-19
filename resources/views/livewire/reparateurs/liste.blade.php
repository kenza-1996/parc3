<div>
  <div>
  <h2 class="text-gray-dark  text-center md-3">Liste des reparateurs</h2>
   </div>
    <div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-orange d-flex align-items-center">
                <h3 class="card-title flex-grow-1"> <i class="fas fa-users fa-2x"></i> Liste des Reparateurs</h3>

                <div class="card-tools d-flex align-items-center">
                  <a class="btn btn-link text-white mr-4 d-block bg-black" wire:click.prevent="goToAddReparateur()"> <i class="fas fa-user-plus"></i>
                  Nouvel Reparateurs</a>

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
                      <th style="width:5% ;"class="text-center">ID</th>
                     
                      <th style="width:25% ;"class="text-center">Prenom</th>
                      <th style="width:25% ;"class="text-center">Nom</th>
                       <th style="width:25% ;"class="text-center">Email</th>
                      
                     
                      <th style="width:25% ;"class="text-center">Teléphone</th>
                       <th style="width:25% ;"class="text-center">Société</th>
                      <th style="width:25% ;"class="text-center">Adresse</th>
                      <th style="width:25% ;"class="text-center">Disponibilité</th>
                     {{-- <th style="width:25% ;"class="text-center">Nom structure</th>--}}
                    

                      <th style="width:20% ;"class="text-center">Ajouté</th>
                      <th style="width:30%;"class="text-center">Action</th>
                      
                    </tr>
                    
                  </thead>
                  <tbody>
                  @foreach ($reparateurs as $reparateur)
                    
                  
                    <tr>
                    <td class="text-center"> {{ $reparateur->id }}</td>
                     
                      
                      <td class="text-center">
                         {{ $reparateur->prenom }}
                      </td>
                      <td class="text-center"> {{ $reparateur->nom }}</td>
                       <td class="text-center"> {{ $reparateur->email }}</td>
                      
                         <td class="text-center"> {{ $reparateur->telephone }}</td>
                         <td class="text-center"> {{ $reparateur->societe}}</td>
                          <td class="text-center"> {{ $reparateur->adresse }}</td>
                          <td>
                       
                       @if($reparateur->disponibilite)

                         <button class="btn  btn-success btn-sm" wire:click='goToChange({{$reparateur->id}})'>Indisponible</button>
                       
                       @else 
                          <button class="btn  btn-danger btn-sm" wire:click.prevent='goTo({{$reparateur->id}})'>Disponible</button>
                       
                       @endif
                       
                       </td>
                          
                         
                         
                     
                      <td class="text-center"><span class="tag tag-success">{{ $reparateur->created_at->diffForHumans() }}</span></td>
                      <td class="text-center">
                      <button class="btn btn-link bg-orange" wire:click="goToEditReparateur({{$reparateur->id}})"><i class="far fa-edit"></i></button>
                      <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{$reparateur->id}}')"><i class="far fa-trash-alt"></i></button>

                    </tr>
                   
                   
                     
                   
                    
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

             <div  class="card-footer">
                <div class="float-right">
                 {{$reparateurs-> links()}}
                </div>
             </div>

            </div>
            <!-- /.card -->
          </div>
        </div>
       


</div>

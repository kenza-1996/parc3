<div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
              
              <div class="card-header bg-orange">
                <h3 class="card-title"><i class="fas"></i>Liste des panne</h3>

                <div class="card-tools d-flex align-items-center">
                <a class="btn btn-link text-white mr-4 d-block bg-black" wire:click.prevent='goToAddReparation()'><i class="fas fa-plus-circle "></i>Nouvelle Reparation</a>
                  <div class="input-group input-group-md" style="width: 500px;">
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

              <div class="card-body table-responsive p-0 table-striped" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                     
                      <th class="text-center">ID</th>
                      <th class="text-center">N° de serie</th>
                      <th class="text-center">Code bare</th>
                      <th class="text-center">Personnel</th>
                      <th class="text-center">Structure</th>
                      <th class="text-center">Reparateur</th>
                      <th class="text-center">Désignation</th>
                      <th class="text-center">Date de panne</th>
                      <th class="text-center">Dte de sortie</th>
                      <th  class="text-center">Date de retour</th>
                      <th  class="text-center">Aouté</th>
                      <th  class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($reparations_externe as $reparation_externe )
                     
                   
                    <tr>
                    
                      <td>{{$reparation_externe->reparation_externe_id}}</td>
                      <td>{{$reparation_externe->materiel->num_serie}}</td>
                      <td>{{$reparation_externe->materiel->codebarre}}</td>
                      <td>{{$reparation_externe->personnel->nom}}{{$reparation_externe->personnel->prenom}}</td>
                      <td>{{$reparation_externe->structure->nom_struct}}</td>
                      <td>{{$reparation_externe->reparateur->nom}} {{$reparation_externe->reparateur->prenom}}</td>
                      <td>{{$reparation_externe->designation}}</td>
                      <td>{{$reparation_externe->date_panne}}</td>
                      <td>{{$reparation_externe->date_sortie}}</td>
                      <td>{{$reparation_externe->date_retour}}</td>
                      <td class="text-center"><span class="tag tag-success">{{ $reparation_externe->created_at->diffForHumans()}}</span></td>
                      <td class="text-center">
                      <button class="btn btn-link bg-orange" wire:click.prevent='goToEditReparation({{$reparation_externe->id}})'><i class="far fa-edit"></i></button> 
                      <button class="btn btn-link  bg-orange" wire:click="confirmDelete('{{$reparation_externe->id}}','{{$reparation_externe->id}}')" ><i class="far fa-trash-alt"></i></button>
                      
                      </td>
                      
                    </tr>
                   @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class ="card-footer">
                 <div class="float-right"> 
                 {{$reparations_externe->links() }}
                 </div>

              </div>
              <!-- /.card -fotter-->
             </div>
            <!-- /.card -->
          </div>
  


</div>

 
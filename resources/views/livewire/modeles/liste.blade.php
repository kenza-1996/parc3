<div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-gradient-orange d-flex align-items-center">
                <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-2x"></i> Liste des Modeles</h3>

                <div class="card-tools d-flex align-items-center ">
                <a class="btn btn-link text-white mr-4 d-block bg-black" wire:click.prevent="goToAddModele()"><i class="fas fa-user-plus"></i> Nouvelle Modele</a>
                  <div class="input-group input-group-md" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th style="width:5%;">Id</th>
                      <th style="width:25%;">Désignation</th>
                     
                      <th style="width:20%;" class="text-center">Ajouté</th>
                      <th style="width:30%;" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($modeles as $modele)
                    <tr>
                     
                      <td>{{ $modele->id }} </td>
                      <td>{{ $modele->nom}}</td>
                      
                      <td class="text-center"><span class="tag tag-success">{{ \Carbon\Carbon::parse($modele->created_at)->diffForHumans() }}</span></td>
                      <td class="text-center">
                        <button class="btn btn-link bg-orange" wire:click="goToEditModele({{$modele->id}})"> <i class="far fa-edit"></i> </button>
                        <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{ $modele->id }}' )"> <i class="far fa-trash-alt"></i> </button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                    {{ $modeles->links() }}
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>




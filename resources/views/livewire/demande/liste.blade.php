<div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
              
              <div class="card-header bg-orange">
                <h3 class="card-title"> <i class="fas fa-file-alt fa-2x "></i><b> Liste des DPS</b></h3>

                <div class="card-tools d-flex align-items-center">
                <a class="btn btn-link text-white mr-4 d-block bg-black" wire:click.prevent="goToAddDps()"> <i class="fas fa-plus-circle "></i>Nouvel demande</a>
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

              <div class="card-body table-responsive p-0 table-striped" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                       <th style="width:10%;">Id</th>
                      <th style="width:10%;">N° DPS</th>
                      <th style="width:25%;" >materiel 1</th>
                      <th style="width:25%;" >materiel 2</th>
                      <th style="width:25%;" >materiel 3</th>
                        <th style="width:5%;">Date</th>
                      <th style="width:10%;" >traiter</th>
    
                      <th  class="text-center">Action</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($dpsdemandes as $dpsdemande)
                     
                   
                    <tr>
                    
                       <td>{{ $dpsdemande->id}} </td>
                       <td>{{ $dpsdemande->num_dps}} </td>
                       <td>  
                       @foreach ($materiels as $materiel )
                         @if ($materiel->id==$dpsdemande->materiel1)
                         {{$materiel->codebarre}}/{{$materiel->nom}}
    
                         @endif
                       @endforeach
                       </td>

                        <td>  
                       @foreach ($materiels as $materiel )
                         @if ($materiel->id==$dpsdemande->materiel2)
                         {{$materiel->codebarre}}/{{$materiel->nom}}
    
                         @endif
                       @endforeach
                        </td>

                         <td>  
                       @foreach ($materiels as $materiel )
                         @if ($materiel->id==$dpsdemande->materiel3)
                         {{$materiel->codebarre}}/{{$materiel->nom}}
    
                         @endif
                       @endforeach
                        </td>
                        <td>{{ $dpsdemande->date}}  </td>
                       <td>
                       
                       @if($dpsdemande->traiter)

                         <button class="btn  btn-success btn-sm" >traité</button>
                       
                       @else 
                          <button class="btn  btn-danger btn-sm" wire:click.prevent='goTo({{$dpsdemande->id}})'>non traité</button>
                       
                       @endif
                       
                       </td>
                      
                        

                        
                          
                       
                     
                     
                      <td class="text-center">
                      <button class="btn btn-link bg-orange" wire:click.prevent="goToEditDps({{$dpsdemande->id}})"><i class="far fa-edit"></i></button> 
                      <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{$dpsdemande->num_dps}}',{{ $dpsdemande->id}})" ><i class="far fa-trash-alt"></i></button>
                      
                      </td>
                      
                    </tr>
                   @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class ="card-footer">
                 <div class="float-right"> 
                {{ $dpsdemandes->links() }}
                 </div>

              </div>
              <!-- /.card -fotter-->
             </div>
            <!-- /.card -->
          </div>
  


</div>

  













{{--<div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-gradient-orange d-flex align-items-center">
                <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-2x"></i> Liste des DPS</h3>

                <div class="card-tools d-flex align-items-center ">
                <a class="btn btn-link text-white mr-4 d-block bg-black" wire:click.prevent="goToAddDps()"><i class="fas fa-user-plus"></i> Nouvel demande</a>
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
                      <th style="width:5%;">ID</th>
                      <th style="width:25%;">N° DPS</th>
                      <th style="width:20%;" >Code barre</th>
                      <th style="width:20%;" >Designation</th>
                      <th style="width:20%;" >Structure</th>
                      <th style="width:40%;" >Actions</th>
                      <th style="width:20%;" class="text-center">Ajouté</th>
                      <th style="width:30%;" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($dpsdemandes as $dpsdemande)
                    <tr>
                       <td>{{ $dpsdemande->id}}  </td>
                       <td>{{ $dpsdemande->num_dps}} </td>
                       <td> {{ $dpsdemande->materiel->code_barre }} </td>
                       <td>{{ $dpsdemande->materiel->lot->categorie->nom}} {{ $dpsdemande->materiel->lot->marque->nom}} {{ $dpsdemande->materiel->lot->modele->nom}}</td>
                       <td>{{ $dpsdemande->structure->nom_struct }}</td> 
                       <td>
                         
                            <button type="button" class="btn btn-danger" > Non traité</button>
                        
                          
                    
                        
                         
                         
                      </td>
                      <td class="text-center"><span class="tag tag-success">{{ $dpsdemande->created_at->diffForHumans() }}</span></td>
                      <td class="text-center">
                        <button class="btn btn-link bg-orange" wire:click="goToEditDps({{$dpsdemande->id}})"> <i class="far fa-edit"></i> </button>
                        <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{ $dpsdemande->id }}') "> <i class="far fa-trash-alt"></i> </button>
                      </td>
                  
                    </tr>
                       @endforeach 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                    {{ $dpsdemandes->links() }}
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>--}}


       




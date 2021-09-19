<div class="row p-4 pt-5">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-orange">
            <div class="card-header">
            <h3 class="card-title"><i class="fas fa-file-alt fa-2x"></i> Formulaire d'édition DPS</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" wire:submit.prevent="updateDps()" method="POST">
            <div class="card-body">

                
                    
                    <div class="form-group">
                            <label >N° DPS</label>
                            <input type="text" wire:model="editDps.num_dps" class="form-control @error('editDps.num_dps') is-invalid @enderror">

                            @error("editDps.num_dps")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                       
                    <div class="form-group">
                    <label >Code barre</label>
                    <select class="form-control @error('editDps.materiel_id') is-invalid @enderror" wire:model="editDps.materiel_id">
                        <option value=""></option>
                         @foreach ( $materiels as $materiel)
                             <option value="{{$materiel->id}}">{{$materiel->code_barre}}</option>
                          @endforeach 
                    </select>
                    @error("editDps.materiel_id")
                                <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
                   <div class="form-group">
                    <label >Categorie</label>
                    <select class="form-control @error('editDps.materiel_id') is-invalid @enderror" wire:model="editDps.materiel_id">
                        <option value=""></option>
                        @foreach ( $materiels as $materiel)
                          <option value="{{$materiel->id}}">{{$materiel->lot->categorie->nom}}</option>
                      @endforeach 
                    </select>
                    @error("editDps.materiel_id")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                  </div>
                

                 <div class="form-group">
                    <label >Marque</label>
                    <select class="form-control @error('editDps.materiel_id') is-invalid @enderror" wire:model="editDps.materiel_id">
                        <option value=""></option>
                        @foreach ( $materiels as $materiel)
                          <option value="{{$materiel->id}}">{{$materiel->lot->marque->nom}}</option>
                      @endforeach 
                    </select>
                    @error("editDps.materiel_id")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                  </div>

               <div class="form-group">
                    <label >Modele</label>
                    <select class="form-control @error('editDps.materiel_id') is-invalid @enderror" wire:model="editDps.materiel_id">
                        <option value=""></option>
                        @foreach ( $materiels as $materiel)
                          <option value="{{$materiel->id}}">{{$materiel->lot->modele->nom}}</option>
                      @endforeach 
                    </select>
                    @error("editDps.materiel_id")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                  </div>


                 <div class="form-group">
                  <label for="exampleInputRounded0" >Date </label>
                   <input class="form-control rounded-0" type="date" placeholder="tapez ici" wire:model='editDps.date' @error('editDps.date') is-invalid @enderror id="exampleInputRounded0" >
                   @error('editDps.date') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                  </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="button" wire:click="goToListDps()" class="btn btn-danger">Annuler</button>
            </div>
            </form>
        </div>
        <!-- /.card -->

    </div>

  
       
    </div >
</div>

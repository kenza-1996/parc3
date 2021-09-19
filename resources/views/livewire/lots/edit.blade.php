
<div class="row p-4 pt-5">
          <div class="col-6">
            <div class="card">



              <div class="card-header  bg-orange">
                <h3 class="card-title"> <b>Modifier Les informations du Lot </b></h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form class="form-horizontal" wire:submit.prevent="updateLot()">
                <div class="card-body ">
                 
                  <div class="form-group row">
                     <label  class="col-sm-5 col-form-label">date : </label>
                     <div class="col-sm-5">
                        <input type="date" wire:model="editLot.dateAchat" class="form-control @error('editLot.dateAchat') is invalide @enderror">
                        @error("eitLot.dateAchat")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>

                  
                    <div class="form-group row">
                    <label  class="col-sm-5 col-form-label">Numero Lot :</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control"  placeholder="" wire:model='editLot.num_lot' @error('editLot.num_lot') is-invalid @enderror >
                       @error('editLot.num_lot') 
                         <span class="text-danger">{{$message}}</span>
                       @enderror
                    </div>
                  </div>
                  
                    <div class="form-group row">
                    <label  class="col-sm-5 col-form-label">Numero AO :</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control"  placeholder="" wire:model='editLot.num_ao' @error('editLot.num_ao') is-invalid @enderror>
                       @error('editLot.num_ao') 
                         <span class="text-danger">{{$message}}</span>
                       @enderror
                    </div>
                  </div>

                     <div class="form-group row">
                    <label  class="col-sm-5 col-form-label">Numero AP :</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control"  placeholder="" wire:model='editLot.num_ap'@error('editLot.num_ap') is-invalid @enderror>
                       @error('editLot.num_ap') 
                         <span class="text-danger">{{$message}}</span>
                       @enderror
                    </div>
                  </div>

                    

                   <div class="form-group">
                  <label class="col-sm-5 col-form-label" >Categorie </label>
                  <select class="custom-select form-control-border border-width-2"  style="width: 40%" wire:model='editLot.categorie_id'>
                     @foreach ($categories as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->nom}}</option>  
                     @endforeach
                    
                  </select>
                </div>
         

                   <div class="form-group">
                  <label class="col-sm-5 col-form-label" > marque </label>

                  <select class="custom-select form-control-border border-width-2"   style="width: 40%"  wire:model='editLot.marque_id'>
                   @foreach ($marques as $marque)
                    
                     <option value="{{$marque->id}}">{{$marque->nom}}</option>  
                   
                  @endforeach
                  
                  </select>
                </div>
  
                

                        <div class="form-group">
                  <label class="col-sm-5 col-form-label" > Modele : </label>

                  <select class="custom-select form-control-border border-width-2"   style="width: 40%"  wire:model='editLot.modele_id'>
                   @foreach ($modeles as $modele)
                    
                     <option value="{{$modele->id}}">{{$modele->nom}}</option>  
                   
                  @endforeach
                  
                  </select>
                </div>
  

                       <div class="form-group row">
                    <label  class="col-sm-5 col-form-label">Quantité =</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control"  placeholder="" wire:model='editLot.qte' @error('editLot.qte') is-invalid @enderror>
                       @error('editLot.qte') 
                         <span class="text-danger">{{$message}}</span>
                       @enderror
                    </div>
                  </div>

                       <div class="form-group row">
                    <label  class="col-sm-5 col-form-label">Fournisseur :</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control"  placeholder="" wire:model='editLot.fournisseur' @error('editLot.fournisseur') is-invalid @enderror>
                       @error('editLot.fournisseur') 
                         <span class="text-danger">{{$message}}</span>
                       @enderror
                    </div>
                  </div>

                      <div class="form-group row">
                    <label  class="col-sm-5 col-form-label">Cout =</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control"  placeholder="" wire:model='editLot.cout' @error('editLot.cout') is-invalid @enderror>
                       @error('editLot.cout') 
                         <span class="text-danger">{{$message}}</span>
                       @enderror
                    </div>
                    
                  
                 </div>
                   <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Modifier</button>
                  <button type="button" class="btn btn-warning btn-sm"  wire:click.prevent='goToListLot()'>Annuler</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>


        </div>
    </div>
</div>
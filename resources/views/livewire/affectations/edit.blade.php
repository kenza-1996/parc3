<div class="row p-5 pt-6">
 <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title"><b>Effectuer une affectation </b></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent='addAffectation()'>

                <div class="card-body">
                <div class="form-group flex-grow-1 mr-2">
                        <label >date</label>
                        <input type="date" wire:model="editAffectation.dateDebut" class="form-control @error('editAffectation.dateDebut') is invalide @enderror">
                        @error("editAffectation.dateDebut")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

<br>
                   
                        <label for="exampleSelectRounded0">materiel</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editAffectation.materiel_id'>
                               @foreach ($materiels as $materiel)
                    <option value="{{$materiel->id}}">{{$materiel->num_serie}}</option>  
                    @endforeach
                  </select>

                  <br>
                  <br>

    <label for="exampleSelectRounded0">Personnel</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editAffectation.personnel_id'>
                               @foreach ($personnels as $personnel)
                    <option value="{{$personnel->id}}">{{$personnel->nom}}</option>  
                    @endforeach
                  </select>

                  <br>
                  <br>

                  

                 <br>
                 <br>
                       <div  class="float-right">
                         <button type="submit" class="btn btn-primary btn-sm">AJOUTER</button>
                         <button type="button" class="btn btn-warning btn-sm"  wire:click.prevent='goToListAffectation()'>ANNULER</button>
                       </div> 
                <!-- /.card-body -->

              
              </form>
            </div>
            <!-- /.card -->

           
           

          </div>



</div>
 
  
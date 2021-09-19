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
                        <input type="date" wire:model="newAffectation.dateDebut" class="form-control @error('newAffectation.dateDebut') is invalide @enderror">
                        @error("newAffectation.dateDebut")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

<br>
                   
                        <label for="exampleSelectRounded0">materiel</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newAffectation.materiel_id'>
                             <option>select one </option>
                               @foreach ($materiels as $materiel)
                    <option value="{{$materiel->id}}">{{$materiel->num_serie}}--{{$materiel->codebarre}}--{{$materiel->nom}}</option>  
                    @endforeach
                  </select>

                  <br>
                  <br>

    <label for="exampleSelectRounded0">Personnel</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newAffectation.personnel_id'>
                               <option>select one </option>
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
 
   <script>
  window.addEventListener("showSuccessMessage",event=>{
      Swal.fire({
          position:'top-end',
          icon:'success',
          toast:true,
          title:"Affectation cree avec succes !",
          showConfirmButton:false,
          timer:4500
      })
  })
  
  </script>
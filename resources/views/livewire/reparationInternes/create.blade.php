<div class="row p-5 pt-6">
 <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">Reparation Interne</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent='addReparationInterne()'>

                <div class="card-body">
                  <div class="form-group">
                   
                        <label >date Panne :</label>
                        <input type="date" wire:model="newRI.datePanne" class="form-control @error('newRI.datePanne') is invalide @enderror">
                        @error("newRI.datePanne")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    <br>
 
                       <label >date Intervention :</label>
                        <input type="date" wire:model="newRI.dateIntervention" class="form-control @error('newRI.dateIntervention') is invalide @enderror">
                        @error("newRI.dateIntervention")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    <br>
 

                    <label for="exampleSelectRounded0">Materiel ::</label>
                    
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newRI.materiel_id'>
                      <option >select one </option>
                               @foreach ($materiels as $materiel)
                    <option  value="{{$materiel->id}}" >{{$materiel->num_serie}}//{{$materiel->codebarre}}</option>  
                    @endforeach
                  </select>

<br>
<br>                  
 
                 <label for="exampleInputRounded0" >Actes Executes  </label>
                 <textarea class="form-control" rows="3" placeholder="Enter ..." wire:model='newRI.actesExecutes' @error('newRI.actesExecutes') is-invalid @enderror id="exampleInputRounded0"></textarea>
                   
                   @error('newRI.actesExecutes') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror


<br>
                 <label for="exampleInputRounded0" >Observations  </label>
                 <textarea class="form-control" rows="2" placeholder="Enter ..." wire:model='newRI.observations' @error('newRI.observations') is-invalid @enderror id="exampleInputRounded0"></textarea>
                   @error('newRI.observations') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror



               

                         




                 <br>
                 <br>
                       <div  class="float-right">
                         <button type="submit" class="btn btn-primary btn-sm">AJOUTER</button>
                         <button type="button" class="btn btn-warning btn-sm" wire:click.prevent='goToListRI()' >Annuler</button>
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
          title:"OPERATION EFFECTUE avec succes !",
          showConfirmButton:false,
          timer:3500
      })
  })
  
  </script>
  
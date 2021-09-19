<div class="row p-5 pt-6">
 <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">Ajouter une reparation</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent='addReparation()'>

                <div class="card-body">
                  <div class="form-group">
      

<br>


                    <label for="exampleSelectRounded0">N° serie</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newReparation.materiel_id'>
                         <option></option>      
                               @foreach ($materiels as $materiel)
                    <option value="{{$materiel->id}}">{{$materiel->num_serie}}</option>  
                    @endforeach
                  </select>

<br>

<br>                  
                    <label for="exampleSelectRounded0">Code barre</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newReparation.materiel_id'>
                        <option></option>
                               @foreach ($materiels as $materiel)
                    <option value="{{$materiel->id}}">{{$materiel->codebarre}}</option>  
                    @endforeach
                  </select>

<br>

<br>                  
                    <label for="exampleSelectRounded0">Nom</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newReparation.personnel_id'>
                        <option></option>
                               @foreach ($personnels as $personnel)
                    <option value="{{$personnel->id}}">{{$personnel->nom}}</option>  
                    @endforeach
                  </select>


<br>
<br>
            <label for="exampleSelectRounded0">Prenom</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newReparation.personnel_id'>
                        <option></option>
                               @foreach ($personnels as $personnel)
                    <option value="{{$personnel->id}}">{{$personnel->prenom}}</option>  
                    @endforeach
                  </select>
       
<br> 
<br>
            <label for="exampleSelectRounded0">Nom structure</label>
            <option></option>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newReparation.structure_id'>
                               @foreach ($structures as $structure)
                    <option value="{{$structure->id}}">{{$structure->nom_struct}}</option>  
                    @endforeach
                  </select>
       
<br> 
<br>                  
                    <label for="exampleSelectRounded0">Nom</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newReparation.reparateur_id'>
                        <option></option>      
                               @foreach ($reparateurs as $reparateur)
                    <option value="{{$reparateur->id}}">{{$reparateur->nom}}</option>  
                    @endforeach
                  </select>


<br>
<br>                  
                    <label for="exampleSelectRounded0">Prenom</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newReparation.reparateur_id'>
                        <option></option>       
                               @foreach ($reparateurs as $reparateur)
                    <option value="{{$reparateur->id}}">{{$reparateur->prenom}}</option>  
                    @endforeach
                  </select>


<br>
                 
                  
<br>
                  <label for="exampleInputRounded0" >Désignation </label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='newReparation.designation' @error('newReparation.designation') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newReparation.designation') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>
 <br>                 
                 <label for="exampleInputRounded0" >Date de panne </label>
                   <input class="form-control rounded-0" type="date" placeholder="tapez ici" wire:model='newReparation.date_panne' @error('newReparation.date_panne') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newReparation.date_panne') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>
<br>                 
                 <label for="exampleInputRounded0" >Date de sortie </label>
                   <input class="form-control rounded-0" type="date" placeholder="tapez ici" wire:model='newReparation.date_sortie' @error('newReparation.date_sortie') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newReparation.date_sortie') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>
<br>                 
                 <label for="exampleInputRounded0" >Date de retour </label>
                   <input class="form-control rounded-0" type="date" placeholder="tapez ici" wire:model='newReparation.date_retour' @error('newReparation.date_retour') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newReparation.date_retour') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>
                
<br>                  
                      <label for="exampleSelectRounded0">Etat</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newReparation.etat'>
                    <option value=""></option>            
                    <option ></option>  
                    <option value="en panne">EN PANNE</option>  
                    <option value="en cours" >EN COURS DE REPARATION</option>  
                    <option value="reparé" >Reparé</option> 
                  </select>

<br>





               
                 <br>
                       <div  class="float-right">
                         <button type="submit" class="btn btn-primary btn-sm">AJOUTER</button>
                         <button type="button" class="btn btn-warning btn-sm"  wire:click.prevent='goToListReparation()'>Annuler</button>
                       </div> 
                <!-- /.card-body -->

              
              </form>
            </div>
            <!-- /.card -->

           
           

          </div>



</div>


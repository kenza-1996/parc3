<div class="row p-4 pt-5">
            <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-file-alt fa-2x"></i><b> Formulaire de création d'un DPS</b></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent="addDps()">
                <div class="card-body">

               

                   
                        <div class="form-group">
                            <label >N° DPS</label>
                            <input type="text" wire:model="newDps.num_dps" class="form-control @error('newDps.num_dps') is-invalid @enderror">

                            @error("newDps.num_dps")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                       
                    

                  <div class="form-group">
                    <label for="exampleSelectRounded0">materiel 1</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newDps.materiel1'>
                             <option>select one </option>
                               @foreach ($materiels as $materiel)
                    <option value="{{$materiel->id}}">{{$materiel->num_serie}}--{{$materiel->codebarre}}--{{$materiel->nom}}</option>  
                    @endforeach
                  </select>
                  </div>

                <div class="form-group">
                    <label for="exampleSelectRounded0">materiel 2</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newDps.materiel2'>
                             <option>select one </option>
                               @foreach ($materiels as $materiel)
                    <option value="{{$materiel->id}}">{{$materiel->num_serie}}--{{$materiel->codebarre}}--{{$materiel->nom}}</option>  
                    @endforeach
                  </select>
                  </div>
                
                 <div class="form-group">
                    <label for="exampleSelectRounded0">materiel 3</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newDps.materiel3'>
                             <option>select one </option>
                               @foreach ($materiels as $materiel)
                    <option value="{{$materiel->id}}">{{$materiel->num_serie}}--{{$materiel->codebarre}}--{{$materiel->nom}}</option>  
                    @endforeach
                  </select>
                  </div>
                 
                
              



                 <div class="form-group">
                  <label for="exampleInputRounded0" >Date </label>
                   <input class="form-control rounded-0" type="date" placeholder="tapez ici" wire:model='newDps.date' @error('newDps.date') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newDps.date') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                  </div>
{{--<div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio3" disabled=""  wire:model='newDps.traiter'>
                          <label for="customRadio3" class="custom-control-label">  NON TRAITE (par defaut)</label>
                        </div>--}}
                 

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <button type="button" wire:click="goToListDps()" class="btn btn-danger">Annuler</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>






{{--<div class="row p-4 pt-5">
  <div class="col-md-12">
            <!-- general form elements -->
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire de demande de prestation</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        <form role="form" wire:submit.prevent="addDps()">
           <div class="card-body">

                 <div class="form-group">
                    <label for="exampleInputEmail1">Numero Demande</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" wire:model='newDps.num_dps' @error('newDps.num_dps') is-invalid @enderror placeholder="Enter numero dps">
                    @error('newDps.num_dps') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                  </div>
             
         
                  <div class="form-group flex-grow-1">
               
                    <label for="exampleInputEmail1">Object</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" wire:model='newDps.object' @error('newDps.object') is-invalid @enderror placeholder="Enter un object">
                    @error('newDps.object') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                
                   
                </div>
               

                 <div class="form-group flex-grow-1">
               
                    <label for="exampleInputEmail1">Designation 1</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" wire:model='newDps.designation1' @error('newDps.designation1') is-invalid @enderror placeholder="Enter numero dps">
                    @error('newDps.designation1') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                
                   
                </div>
               
          
                
                 <div class="form-group flex-grow-1">
               
                    <label >Designation 2</label>
                            <input type="text" class="form-control" wire:model="newDps.designation2">
                   
                </div>
              
               
               
                 <div class="form-group flex-grow-1">
               
                    <label >Designation 3</label>
                            <input type="text" class="form-control" wire:model="newDps.designation3">
                   
                </div>
              
          

                <label for="exampleInputRounded0" >Date </label>
                   <input class="form-control rounded-0" type="date" placeholder="tapez ici" wire:model='newDps.date' @error('newDps.date') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newDps.date') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
  

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <button type="button" wire:click="goToListDps()" class="btn btn-danger">Annuler</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>









{{--<form  wire:submit.prevent='addDps()'>
               <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Remplir une Demande</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Numero Demande</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" wire:model='newDps.num_dps' @error('newDps.num_dps') is-invalid @enderror placeholder="Enter numero dps">
                    @error('newDps.num_dps') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                  </div>
                  
                <div class="d-flex">
                  <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.Materiel_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($materiels as $materiel)
                    <option data-select2-id="54" value="{{$materiel->id}}">{{$materiel->codebarre}}</option>
                     @endforeach
                  </select>
                  </div>
                   <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.structure_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($structures as $structure)
                    <option data-select2-id="54" value="{{$structure->id}}">{{$structure->nom_struct}}</option>
                     @endforeach
                  </select>
                  </div>
                   <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.materiel_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($materiels as $materiel)
                    <option data-select2-id="54" value="{{$materiel->lot->categorie->id}}">{{$materiel->lot->categorie->nom}}</option>
                     @endforeach
                  </select>
                  </div>
                  <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.materiel_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($materiels as $materiel)
                    <option data-select2-id="54" value="{{$materiel->lot->marque->id}}">{{$materiel->lot->marque->nom}}</option>
                     @endforeach
                  </select>
                  </div>
                   <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.materiel_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($materiels as $materiel)
                    <option data-select2-id="54" value="{{$materiel->lot->modele->id}}">{{$materiel->lot->modele->nom}}</option>
                     @endforeach
                  </select>
                  </div>
                </div> 
                <div class="d-flex">
                  <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.Materiel_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($materiels as $materiel)
                    <option data-select2-id="54" value="{{$materiel->id}}">{{$materiel->codebarre}}</option>
                     @endforeach
                  </select>
                  </div>
                   <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.structure_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($structures as $structure)
                    <option data-select2-id="54" value="{{$structure->id}}">{{$structure->nom_struct}}</option>
                     @endforeach
                  </select>
                  </div>
                   <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.materiel_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($materiels as $materiel)
                    <option data-select2-id="54" value="{{$materiel->lot->categorie->id}}">{{$materiel->lot->categorie->nom}}</option>
                     @endforeach
                  </select>
                  </div>
                  <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.materiel_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($materiels as $materiel)
                    <option data-select2-id="54" value="{{$materiel->lot->marque->id}}">{{$materiel->lot->marque->nom}}</option>
                     @endforeach
                  </select>
                  </div>
                   <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.materiel_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($materiels as $materiel)
                    <option data-select2-id="54" value="{{$materiel->lot->modele->id}}">{{$materiel->lot->modele->nom}}</option>
                     @endforeach
                  </select>
                  </div>
                </div> 
                <div class="d-flex">
                  <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.Materiel_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($materiels as $materiel)
                    <option data-select2-id="54" value="{{$materiel->id}}">{{$materiel->codebarre}}</option>
                     @endforeach
                  </select>
                  </div>
                   <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.structure_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($structures as $structure)
                    <option data-select2-id="54" value="{{$structure->id}}">{{$structure->nom_struct}}</option>
                     @endforeach
                  </select>
                  </div>
                   <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.materiel_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($materiels as $materiel)
                    <option data-select2-id="54" value="{{$materiel->lot->categorie->id}}">{{$materiel->lot->categorie->nom}}</option>
                     @endforeach
                  </select>
                  </div>
                  <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.materiel_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($materiels as $materiel)
                    <option data-select2-id="54" value="{{$materiel->lot->marque->id}}">{{$materiel->lot->marque->nom}}</option>
                     @endforeach
                  </select>
                  </div>
                   <div class="form-group">
                   <select class="form-control select2bs4 select2-hidden-accessible" wire:model='newDps.materiel_id' style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    
                    <option selected="selected" data-select2-id="19"></option>
                     @foreach ($materiels as $materiel)
                    <option data-select2-id="54" value="{{$materiel->lot->modele->id}}">{{$materiel->lot->modele->nom}}</option>
                     @endforeach
                  </select>
                  </div>
                </div> 
                  <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime">
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                  
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <button type="submit" class="btn btn-primary" wire:click='goToListDps()'>Annuler</button>
                </div>
              </form>
            </div>--}}
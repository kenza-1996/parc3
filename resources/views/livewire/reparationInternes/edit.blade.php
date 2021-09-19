<div class="row  p-4 pt-5">
  <button type='button' wire:click="export('xlsx')" wire:loading.attr='disabled'>Excel</button>
          <div class="col-12">
           
                   
    
                <table class="table table-borderless">
                  <tbody>
                   
                    <tr>
                        <td> </td>
                        <td><img src="{{asset('images/logo_sadeg_2.png')}}" class="img-fluid " /></td>
                        <td></td>
                    </tr>
                   
                    <tr>
                        <td> <h5 >Region de Distribution <br>CENTRE</h5></td>
                        <td><h5>Concession de Distribution de Boumerdes<br>Dvision Exploitation Systeme Informatique</h5></td>
                        <td><h5>N°  .............. .....................<br>...................................................</h5></td>
                    </tr>
                   <br>
                   <tr>
                       <td></td>
                       <td></td>
                       <td ><h6>Boumerdess le </h6>:: {{$editRI['dateIntervention']}}</td>
                   </tr>
                <br>
                   <tr>
                      <td></td>
                      <td>  <h2>    PV DINTERVENTION    </h2> </td>
                      <td></td>
                   </tr>
                 <BR>
                   <tr>
                      <td><h6>N° Intervention :.........../2020</h6></td>
                      <td></td>
                      <td></td>
                   </tr>
                  @foreach ($affectations as $affectation )
                  @if ($affectation->materiel_id=$editRI['materiel_id'])
                   <tr>
                       <td><h6>Structure::</h6><h5>{{$affectation->Personnel->structure->nom_struct}}</h5> </td>
                       <td></td>
                       <td></td>
                   </tr>

                    <tr>
                    <td></td>
                       <td><h6>Date intervention:</h6>  <h5>{{$editRI['dateIntervention']}}/{{$editRI['datePanne']}}</h5></td>
                       <td><h6>Materiel code ::</h6> <h5>{{ $affectation->Materiel->codebarre}}</h5></td>
                      
                    </tr>

                   <tr>
                       <td><h4>Actes Executes :</h4></td>
                       <td> </td>
                       <td></td>
                   </tr>

                    <tr>
                        <td>
                        {{$editRI['actesExecutes']}}
                         <br>
                         ........................................................
                         ........................................................
                         </td>

                    </tr>
                    
                    <tr>
                        <td><h6>Observation::</h6></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                       <td>{{$editRI['observations']}}<br>
                       .................................................................
                       </td>

                    </tr>

                    <tr>
                        <td>utilisateur : {{$affectation->Personnel->nom}}  {{$affectation->Personnel->prenom}}</td>
                         <td></td>
                        <td>agent dgsi </td>

                    </tr>
                    <tr> 
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
@endif
@endforeach
       </tbody>
    </table>
  </div>
</div>

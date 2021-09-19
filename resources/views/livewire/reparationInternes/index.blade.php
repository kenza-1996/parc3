<div>

 
@if ($isBtnEditClicked)

@include("livewire.reparationInternes.edit")



@else

@if ($isBtnAddClicked)

@include("livewire.reparationInternes.create")

@else

@include("livewire.reparationInternes.liste")

@endif

@endif



</div>
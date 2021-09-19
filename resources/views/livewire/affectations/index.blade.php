<div>
 
@if ($isBtnEditClicked)

@include("livewire.affectations.edit")



@else

@if ($isBtnAddClicked)

@include("livewire.affectations.create")


@else

@include("livewire.affectations.liste")
@endif
@endif

</div>
<div>

 
@if ($isBtnEditReparationClicked)

@include("livewire.reparations_externe.edit")



@else

@if ($isBtnAddReparationClicked)

@include("livewire.reparations_externe.create")

@else

@include("livewire.reparations_externe.liste")

@endif

@endif



</div>
<script>
    window.addEventListener("showSuccessMessage", event=>{
        Swal.fire({
                position: 'top-end',
                icon: 'success',
                toast:true,
                title: event.detail.message || "Opération effectuée avec succès!",
                showConfirmButton: false,
                timer: 5000
                }
            )
    })
</script>

<script>
    window.addEventListener("showConfirmMessage", event=>{
       Swal.fire({
        title: event.detail.message.title,
        text: event.detail.message.text,
        icon: event.detail.message.type,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Continuer',
        cancelButtonText: 'Annuler'
        }).then((result) => {
        if (result.isConfirmed) {
            if(event.detail.message.data){
                @this.deleteReparation(event.detail.message.data.reparateur_id)
            }

           

        }
        })
    })

</script>





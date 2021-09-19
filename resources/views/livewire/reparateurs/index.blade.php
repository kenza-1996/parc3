<div>

 
@if ($isBtnEditClicked)

@include("livewire.reparateurs.edit")



@else

@if ($isBtnAddClicked)

@include("livewire.reparateurs.create")

@else

@include("livewire.reparateurs.liste")

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
                @this.deleteReparateur(event.detail.message.data.reparateur_id)
            }

           

        }
        })
    })

</script>





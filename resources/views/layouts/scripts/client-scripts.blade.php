<script>
    document.addEventListener("DOMContentLoaded", () => {


        Livewire.hook('message.processed', (component) => {
            setTimeout(function() {
                $('#alert').fadeOut('fast');
            }, 5000);
        });
    });


    window.livewire.on('closeClientModal', () => {
        $('#clientModal').modal('hide');
    });

    window.livewire.on('openClientModal', () => {
        $('#clientModal').modal('show');
    });

    window.addEventListener('confirmClientDelete', event => {
        // alert('hey click');
        swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.icon,
            showCancelButton: event.detail.showCancelButton,
            confirmButtonColor: event.detail.confirmButtonColor,
            cancelButtonColor: event.detail.cancelButtonColor,
            confirmButtonText: event.detail.confirmButtonText,
        }).then((result) => {
            if (result.isConfirmed) {
                window.livewire.emit('deleteClient', event.detail.id)
                swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        });

        // Swal.fire()
    });
</script>
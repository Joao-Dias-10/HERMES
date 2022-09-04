$('#GFG_UP').text("Choose file from system to get the fileSize");
$('#arquivo').on('change', function() {
    if (this.files[0].size > 2147483600) {

        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Tente enviar um arquivo com menos de 40.000 KB!'
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location.href = "inserir.php";
            }
        })

    }
});
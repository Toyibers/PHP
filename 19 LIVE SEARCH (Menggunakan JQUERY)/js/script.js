// simbol $ = jQuery
$(document).ready(function() {  

    // Hilangkan tombol cari
    // jQuery tolong carikan id tombol cari terus hilangkan
    $('#tombol-cari').hide();

    // event ketika keyword ditulis
    $('#keyword').on('keyup', function() {
        
        // munculkan icon loading
        $('.loader').show();

        // ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        // $.get
        $.get('ajax/mahasiswa.php?keyword=' +  $('#keyword').val(), function(data) {

            $('#container').html(data);
            $('.loader').hide();

        });


    });


});
$(function() {
    
    $('.tombolAddHotelRoom').on('click', function() {
        
        $('#judulModal').html('Add New Hotel Room');
        $('.modal-footer button[type=submit]').html('Add New Room');

    });

    $('.tampilModalUbah').on('click', function() {
        
        $('#judulModal').html('Edit Hotel Room');
        $('.modal-footer button[type=submit]').html('Edit Room');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/hotel/getedit',
            data: {id_room : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                console.log('ok');
            }
        });
    });
});
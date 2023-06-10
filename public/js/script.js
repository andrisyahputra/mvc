$(document).ready(function () {
    // untuk tambah
    $('.tambahDataPemain').on('click', function(){
        $('#judulModal').html("Tambah data Pemain");
        $('.modal-footer button[type=submit]').html("Tambah Data");
        $('.modal-body form').attr('action', 'http://localhost:8080/mvc/public/pemain/tambah');
        $('#nama').val('');
        $('#posisi').val('');
        $('#asal').val('');
        $('#no_punggung').val('');
        $('#id').val('');
    })
    // untuk ubah
    $('.tampilModalUbah').on('click', function(){
        $('#judulModal').html("Ubah data Pemain");
        $('.modal-footer button[type=submit]').html("Ubah Data");
        $('.modal-body form').attr('action', 'http://localhost:8080/mvc/public/pemain/ubah');
        
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost:8080/mvc/public/pemain/getUbah',
            // url: "url",
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#nama').val(data.nama);
                $('#posisi').val(data.posisi);
                $('#asal').val(data.asal);
                $('#no_punggung').val(data.no_punggung);
                $('#id').val(data.id);
            }
        });
    })
});
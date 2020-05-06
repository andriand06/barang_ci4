
const flashData = $('.flash-data').data('flashdata');

console.log(flashData)

if(flashData) {
    Swal.fire (
        'Data Barang',
         flashData,
         'success'
    );
}
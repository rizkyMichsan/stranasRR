$(function () {
    $('.js-basic-example').DataTable({
        responsive: true
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
        order: [ 0, 'asc' ],
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});

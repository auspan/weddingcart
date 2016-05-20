
$(document).ready(function(){

    var contactsTable = $('#contactsTable').DataTable( {
        "pagingType": "simple_numbers",
        "dom": "<'row'<'col-sm-12'<'form-inline'<'form-group'f>>" +  "<'row'<'col-sm-12'tr>>" +   "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        "renderer": "bootstrap",
        "columns": [
            { "orderable": false },
            null,
            null,
            { "orderable": false }
        ]
    } );

    $.ajaxSetup({
        headers:{
            'X-CSRF-Token':$('meta[name="_token"]').attr('content')
        }
    })

    $('#contactsTable tr').on( 'click', '.selectRow', function () {
        var rowData = contactsTable.row().data();
        alert(rowData);
    } );

    $('#getGoogleContacts').on('click', function (){

    });
} );
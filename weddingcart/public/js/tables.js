
$(document).ready(function(){
    var contactsTable = $('#myTable').DataTable( {
        "pagingType": "simple_numbers",
        "dom": "<'row'<'col-sm-12'<'form-inline'<'form-group'f>>" +  "<'row'<'col-sm-12'tr>>" +   "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        "renderer": "bootstrap",
        "columns": [
            { "orderable": false },
            { "orderable": false },
            null,
            null,
            null,
            { "orderable": false },
            { "orderable": false }
        ]
    } );

    $.ajaxSetup({
        headers:{
            'X-CSRF-Token':$('meta[name="_token"]').attr('content')
        }
    })

    $('#myTable tr').on( 'click', '.selectRow', function () {
        var rowData = contactsTable.row().data();
        alert(rowData);
    } );

    $('#myTable').on('click', '.deleteRow', function (e) {
        e.preventDefault();
        var nRow = $(this).parents('tr')[0];
        var contactId = contactsTable.cell(nRow, 0).data();
        alert(contactId);
        // Ajax request for deleting data in the backend
        $.ajax({
           type: "POST",
            url: 'deleteContact',
            data: {
                contactId: contactId
            },
            success: function() {
                contactsTable.row(nRow).remove().draw();
                showAlert("Yippe!!", "Contact Deleted", "success");
            },
            error: function() {

            }
        });
    } );

    $('#myTable').on('click', '.editRow', function (e) {
        e.preventDefault();
        var nRow = $(this).parents('tr')[0];
        editRow(contactsTable, nRow);
    } );

    $('#myTable').on('click', '.updateRow', function (e) {
        e.preventDefault();
        var nRow = $(this).parents('tr')[0];
        var jqInputs = $('input', nRow);
        var contactId = contactsTable.cell(nRow, 0).data();
        var contactName = jqInputs[1].value;
        var contactEmail = jqInputs[2].value;
        var contactPhone = jqInputs[3].value;

        alert(contactId+" : "+contactName+" : "+contactEmail+" : "+contactPhone);

        // Ajax request for updating data in the backend
        $.ajax({
           type: "POST",
            url: "updateContact",
            data: {
                contactId: contactId,
                contactName: contactName,
                contactEmail: contactEmail,
                contactPhone: contactPhone
            },
            success: function(){
                updateRow(contactsTable, nRow);
                showAlert("Yippe!!", "Contact Updated", "success");
            },
            error: function(){

            }
        });



    } );



    $('#addRow').on( 'click', function (e) {

        e.preventDefault();
        var contactName = $('#newName').val();
        var contactEmail = $('#newEmail').val();
        var contactPhone = $('#newPhone').val();

        // Ajax call for add contact
        $.ajax({
            type: "POST",
            url:"addContact",
            data:{
                contactName: contactName,
                contactEmail: contactEmail,
                contactPhone: contactPhone
            },
            success: function(data){
                addRowToContactsTable(contactsTable, data);
                $('#newName').val('');
                $('#newEmail').val('');
                $('#newPhone').val('');
                //showAlert(data.title, data.message, data.level);
                showAlert("Yippe!!", "Contact Added", "success");
            },
            error: function(){
            }
        });

    } );


    function addRowToContactsTable(contactsTable, contactsData)
    {
        var nRow = contactsTable.row.add([
            contactsData.id,
            '<input type="checkbox" id="checkAll" name="query_myTextEditBox">',
            contactsData.contactName,
            contactsData.contactEmail,
            contactsData.contactPhone,
            '<button type="button" class="editRow btn btn-default" aria-label="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>',
            '<button type="button" class="deleteRow btn btn-default" aria-label="Delete"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>',
        ]);

        $(contactsTable.cell(nRow, 0).node()).addClass('hidden');
        contactsTable.draw(false);
    }

    function editRow ( oTable, nRow )
    {
        var name = oTable.cell(nRow, 2).data();
        var email = oTable.cell(nRow, 3).data();
        var phone = oTable.cell(nRow, 4).data();
        var jqTds = $('>td', nRow);
        jqTds[2].innerHTML = '<input type="text" value="'+name+'">';
        jqTds[3].innerHTML = '<input type="email" value="'+email+'">';
        jqTds[4].innerHTML = '<input type="text" value="'+phone+'">';
        jqTds[5].innerHTML = '<button type="button" class="updateRow btn btn-default" aria-label="Update"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>';
    }

    function updateRow ( oTable, nRow )
    {
        var jqInputs = $('input', nRow);
        var jqTds = $('>td', nRow);
        oTable.cell(nRow, 2).data(jqInputs[1].value);
        oTable.cell(nRow, 3).data(jqInputs[2].value);
        oTable.cell(nRow, 4).data(jqInputs[3].value);
        jqTds[5].innerHTML = '<button type="button" class="editRow btn btn-default" aria-label="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>';
        table.row(nRow).draw();
    }

} );
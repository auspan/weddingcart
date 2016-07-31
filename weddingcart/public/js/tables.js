
$(document).ready(function(){

    $(".message-div").hide();

    // $('#add-guest-form input').tooltip({
    //     trigger: 'custom',
    //     onlyOne: false,    // allow multiple tips to be open at a time
    //     position: 'right'  // display the tips to the right of the element
    // });

    var editGuestRow = null;
    var editGuestId = null;
    var editGuestName = null;
    var editGuestEmail = null;
    var editGuestPhone = null;

    //$('#add-guest').ajaxForm();

    var guestsTable = $('#guestsTable').DataTable( {
        "pagingType": "simple_numbers",
        "order": [2, 'asc'],
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

    // $('#guestsTable tr').on( 'click', '.selectRow', function (e) {
    //     e.preventDefault();
    //     clearErrors();
    //     if(editGuestRow != null)
    //     {
    //         showRowBeingEditedAlert();
    //         return;
    //     }
    //     var rowData = guestsTable.row().data();
    //     alert("dfgdgdg");
    // } );

    $('#guestsTable').on('click', '.deleteRow', function (e) {
        e.preventDefault();
        clearErrors();
        var nRow = $(this).parents('tr')[0];
        if(editGuestRow != null)
        {
            showRowBeingEditedAlert();
            return;
        }
        var guestId = guestsTable.cell(nRow, 0).data();

        $.ajax({
           type: "POST",
            url: 'deleteContact',
            data: {
                guestId: guestId
            },
            success: function() {
                guestsTable.row(nRow).remove().draw();
                showAlert("Yippe!!", "Guest Deleted", "success");
            },
            error: function() {

            }
        });
    } );

    $('#guestsTable').on('click', '.addContactForEmail', function (e) {
        e.preventDefault();
        clearErrors();
        var nRow = $(this).parents('tr')[0];
        var count = 1;
        var contactName = guestsTable.cell(nRow, 2).data();
        var contactEmail = guestsTable.cell(nRow, 3).data();
        var contact = '<div style="position:relative;display:inline-block" class="removeContact"><span email="'+contactEmail+'"><div class="contactName">'+contactName+'&nbsp;<a href="javascript::void(0)" id="btn-removewishlist" class="removeContact" style="width:10px;"><i class="icon-remove"></i></a></div></span></div>'
        var recepients = $('#to-recepient').val();
        if(recepients=='')
        {
        $('#to-recepient').val(contactName+":"+contactEmail);
        $('#recepient').append(contact+' ');
        }
        else
        {
            var splitRecepients = recepients.split(/[,]/);
            console.log(splitRecepients);
            if(jQuery.inArray( contactName+':'+contactEmail, splitRecepients )==-1)
             {
                $('#to-recepient').val(recepients+","+contactName+":"+contactEmail); 
                $('#recepient').append(contact+' ');
                  
            }
            else
            {
                showAlert("Whoops!!", "Already Exist", "success");
            }
        }
             // guestsTable.row(nRow).remove().draw();
            count = count+1;
    } );


    $('#recepient').on('click', '.removeContact', function (e) {
        e.preventDefault();
        clearErrors();
        // $recepients=$("#to-recepient").val();
        // alert($("#recepient .contactName").html());
        // alert(this.html());
        $(this).remove();

    });

    $('#guestsTable').on('click', '.editRow', function (e) {
        e.preventDefault();
        clearErrors();
        var nRow = $(this).parents('tr')[0];
        if(editGuestRow != null && editGuestRow != nRow){
            resetEditRow();
        }
        editGuestRow = nRow;
        editRow(guestsTable, nRow);
    } );

    $('#guestsTable').on('click', '.cancelEditRow', function (e) {

        e.preventDefault();
        var jqTds = $('>td', editGuestRow);

        guestsTable.cell(editGuestRow, 0).data(editGuestId);
        guestsTable.cell(editGuestRow, 2).data(editGuestName);
        guestsTable.cell(editGuestRow, 3).data(editGuestEmail);
        guestsTable.cell(editGuestRow, 4).data(editGuestPhone);
        jqTds[5].innerHTML = '<button type="button" class="editRow btn btn-default" aria-label="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>';
        jqTds[6].innerHTML = '<button type="button" class="deleteRow btn btn-default" aria-label="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>';
        guestsTable.row(editGuestRow).draw();

        resetEditFlags();
    });


    $('#add-guest-form').validate({
        onfocusout: false,
        onkeyup: false,
        ignore: ".dataTables_filter input",
        rules: {
            guestName: "required",
                editName: "required",
            guestEmail: {
                required: true,
                email: true
            },
                editEmail: {
                    required: true,
                    email: true
                }
            },
        messages: {
            guestName: "Name is required",
            guestEmail: {
                required: "Email is required",
                email: "Email format should valid"
            },
        },
        submitHandler: function(form){
            clearErrors();
            $(form).ajaxSubmit({
                headers:{
                    'X-CSRF-Token':$('meta[name="_token"]').attr('content')
                },
                type: "POST",
                url: "addContact",
                data: $('#add-guest-form').serialize(),
                success: function (data) {

                    if (data.message) {
                        showAlert("ooops!!", data.message, "error");
                    }
                    else {
                        addRowToGuestsTable(guestsTable, data);
                        showAlert("Yippe!!", "Guest Added", "success");
                        resetForm($('#add-guest-form'));
                    }
                },
                error: function (data) {
                    $("#errorlog").html(data.responseText);
                    console.log(data.responseText);
                }
            });
        },
        invalidHandler: function(event, validator) {
            return;
        },
        showErrors: function(errorMap, errorList){
            displayErrors(errorMap);
            highlightErrors(errorList);
        },

    });


    $('#update-guest-form').validate({
        showErrors: function(errorMap, errorList){
            displayErrors(errorMap);
            highlightErrors(errorList);
        },
        onfocusout: false,
        onkeyup: false,
        ignore: ".dataTables_filter input",
        rules: {
            editName: "required",
            editEmail: {
                required: true,
                email: true
            }
        },
        messages: {
            editName: "Name is required",
            editEmail: {
                required: "Email is required",
                email: "Email format should valid"
            }
        },
        submitHandler: function(form){
            clearErrors();
            $(form).ajaxSubmit({
                headers:{
                    'X-CSRF-Token':$('meta[name="_token"]').attr('content')
                },
                type: "POST",
                url: "updateContact",
                data: $('#update-guest-form').serialize(),
                success: function (data) {

                    if (data.message) {
                        showAlert("ooops!!", data.message, "error");
                    }
                    else {
                        updateRow(guestsTable, editGuestRow);
                        resetEditFlags();
                        showAlert("Yippe!!", "Guest Updated", "success");
                    }
                },
                error: function (data) {
                    $("#errorlog").html(data.responseText);
                    console.log(data.responseText);
                }
            });
        },
        invalidHandler: function(event, validator) {
            return;
        }
    });

    function addRowToGuestsTable(guestsTable, guestsData)
    {

        if(editGuestRow != null)
        {
            showRowBeingEditedAlert();
        }

        var nRow = guestsTable.row.add([
            guestsData.id,
            '<input type="checkbox" id="checkAll" name="query_myTextEditBox">',
            guestsData.guestName,
            guestsData.guestEmail,
            guestsData.guestPhone,
            '<button type="button" class="editRow btn btn-default" aria-label="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>',
            '<button type="button" class="deleteRow btn btn-default" aria-label="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>',
        ]);

        $(guestsTable.cell(nRow, 0).node()).addClass('hidden');
        guestsTable.draw(false);
    }

    function editRow ( oTable, nRow )
    {

        var id = oTable.cell(nRow, 0).data();
        var name = oTable.cell(nRow, 2).data();
        var email = oTable.cell(nRow, 3).data();
        var phone = oTable.cell(nRow, 4).data();

        editGuestRow = nRow;
        editGuestId = id;
        editGuestName = name;
        editGuestEmail = email;
        editGuestPhone = phone;

        var jqTds = $('>td', nRow);
        jqTds[0].innerHTML = '<input type="hidden" name="editId" id="editId" value="'+id+'">';
        jqTds[2].innerHTML = '<input type="text" name="editName" id="editName" value="'+name+'">';
        jqTds[3].innerHTML = '<input type="email" name="editEmail" id="editEmail" value="'+email+'">';
        jqTds[4].innerHTML = '<input type="text" name="editPhone" id="editPhone" value="'+phone+'">';
        jqTds[5].innerHTML = '<button type="submit" class="btn btn-default" aria-label="Update"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>';
        jqTds[6].innerHTML = '<button type="button" class="cancelEditRow btn btn-default" aria-label="Update"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>';
    }

    function updateRow ( oTable, nRow )
    {
        var jqInputs = $('input', nRow);
        var jqTds = $('>td', nRow);

        oTable.cell(nRow, 2).data(jqInputs[2].value);
        oTable.cell(nRow, 3).data(jqInputs[3].value);
        oTable.cell(nRow, 4).data(jqInputs[4].value);
        jqTds[5].innerHTML = '<button type="button" class="editRow btn btn-default" aria-label="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>';
        jqTds[6].innerHTML = '<button type="button" class="deleteRow btn btn-default" aria-label="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>';
        oTable.row(nRow).draw();
    }

    function showRowBeingEditedAlert ()
    {
        showAlert("Hmmm!!", "Row being edited. Please update or cancel", "success");
    }

    function resetEditFlags()
    {
        editGuestRow = null;
        editGuestId = null;
        editGuestName = null;
        editGuestEmail = null;
        editGuestPhone = null;
    }

    $('#addRow').on( 'click', function (e) {
        if(editGuestRow != null)
        {
            e.preventDefault();
            showRowBeingEditedAlert();
        }
    });
});
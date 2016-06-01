
$(document).ready(function(){
    
    var editGuestRow = null;
    var editGuestName = null;
    var editGuestEmail = null;
    var editGuestPhone = null;

    var guestsTable = $('#guestsTable').DataTable( {
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

    $('#guestsTable tr').on( 'click', '.selectRow', function (e) {

        e.preventDefault();
        if(editGuestRow != null)
        {
            showRowBeingEditedAlert();
            return;
        }
        var rowData = guestsTable.row().data();
        alert(rowData);
    } );

    $('#guestsTable').on('click', '.deleteRow', function (e) {
        e.preventDefault();
        var nRow = $(this).parents('tr')[0];
        if(editGuestRow != null)
        {
            showRowBeingEditedAlert();
            return;
        }
        var guestId = guestsTable.cell(nRow, 0).data();

        // Ajax request for deleting data in the backend
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

    $('#guestsTable').on('click', '.editRow', function (e) {
        e.preventDefault();
        var nRow = $(this).parents('tr')[0];
        if(editGuestRow != null && editGuestRow != nRow){
            resetEditRow();
        }
        editGuestRow = nRow;
        editRow(guestsTable, nRow);
    } );

    $('#guestsTable').on('click', '.updateRow', function (e) {
        e.preventDefault();
        var nRow = $(this).parents('tr')[0];
        if(editGuestRow != null && editGuestRow != nRow)
        {
            showRowBeingEditedAlert();
            return;
        }
        var jqInputs = $('input', nRow);
        var guestId = guestsTable.cell(nRow, 0).data();
        var guestName = jqInputs[1].value;
        var guestEmail = jqInputs[2].value;
        var guestPhone = jqInputs[3].value;

        alert(guestId+" : "+guestName+" : "+guestEmail+" : "+guestPhone);

        // Ajax request for updating data in the backend
        $.ajax({
           type: "POST",
            url: "updateContact",
            data: {
                guestId: guestId,
                guestName: guestName,
                guestEmail: guestEmail,
                guestPhone: guestPhone
            },
            success: function(){
                updateRow(guestsTable, nRow);
                resetEditFlags();
                showAlert("Yippe!!", "Guest Updated", "success");
            },
            error: function(){

            }
        });
    } );

    $('#guestsTable').on('click', '.cancelEditRow', function (e) {

        e.preventDefault();
        var jqTds = $('>td', editGuestRow);

        guestsTable.cell(editGuestRow, 2).data(editGuestName);
        guestsTable.cell(editGuestRow, 3).data(editGuestEmail);
        guestsTable.cell(editGuestRow, 4).data(editGuestPhone);
        jqTds[5].innerHTML = '<button type="button" class="editRow btn btn-default" aria-label="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>';
        jqTds[6].innerHTML = '<button type="button" class="deleteRow btn btn-default" aria-label="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>';
        guestsTable.row(editGuestRow).draw();

        resetEditFlags();
    });

        

    $('#addRow').on( 'click', function (e) {

            e.preventDefault();

    //     $("#newContact").validate({
    //         rules: {
    //         newName: "required",
    //         newEmail: {
    //             required: true,
    //             email: true
    //         },
    //         newPhone: {
    //             required: true,
    //             number: true,
    //             minlength: 10,
                
    //         }
    //     },

    //         messages: {
    //         newName: "Please enter your first name",
    //         newPhone: {
    //             required: "Please provide a contact number",
    //             minlength: "Your contact number must be 10 digits long",
    //             maxlength: "Your contact number must be 10 digits long"
    //         },
    //         newEmail: "Please enter a valid email address",
    //     },
    //         submitHandler: function(form) {
            
    //         var guestName = $('#newName').val();
    //     var guestEmail = $('#newEmail').val();
    //     var guestPhone = $('#newPhone').val();

    //     // Ajax call for add guest

    //     $.ajax({
    //         type: "POST",
    //         url:"addContact",
    //         data:{
    //             guestName: guestName,
    //             guestEmail: guestEmail,
    //             guestPhone: guestPhone
    //         },
    //         success: function(data){

    //             if(data.message)
    //             {
    //                 showAlert("ooops!!", data.message, "error");
    //             }
    //             else
    //             {
    //                 addRowToGuestsTable(guestsTable, data);
    //                 $('#newName').val('');
    //                 $('#newEmail').val('');
    //                 $('#newPhone').val('');
    //                 //showAlert(data.title, data.message, data.level);
    //                 showAlert("Yippe!!", "Guest Added", "success");
    //             }
    //         },
    //         error: function(){
    //         }
    //     });
    //     }
    // });
        
        
        var guestName = $('#newName').val();
        var guestEmail = $('#newEmail').val();
        var guestPhone = $('#newPhone').val();
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        var mobilePatten= /^[9786][\d]{9}$/;
        if(guestName=='')
        {
            alert("please insert name");
            newName.focus();
            newName.style.border="1px solid red";
            return false;
        }
        else
        {
            newName.style.border="";
        }
        if(guestEmail=='')
        {
            alert("please Insert Email");
            newEmail.focus(); 
            newEmail.value='';
            newEmail.style.border="1px solid red";
            return false;
        }
        else if(!emailPattern.test(guestEmail))
                    {
                    alert("Please insert Email Correctaly"); 
                    newEmail.focus(); 
                  //  newEmail.value='';
                    newEmail.style.border="1px solid red";
                    return false;
                } 
        else
        {
            newEmail.style.border="";
        } 

        if(guestPhone=="")       
                    {
                    alert("please Enter Phone number"); 
                    newPhone.focus();
                    newPhone.style.border="1px solid red";
                    return false;
                }
         else if(!mobilePatten.test(newPhone.value))
            {
            alert("Enter Number Correctaly"); 
            newPhone.focus();                                                                     
            //newPhone.value='';                    
            newPhone.style.border="1px solid red";                                                 
            return false;
            } 
        else
        {
            newPhone.style.border="";
        }             

        // Ajax call for add guest

        $.ajax({
            type: "POST",
            url:"addContact",
            data:{
                guestName: guestName,
                guestEmail: guestEmail,
                guestPhone: guestPhone
            },
            success: function(data){

                if(data.message)
                {
                    showAlert("ooops!!", data.message, "error");
                }
                else
                {
                    addRowToGuestsTable(guestsTable, data);
                    $('#newName').val('');
                    $('#newEmail').val('');
                    $('#newPhone').val('');
                    //showAlert(data.title, data.message, data.level);
                    showAlert("Yippe!!", "Guest Added", "success");
                }
            },
            error: function(data){
                $("#errorlog").html(data.responseText);
                console.log(data.responseText);
            }
        });
        });
        
   
    $(".addRow").on('click', function(e) {

        e.preventDefault();
        var rowId = $(this).attr('id');
        var counter=rowId.split(/[-]/);
        var guestName = $('#name'+counter[1]).html();
        var guestEmail = $('#email'+counter[1]).html();
        var guestPhone = $('#phone'+counter[1]).html();
        
        $.ajax({
            type:"POST",
            url:"addContact",
            data:{
                guestName: guestName,
                guestEmail: guestEmail,
                guestPhone: guestPhone
            },
            success:function(data)
            {
                if(data.message)
                {
                    showAlert("ooops!!", data.message, "error");
                }
                else
                {    
                    $('#row'+counter[1]).remove();
                    showAlert("Yippe!!", "Guest Added", "success");
                }    
            },
            error:function(data)
            {
                
            }
        });
    })

    $("#addSelected").on('click', function(e) {

        e.preventDefault();
        var totalChecked = $( "input[name='googleContacts']:checked").map(function (index, el) 
        {
            return $(el).attr('id').split(/[-]/)[1] 
      }).get();
         var i;
         var contacts = new Array();
         for(i=0; i<totalChecked.length; i++)
         {
             contacts[i] = {
                            "guestName" : $('#name'+totalChecked[i]).html() 
                            , "guestEmail": $('#email'+totalChecked[i]).html()
                            , "guestPhone" : $('#phone'+totalChecked[i]).html()
                             };
        
         }
         // create an array of each records
         //then pass it to controller through ajax call and add multiple rows in one action
         
        // alert(contacts);
        
       
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

        var name = oTable.cell(nRow, 2).data();
        var email = oTable.cell(nRow, 3).data();
        var phone = oTable.cell(nRow, 4).data();

        editGuestRow = nRow;
        editGuestName = name;
        editGuestEmail = email;
        editGuestPhone = phone;

        var jqTds = $('>td', nRow);
        jqTds[2].innerHTML = '<input type="text" value="'+name+'">';
        jqTds[3].innerHTML = '<input type="email" value="'+email+'">';
        jqTds[4].innerHTML = '<input type="text" value="'+phone+'">';
        jqTds[5].innerHTML = '<button type="button" class="updateRow btn btn-default" aria-label="Update"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>';
        jqTds[6].innerHTML = '<button type="button" class="cancelEditRow btn btn-default" aria-label="Update"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>';
    }

    function updateRow ( oTable, nRow )
    {
        var jqInputs = $('input', nRow);
        var jqTds = $('>td', nRow);

        oTable.cell(nRow, 2).data(jqInputs[1].value);
        oTable.cell(nRow, 3).data(jqInputs[2].value);
        oTable.cell(nRow, 4).data(jqInputs[3].value);
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
        editGuestName = null;
        editGuestEmail = null;
        editGuestPhone = null;
    }
} );
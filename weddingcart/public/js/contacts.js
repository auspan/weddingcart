
$(document).ready(function(){

    var contactsTable = $('#contactsTable').DataTable( {
        "pagingType": "simple_numbers",
        "ajax": "showinvite",
        "dom": "<'row'<'col-sm-12'<'form-inline'<'form-group'f>>" +  "<'row'<'col-sm-12'tr>>" +   "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        "renderer": "bootstrap",
        "columns": [
            { "orderable": false,
                "data": "name" },
            { "orderable": false,
                "data": "email" }
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

        // $.ajaxSetup({
        // headers:{
        //     'X-CSRF-Token':$('meta[name="_token"]').attr('content')
        //         }
        // });
        var contacts = contactsTable.ajax.json();
        var i;
        for(i=1;i<=contacts.length;i++)
        {
            // alert(contacts[i].email);
            contactsTable.rows.add( [
            {
                "name":contacts[i].name,
                "email":contacts[i].email
            }]
         ).draw();
        }
        
        // for(i=0;i<contacts.length;i++)
        // {
        // alert(contacts);
        // }
        
        // $('.checkbox-inline tbody').contactsTable.fnAddData(json);
        //alert( json.data.length +' row(s) were loaded' );
        //contactsTable.ajax.url('showinvite').load()

    //     $.ajax({
    //         type: "GET",
    //         url: 'showinvite',
    //         success:function(Response)
    //         {
    //             alert("Hello");
    //             var getContacts = JSON.stringify(Response);
    //             var setContactsInHtml = "";
    //             var i;
    //             for(i=0;i<obj.length;i++)
    //             {
    //                 setContactsInHtml+ = "sdfgsdgf";
    //             }
    //             $('#contactsTable').append(setContactsInHtml);
    //             alert(getContacts);
    //         },
    //         error:function(Response)
    //         {
    //             alert("Wrong");
    //             alert(Response);
    //         }
    //     })

     })
        

    });

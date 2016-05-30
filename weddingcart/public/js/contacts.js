
$(document).ready(function(){

    $('#myTable').DataTable({
            });
    $("#checkAll").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
    });
    
    $.ajaxSetup({
        headers:{
            'X-CSRF-Token':$('meta[name="_token"]').attr('content')
        }
    })

    $('#getGoogleContacts').on('click', function (){

        // $.get('social/auth/redirect/google');


        $.ajax({
            type:"GET",
            async: false,
            url:"social/auth/redirect/google",
            succes:function(data)
            {
                alert("Yes");
            },
            error:function(data)
            {
                alert(data.error);
            }
        });


        // var contactsTable = $('#contactsTable').DataTable( {
        //     "retrieve": true,
        //     "pagingType": "simple_numbers",
        //     "processing": true,
        //     "ajax": {
        //         "url": "social/auth/redirect/google",
        //         "dataSrc": ""
        //     },
        //     "dom": "<'row'<'col-sm-12'<'form-inline'<'form-group'f>>" +  "<'row'<'col-sm-12'tr>>" +   "<'row'<'col-sm-12'i>>" + "<'row'<'col-sm-12'p>>",
        //     "renderer": "bootstrap",
        //     "columns": [
        //         { "orderable": true,
        //             "data": "name" },
        //         { "orderable": false,
        //             "data": "email" },
        //         {"defaultContent": "<button class='btn btn-sm btn-default btn-success btn-add import-contact' type='button'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></button>"}
        //     ]
        // } );

        //contactsTable.ajax.url('showinvite').load();
        //var contacts = contactsTable.ajax.json();
        //contactsTable.rows.add(contacts).draw();

     })


    });

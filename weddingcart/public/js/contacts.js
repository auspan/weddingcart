$(document).ready(function () {

    ShowSelected();
    var googleCOntactsTable = $('#myTable').DataTable({
        "columns": [
            {"orderable": false},
            null,
            null,
            null,
            {"orderable": false}
        ]
    });

    $("#checkAll").change(function () {
        var cells = googleCOntactsTable.cells( ).nodes();
        $( cells ).find(':checkbox').prop('checked', $(this).is(':checked'));
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
        }
    })

    $('#getGoogleContacts').on('click', function () {
        // $.get('social/auth/redirect/google');
        $.ajax({
            type: "GET",
            async: false,
            url: "social/auth/redirect/google",
            succes: function (data) {
                alert("Yes");
            },
            error: function (data) {
                alert(data.error);
            }
        });

    });


    $(".addRow").on('click', function (e) {

        e.preventDefault();
        var rowId = $(this).attr('id');
        var counter = rowId.split(/[-]/);
        var guestName = $('#name' + counter[1]).html();
        var guestEmail = $('#email' + counter[1]).html();
        var guestPhone = $('#phone' + counter[1]).html();

        $.ajax({
            type: "POST",
            url: "addContact",
            data: {
                guestName: guestName,
                guestEmail: guestEmail,
                guestPhone: guestPhone
            },
            success: function (data) {
                if (data.message) {
                    showAlert("ooops!!", data.message, "error");
                }
                else {
                    $('#row' + counter[1]).remove();
                    showAlert("Yippe!!", "Guest Added", "success");
                }
            },
            error: function (data) {

            }
        });
    })


    $("#addSelected").on('click', function (e) {

        e.preventDefault();
        var totalChecked = $("input[name='googleContacts']:checked").map(function (index, el) {
            return $(el).attr('id').split(/[-]/)[1]
        }).get();
        var i;
        var contacts = new Array();
        for (i = 0; i < totalChecked.length; i++) {
            contacts[i] = {
                "guestName": $('#name' + totalChecked[i]).html()
                , "guestEmail": $('#email' + totalChecked[i]).html()
                , "guestPhone": $('#phone' + totalChecked[i]).html()
            };
        }

        $.ajax({
            type: "POST",
            url: "addMultipleGoogleContacts",
            data: {
                contacts: contacts
            },
            success: function (data) {
                if (data.message) {
                    showAlert("ooops!!", data.message, "error");
                }
                else {
                    for (i = 0; i < totalChecked.length; i++) {
                        $('#row' + totalChecked[i]).remove();
                    }
                    //$('#row'+counter[1]).remove();

                    showAlert("Yippe!!", "Guests Added", "success");
                }
            },
            error: function (data) {

            }
        });

    });

    $("#deleteSelected").on('click', function (e) {

        e.preventDefault();
        var totalChecked = $("input[name='contacts']:checked").map(function (index, el) {
            return $(el).attr('id').split(/[-]/)[1]
        }).get();
        var i;
        var contacts = new Array();
        for (i = 0; i < totalChecked.length; i++) {

            contacts.push($('#email' + totalChecked[i]).html());
        }
        $.ajax({
            type: "POST",
            url: "deleteMultipleGoogleContacts",
            data: {
                contacts: contacts
            },
            success: function (data) {
                if (data.message) {
                    showAlert("ooops!!", data.message, "error");
                }
                else {
                    for (i = 0; i < totalChecked.length; i++) {
                        $('#row' + totalChecked[i]).remove();
                    }
                    //$('#row'+counter[1]).remove();

                    showAlert("Yippe!!", "Guests deleted", "success");
                }
            },
            error: function (data) {

            }
        });

    });


});

function ShowSelected(){
    $("input[name='googleContacts']:checked").parents("li").addClass('selected-contact')
}

function AddContactFromGoogle(obj) {
    //var rowId = $(this).attr('id');
    //var counter = rowId.split(/[-]/);
    //var guestName = $('#name' + counter[1]).html();
    //var guestEmail = $('#email' + counter[1]).html();
    //var guestPhone = $('#phone' + counter[1]).html();

    var count = $("li[googleId='" + obj + "']").find("input[name='googleContacts']:checked").length

    if(count <=0)
    {
        $("li[googleId='" + obj + "']").find("input[name='googleContacts']").prop('checked', true);

    }
    else
    {
        $("li[googleId='" + obj + "']").find("input[name='googleContacts']").prop('checked', false);
    }
    ShowSelected();
}
    function AddSelectContactsFromGoogle(){
        var contacts =[];
        $("input[name='googleContacts']:checked").each(function(index){
            var googleId =$(this).parents("li").attr("googleId");
            var googleName = $(this).parents("li").attr("googleName");
            var googlePhone = $(this).parents("li").attr("googlePhone");
            var googleEmail = $(this).parents("li").attr("googleEmail");
            contacts.push({
                guestName: googleName,
                guestEmail: googlePhone,
                guestPhone: googleEmail
            })

        })
        $.ajax({
            type: "POST",
            url: "addMultipleGoogleContacts",
            data: {
                contacts: contacts
            },
            success: function (data) {
                if (data.message) {
                    showAlert("ooops!!", data.message, "error");
                }
                else {

                    //$('#row'+counter[1]).remove();

                    showAlert("Yippe!!", "Guests Added", "success");
                }
            },
            error: function (data) {

            }
        });
    }

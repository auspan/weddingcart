@extends('app')

@section('content')

<meta name="_token" content="{{ csrf_token() }}">

    <div class="heading-block center topmargin page-section">
        <h2>Contacts</h2>
    </div>
    <div class=" container clearfix content-wrap">
        <div class="table table-responsive">
        <table id="myTable" class="table table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="checkAll" name="query_myTextEditBox"> Select All
                        </label>
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                @foreach($people as $person)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td id="name{{$i}}">{{ $person['name']}}</td>
                        <td id="email{{$i}}">{{ $person['email'] }}</td>
                        <td id="phone{{$i}}">{{ $person['phone'] }}</td>
                        <td scope="row"><input type="checkbox" id="checkbox{{ $i }}" name="query_myTextEditBox"></td>
                        <td><button type="button" class="btn btn-primary savecontact" id="save-{{ $i }}">&nbsp;&nbsp;&nbsp;&nbsp;Save</button>
                        </td>
                    </tr>
                    <?php  $i++; ?>
                @endforeach

                       
        </tbody>  

      </table>
        </div>
        </div>
<div class="center bottommargin-lg">
{{--    <a href="{{ url('contacts') }}" class="button button-rounded button-xlarge">Import Google Contacts</a>--}}
</div>

<script>

$(document).ready(function(){
    $('#myTable').dataTable();
    $("#checkAll").change(function(){
      $("input:checkbox").prop('checked',$(this).prop("checked"));
      $("#saveSelected").attr("disabled", !checkboxes.is(":checked"));
    })
    var checkboxes = $('input:checkbox'),
    submitButt = $("#saveSelected");
    checkboxes.click(function() {
    submitButt.attr("disabled", !checkboxes.is(":checked"));
});

/*    $("#saveSelected").click(function(){
      var selectedCheckbox=$('input:checkbox')
    })    */      // get all selected checkbox and call relavent save button within loop

    $(".savecontact").click(function(){
      var id=$(this).attr('id');
      var idfields=id.split(/[-]/);
      var count=idfields[1];
      $.ajaxSetup({
        headers:{
          'X-CSRF-Token':$('meta[name="_token"]').attr('content')
        }
      })
      var personName=$("#name"+count).html();
      var personEmail=$("#email"+count).html();
      var personPhone=$("#phone"+count).html();
      $.ajax({
        type:"POST",
        url:'/savecontact',
        dataType:'json',
        data:{
            personName:personName,
            personEmail:personEmail,
            personPhone:personPhone,
        },
        success:function(data)
        {
          var response=data;
          if(response==1)
          {
          alert("Contact Saved");
          }
          else
          {
            alert("Some Error Occured");
          }
        },
        error:function(data)
        {
          alert(data);
        }
      })
    })
      })
    
</script> 
@stop
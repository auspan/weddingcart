@if(session()->has('flash_message'))

    <input id="flashMessageTitle" type="hidden" value="{{ session('flash_message.title') }}">
    <input id="flashMessage" type="hidden" value="{{ session('flash_message.message') }}">
    <input id="flashMessageLevel" type="hidden" value="{{ session('flash_message.level') }}">
    <script type="text/javascript">
        swal({
            title: "{{ session('flash_message.title') }}",
            text: "{{ session('flash_message.message') }}",
            type: "{{ session('flash_message.level') }}",
            timer: 1500,
            showConfirmButton: false
        });
    </script>
@endif

@if(session()->has('flash_message_overlay'))
    <script type="text/javascript">
        swal({
            title: "{{ session('flash_message_overlay.title') }}",
            text: "{{ session('flash_message_overlay.message') }}",
            type: "{{ session('flash_message_overlay.level') }}",
            confirmButtonText: "OK!"
        });
    </script>
@endif
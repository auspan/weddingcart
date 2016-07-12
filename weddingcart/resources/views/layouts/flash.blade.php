@if(session()->has('flash_notification.message'))

    <script type="text/javascript">
        swal({
            title: "{{ session('flash_notification.title') }}",
            text: "{{ session('flash_notification.message') }}",
            type: "{{ session('flash_notification.level') }}",
            timer: 1500,
            showConfirmButton: false
        });
    </script>
@endif

@if(session()->has('flash_notification.overlay'))
    <script type="text/javascript">
        swal({
            title: "{{ session('flash_notification.title') }}",
            text: "{{ session('flash_notification.message') }}",
            type: "{{ session('flash_notification.level') }}",
            confirmButtonText: "OK!"
        });
    </script>
@endif
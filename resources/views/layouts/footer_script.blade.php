<script>
    @if(Session::has('message'))

    // success_noti();

    swal("{{Session::get('title')}}", "{{Session::get('message')}}", "{{Session::get('type')}}")
    var ms = "{{Session::get('message')}}";
    @endif
    function success_noti() {
        Lobibox.notify('success', {
            pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
            position: 'top right',
            icon: 'fa fa-check-circle',
            msg: ms
        });
    }
</script>
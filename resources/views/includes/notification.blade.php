<script>

    @if(Session::has('success'))
    $.notify(
        {
            message: '{{Session::get('success')}}',
            title: 'Berhasil',
            icon: 'fa fa-check-circle',
        },
        {
            //setting
            type: 'success',
            placement: {
                from: 'top',
                align: 'right'
            },
            time: 100,
            delay: 5000,
            allow_dismiss: true
        });

    @php
        Session::forget('success');
    @endphp
    @endif

    @if(Session::has('info'))
    $.notify(
        {
            message: '{{Session::get('info')}}',
            title: 'Informasi',
            icon: 'fa fa-info',
        },
        {
            //setting
            type: 'info',
            placement: {
                from: 'top',
                align: 'right'
            },
            time: 1000,
            delay: 5000,
            allow_dismiss: true
        });

    @php
        Session::forget('info');
    @endphp
    @endif

    @if(Session::has('warning'))
    $.notify(
        {
            message: '{{Session::get('warning')}}',
            title: 'Peringatan',
            icon: 'fa fa-exclamation-triangle',
        },
        {
            //setting
            type: 'warning',
            placement: {
                from: 'top',
                align: 'right'
            },
            time: 1000,
            delay: 5000,
            allow_dismiss: true
        });

    @php
        Session::forget('error');
    @endphp
    @endif

    @if(Session::has('error'))
    $.notify(
        {
            message: '{{Session::get('error')}}',
            title: 'Terjadi Kesalahan',
            icon: 'fa fa-exclamation',
        },
        {
            //setting
            type: 'danger',
            placement: {
                from: 'top',
                align: 'right'
            },
            time: 1000,
            delay: 5000,
            allow_dismiss: true
        });

    @php
        Session::forget('error');
    @endphp
    @endif


</script>

<!--   Core JS Files   -->
<script src="{{ asset('js/core/jquery.3.2.1.min.js')}}"></script>
<script src="{{ asset('js/core/popper.min.js')}}"></script>
<script src="{{ asset('js/core/bootstrap.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

<!-- Moment JS -->
<script src="{{asset('/js/plugin/moment/moment.min.js')}}"></script>

<!-- Bootstrap Notify -->
<script src="{{asset('/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<!-- Bootstrap Toggle -->
<script src="{{asset('/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>

<!-- DateTimePicker -->
<script src="{{asset('/js/plugin/datepicker/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('/js/plugin/select2/select2.full.min.js')}}"></script>

<!-- Sweet Alert -->
<script src="{{asset('/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

<!-- Atlantis JS -->
<script src="{{asset('/js/atlantis2.min.js')}}"></script>

@yield('js-plugin')

@yield('inline-js')

@include('includes.notification')

<script>
    $(document).ready(function () {
        $('#tanggalan').html(Intl.DateTimeFormat().resolvedOptions().timeZone);
        var date = new Date(), y = date.getFullYear(), m = date.getMonth();
        var firstDay = new Date(y, m, 1);
        var lastDay = new Date(y, m + 1, 0);

        console.log(firstDay);
        console.log(lastDay);

    })
</script>

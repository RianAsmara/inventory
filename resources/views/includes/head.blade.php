<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>RSUP Inventory - @yield('title')</title>
<link rel="icon" href="{{asset('/img/icon.ico')}}" type="image/x-icon" sizes="32x32"/>

{{--  Font And Icons  --}}

<script src="{{asset('js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
                ],
                urls: ['{{asset('css/fonts.min.css')}}']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });

    </script>

<!-- General CSS Files -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/atlantis2.min.css')}}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{asset('css/demo.css')}}">


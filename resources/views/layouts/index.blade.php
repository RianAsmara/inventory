<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Head --}}
    @include('includes.head')
    {{-- End --}}
</head>

<body>
    <div class="wrapper horizontal-layout-2">

        {{-- Header --}}
        @include('includes.header')
        {{-- End --}}

        <div class="main-panel">
            <div class="content">
                    <a href="{{route("cetak")}}" target="_blank" > click me to pdf </a>
                    <div id="tanggalan">

                    </div>
                <section class="section">
                    @yield('content')
                </section>
            </div>
        </div>
        {{-- Footer --}}
        @include('includes.footer')
        {{-- End --}}
    </div>
    {{-- Foot --}}
    @include('includes.foot')
    {{-- End --}}
</body>

</html>

<div>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

    @if(isset($csstempl))
    @foreach($csstempl as $cssxxxxx)
    <!-- {{$cssxxxxx['comentar']}} -->
    <link rel="stylesheet" href="{{$cssxxxxx['cssxxxxx']}}">


    @endforeach
    @endif
    @yield('styles')
</div>
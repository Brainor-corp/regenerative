<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('v1.head.meta')
    @include('v1.head.head')

    @yield('styles')
    @yield('headScripts')

    <title>@yield('title')</title>
</head>

<body>

{{--Шапка--}}
@include('v1.head.main-page-header')

{{--Контент страницы--}}
@yield('content')

{{--Подвал--}}
@include('v1.footer.footer')


<!-- Scripts -->
@include('v1.footer.scripts')
@yield('footScripts')

</body>

</html>
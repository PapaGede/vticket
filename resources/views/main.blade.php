<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials._head')
</head>
    <!-- Navigation -->
    @include('partials._nav')
    <!-- Header -->
    @yield('content')
    <!-- Footer -->
    @include('partials._footer')

    @include('partials._javascript')

</html>

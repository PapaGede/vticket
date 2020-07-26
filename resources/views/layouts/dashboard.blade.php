<!DOCTYPE html>
<html lang="en">
    @section('page','| Dashboard')
    @include('partials._dashHeader')
    <body class="sb-nav-fixed">
        @include('partials._dashNav')
        @include('partials._dashSidebar')



            @include('partials._dashFooter')
        @include('partials._dashScripts')
    </body>
</html>

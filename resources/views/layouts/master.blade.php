<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
@include('layouts.header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @yield('content')
</div>

<!--==================== FOOTER ====================-->
@include('layouts.footer')
<!--==================== MAIN JS ====================-->
@include('layouts.script')
</body>

</html>

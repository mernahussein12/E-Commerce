<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('backend.inc.head')
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
   @include('backend.inc.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
   @include('backend.inc.menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
       @yield('content')
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
  @include('backend.inc.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
 @include('backend.inc.script')
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>

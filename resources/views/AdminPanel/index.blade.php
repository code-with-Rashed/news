@include('AdminPanel.Layout.header')
@include('AdminPanel.Layout.sidebar')

<!-- Content Area Start-->
<div class="col-10">
    <!-- Topbar Area Start-->
    @include('AdminPanel.Layout.topbar')
    <!-- Topbar Area End -->
    <!-- Content Management Area Start -->
    {{ $slot }}
    <!-- Content Management Area End -->
</div>
<!-- Content Area End-->

@include('AdminPanel.Layout.footer')

@include("UsersPanel.Layout.sidebar")
<!-- Content Area Start-->
<div class="main p-3">
    {{ $slot }}
</div>
<!-- Content Area End-->
@include("UsersPanel.Layout.footer")

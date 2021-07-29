@include('layout.header') <!-- Template Üst Kısmı (Sidebar'ı da içerir.)-->

<div class="page-heading">
    <h3>@yield('content_title')</h3> <!-- Özelleştirilebilir Sayfa Başlığı -->
</div>
<div class="page-content">
    @yield('content')   <!-- Özelleştirilebilir Sayfa İçeriği -->
</div>
@include('layout.footer') <!-- Template Alt Kısmı -->

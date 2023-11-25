<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="{{asset('backend/assets/brand/coreui.svg#full')}}"></use>
      </svg>
      <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
        <use xlink:href="{{asset('backend/assets/brand/coreui.svg#signet')}}"></use>
      </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
      <li class="nav-item"><a class="nav-link" href="{{route('dashbord')}}">
          <svg class="nav-icon">
            <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
          </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a>
      </li>
    
      {{-- brand start --}}
      <li class="nav-title">Ecommerce Functionality</li>
      <li class="nav-group"><a class="nav-link nav-group-toggle @if ( Route::currentRouteNamed('brand.create')|| Route::currentRouteNamed('brand.manage') || Route::currentRouteNamed('brand.edit')) active @endif" href="#">
          <svg class="nav-icon">
            <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
          </svg> Brands</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link @if (Route::currentRouteNamed('brand.create')) actived @endif" href="{{route('brand.create')}}"><span class="nav-icon"></span> - Create New Brand</a></li>
          <li class="nav-item"><a class="nav-link @if (Route::currentRouteNamed('brand.manage')) actived @endif" href="{{route('brand.manage')}}"><span class="nav-icon"></span> - Manage All Brands</a></li>
        </ul>
      </li>

      {{-- brand ends --}}

      {{-- category menu --}}
      <li class="nav-group"><a class="nav-link nav-group-toggle @if ( Route::currentRouteNamed('category.create')|| Route::currentRouteNamed('category.manage') || Route::currentRouteNamed('category.edit')) active @endif" href="#">
          <svg class="nav-icon">
            <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
          </svg> Category</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link @if (Route::currentRouteNamed('category.create')) actived @endif" href="{{route('category.create')}}"><span class="nav-icon"></span> - Create New Category</a></li>
          <li class="nav-item"><a class="nav-link @if (Route::currentRouteNamed('category.manage')) actived @endif" href="{{route('category.manage')}}"><span class="nav-icon"></span> - Manage All Categories</a></li>
        </ul>
      </li>
     

      {{-- category end --}}
      {{-- Product  start --}}
      <li class="nav-group"><a class="nav-link nav-group-toggle @if ( Route::currentRouteNamed('product.create')|| Route::currentRouteNamed('product.manage') || Route::currentRouteNamed('product.edit')) active @endif" href="#">
          <svg class="nav-icon">
            <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
          </svg> Product </a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link @if (Route::currentRouteNamed('product.create')) actived @endif" href="{{route('product.create')}}"><span class="nav-icon"></span> - Create New Product</a></li>
          <li class="nav-item"><a class="nav-link @if (Route::currentRouteNamed('product.manage')) actived @endif" href="{{route('product.manage')}}"><span class="nav-icon"></span> - Manage All products</a></li>
        </ul>
      </li>
     

      {{-- Product end --}}
  
     
      <li class="nav-divider"></li>
      <li class="nav-title">Location/Area Manager</li>
 {{-- Division start --}}
      <li class="nav-group"><a class="nav-link nav-group-toggle  @if ( Route::currentRouteNamed('division.create')|| Route::currentRouteNamed('division.manage') || Route::currentRouteNamed('division.edit')) active @endif" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
        </svg> Division Manager </a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link @if (Route::currentRouteNamed('division.create')) actived @endif" href="{{route('division.create')}}"><span class="nav-icon"></span> - Create New Division</a></li>
        <li class="nav-item"><a class="nav-link @if (Route::currentRouteNamed('division.manage')) actived @endif" href="{{route('division.manage')}}"><span class="nav-icon"></span> - Manage All Division</a></li>
      </ul>
    </li>
     {{-- Division end --}}


      {{-- District start --}}
      <li class="nav-group"><a class="nav-link nav-group-toggle  @if ( Route::currentRouteNamed('district.create')|| Route::currentRouteNamed('district.manage') || Route::currentRouteNamed('district.edit')) active @endif" href="#">
        <svg class="nav-icon">
          <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
        </svg> District Manager </a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link @if (Route::currentRouteNamed('district.create')) actived @endif" href="{{route('district.create')}}"><span class="nav-icon"></span> - Create New District</a></li>
        <li class="nav-item"><a class="nav-link @if (Route::currentRouteNamed('district.manage')) actived @endif" href="{{route('district.manage')}}"><span class="nav-icon"></span> - Manage All District</a></li>
      </ul>
    </li>
     {{-- Distirict end --}}

{{-- Slider start --}}
<li class="nav-group"><a class="nav-link nav-group-toggle  @if ( Route::currentRouteNamed('slider.create')|| Route::currentRouteNamed('slider.manage') || Route::currentRouteNamed('slider.edit')) active @endif" href="#">
  <svg class="nav-icon">
    <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
  </svg> Slider Manager </a>
<ul class="nav-group-items">
  <li class="nav-item"><a class="nav-link @if (Route::currentRouteNamed('slider.create')) actived @endif" href="{{route('slider.create')}}"><span class="nav-icon"></span> - Create New Slider</a></li>
  <li class="nav-item"><a class="nav-link @if (Route::currentRouteNamed('slider.manage')) actived @endif" href="{{route('slider.manage')}}"><span class="nav-icon"></span> - Manage All Slider</a></li>
</ul>
</li>
{{-- Distirict end --}}



      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
          </svg> Pages</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
              <svg class="nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
              </svg> Login</a></li>
          <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
              <svg class="nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
              </svg> Register</a></li>
          <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
              <svg class="nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
              </svg> Error 404</a></li>
          <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
              <svg class="nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
              </svg> Error 500</a></li>
        </ul>
      </li>
      <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/" target="_blank">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
          </svg> Docs</a></li>
      <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
          </svg> Try CoreUI
          <div class="fw-semibold">PRO</div>
        </a></li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
  </div>
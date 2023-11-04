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
      <li class="nav-title">Components</li>
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
          </svg> Brands</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="{{route('brand.create')}}"><span class="nav-icon"></span> - Create New Brand</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('brand.manage')}}"><span class="nav-icon"></span> - Manage All Brands</a></li>
        </ul>
      </li>

      {{-- brand ends --}}

      {{-- category menu --}}
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
          </svg> Category</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="{{route('category.create')}}"><span class="nav-icon"></span> - Create New Category</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('category.manage')}}"><span class="nav-icon"></span> - Manage All Categories</a></li>
        </ul>
      </li>
     

      {{-- category end --}}
      {{-- Product  start --}}
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="{{asset('backend/vendors/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
          </svg> Product </a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="{{route('product.create')}}"><span class="nav-icon"></span> - Create New Product</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('product.manage')}}"><span class="nav-icon"></span> - Manage All products</a></li>
        </ul>
      </li>
     

      {{-- Product end --}}
  
      <li class="nav-item"><a class="nav-link" href="widgets.html">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
          </svg> Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
      <li class="nav-divider"></li>
      <li class="nav-title">Extras</li>
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

<!DOCTYPE html><!--
    * CoreUI - Free Bootstrap Admin Template
    * @version v4.2.2
    * @link https://coreui.io/product/free-bootstrap-admin-template/
    * Copyright (c) 2023 creativeLabs Łukasz Holeczek
    * Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
    --><!-- Breadcrumb-->
    <html lang="en">
      <head>
        @include('backend.includes.header')
        @include('backend.includes.css')

        
      </head>
      <body>
      
        @include('backend.includes.leftbar')


        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        
            @include('backend.includes.topbar')


             {{-- //body content  --}}

                @yield('body')
    
                {{-- //body content  --}}
        
        
            @include('backend.includes.footer')

        </div>
       
        @include('backend.includes.script')
    
      </body>
    </html>
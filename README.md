<p align="center"><a href="https://image.intervention.io/v2/introduction/installation#installation" target="_blank">Image Extension for laravel . </a></p>

## Full Link of all connecton

-   <a href="https://gitmind.com/app/docs/mndruk9k">Git Mind of database with frontend</a>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

-prepare the folder structure for admin and frontend

==============================>>>>>>>>>>>>>>>>>>>>>>>>=======================
-Model = Backend and Frontend
-Controller = Backend and Frontend
-view = Backend and Frontend

==========================>>>>>>>>>>>>>>>>>>>>>>>>=======================
migrations with command

==========================>>>>>>>>>>>>>>>>>>>>>>>>=======================
manage page a pic dekhano
serial number thik kora
is_featured and status show
code is below
==========================>>>>>>>>>>>>>>>>>>>>>>>>=======================

@php $i=1; @endphp
    @foreach ( $brands as $brand )
                <tr>
                    <th scope="row">{{$i}}</th>
<td>
@if(!is_null($brand->image))
                        <img src="{{ asset('Backend/img/brand') }}/{{$brand -> image}}" alt="" width="30">
@else
No Thumbanil
@endif
</td>
<td>{{$brand -> name}}</td>
<td>{{$brand -> slug}}</td>
<td>{{$brand -> description}}</td>
{{-- {{$brand -> is_featured}} --}}
<td>
@if ($brand -> is_featured == 1)
                            <span class="badge bg-success">Yes</span>
                        @else
                            <span class="badge bg-warning">No</span>
                        @endif
                    </td>
                    {{-- {{$brand -> status}} --}}
<td>
@if ($brand -> status == 1)
<span class="badge bg-success">Active</span>
@else
<span class="badge bg-danger">InActive</span>
@endif
</td>
<td >
<i class="fa-solid fa-pen-to-square text-success me-2"></i>

                        <i class="fa-solid fa-trash text-danger ms-2"></i>
                    </td>
                  </tr>

    @php $i++; @endphp

@endforeach





<!-- when i want to login or register then it takes me to /dashboard but we need to go to /admin/dashbord so we need to do this ==> app . providers . routeServiceProvider 
update it   public const HOME = '/dashboard'; to admin/dashbord-->

-   public const HOME = 'admin/dashbord';

<!-- logout code if need to change it . i will change it  -->

#   <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        
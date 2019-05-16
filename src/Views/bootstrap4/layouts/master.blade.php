@extends($master)

@section('contentd938986cce0df4f7a7861b6e2tickets')
    @include('ticketit::shared.header')

    <div class="container px-0">
        <div class="card mb-3 mt-2 mt-md-0 mt-lg-0">
            <div class="card-body">
                @include('ticketit::shared.nav')
            </div>
        </div>
        @if(View::hasSection('ticketit_content'))
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-baseline flex-wrap">
                    @if(View::hasSection('page_title'))
                        <span>@yield('page_title')</span>
                    @else
                        <span>@yield('page')</span>
                    @endif

                    @yield('ticketit_header')
                </h5>
                <div class="card-body @yield('ticketit_content_parent_class')">
                    @yield('ticketit_content')
                </div>
            </div>
        @endif
        @yield('ticketit_extra_content')
    </div>
@endsection

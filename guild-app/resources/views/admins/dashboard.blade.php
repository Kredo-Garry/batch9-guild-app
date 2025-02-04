@extends('admins.app')

@section('title')

@section('content')
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    {{-- @if (request()->is('admin/*')) --}}
                        <div class="col-2">
                            <div class="list-group">
                                <a href="{{ route('admin.freelancer') }}" class="list-group-item {{ request()->is('admin/freelancer') ? 'active' : '' }}">
                                    Freelancer
                                </a>
                                <a href="{{ route('admin.company') }}" class="list-group-item {{ request()->is('admin/company') ? 'active' : '' }}">
                                    Company
                                </a>
                                <a href="{{ route('admin.job') }}" class="list-group-item {{ request()->is('admin/job') ? 'active' : '' }}">
                                    Job
                                </a>
                                <a href="{{ route('admin.transaction') }}" class="list-group-item {{ request()->is('admin/transaction') ? 'active' : '' }}">
                                    Transaction
                                </a>
                            </div>
                        </div>
                    {{-- @endif --}}

                    <div class="col-10">
                        @yield('page-content')
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

@endsection
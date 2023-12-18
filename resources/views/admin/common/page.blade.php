@include('admin.common.header')

@include('admin.common.sidebar')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@hasSection('content')
    @yield('content')
@endif

@include('admin.common.footer')

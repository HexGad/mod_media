@extends('dashboard.layouts.base')
@section('toolbar')
    @include('dashboard.layouts.components.toolbar',[
        'title' => 'Media',
        'breadcrumbs' => [
            ['title'=> 'Home', 'url' => url('/dashboard/')],
            ['title'=> 'Media', 'url' => route('dashboard.media.index')],
            ['title'=> 'Create Media'],
        ]
    ])
@endsection

@push('styles')
    {{ module_vite('media', 'resources/assets/sass/app.scss') }}
@endpush


@section('content')
    <div id="app">
        <create></create>
    </div>
@endsection

@push('scripts')
    {{ module_vite('media', 'resources/assets/js/app.js') }}
@endpush

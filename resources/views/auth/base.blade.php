@extends('layouts.app')

@section('content')
    <div class="relative max-w-lg p-4 mx-auto flex min-h-screen py-6">
        <div class="rounded-lg shadow bg-black-blue w-full m-auto">
            @yield('form_content')
        </div>
    </div>
@endsection

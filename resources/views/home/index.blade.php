@extends('layouts.app')

@section('content')
    <div class="relative w-full p-4 h-full">
        @include('layouts.alerts')
        <div class="py-12 mx-auto my-8 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 max-w-7xl">
                <div class="bg-black-blue h-52 flex flex-col">
                    <div class="flex flex-row">
                        <p class="mx-auto my-6 text-white font-medium text-lg">Создать уведомление</p>
                    </div>
                    <button type="button" data-modal-toggle="add-event-modal">
                        <svg class="w-28 m-auto" xmlns="http://www.w3.org/2000/svg" fill="#28313D" viewBox="0 0 32 32"><defs><style>.cls-1 {fill: none;}</style></defs><title/><g data-name="Layer 2" id="Layer_2"><path d="M16,29A13,13,0,1,1,29,16,13,13,0,0,1,16,29ZM16,5A11,11,0,1,0,27,16,11,11,0,0,0,16,5Z"/><path d="M16,23a1,1,0,0,1-1-1V10a1,1,0,0,1,2,0V22A1,1,0,0,1,16,23Z"/><path d="M22,17H10a1,1,0,0,1,0-2H22a1,1,0,0,1,0,2Z"/></g><g id="frame"><rect class="cls-1" height="32" width="32"/></g></svg>
                    </button>
                </div>

            @include('home.event_items')
        </div>
    </div>

    <!-- Modal -->
    @include('modals.event_add')
    @include('modals.event_delete')
    @include('modals.empty')
@endsection

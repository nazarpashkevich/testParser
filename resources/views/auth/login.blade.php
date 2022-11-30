@extends('auth.base')

@section('form_content')
    <form action="{{ route('auth.login.login') }}" method="post">
        @csrf
        <div class="flex justify-between items-start pb-0 rounded-t">
            <h3 class="text-xl font-semibold text-white mx-auto m-6">
                Вход в систему
            </h3>
        </div>
        <div class="space-y-6 mb-6">
            <div class="mb-6 m-6">
                <label for="email" class="block mb-2 text-sm text-white">Email</label>
                <input type="email" id="email" name="email" class="border text-sm rounded-lg block w-full p-2.5 bg-black-blue
                    border-gray-700 text-white" required value="{{ old('email') }}">
                @error('email')
                    <div class="text-red-700 text-sm py-2">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="mb-6 m-6">
                <label for="password" class="block mb-2 text-sm text-white">Пароль</label>
                <input type="password" id="password" class="border text-sm rounded-lg block w-full p-2.5 bg-black-blue
                    border-gray-700 text-white" required name="password">
                @error('password')
                    <div class="text-red-700 text-sm py-2">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
            @error('all')
                <div class="text-red-700 text-sm py-2 mx-4">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </div>
        <div class="flex items-center p-6 rounded-b border-t border-gray-600 justify-between">
            <button type="submit" class="text-white focus:outline-none rounded py-2 text-center
                bg-light-blue w-full mr-8">
                Вход
            </button>
            <a href="{{ route('auth.registration') }}" class="text-light-blue focus:outline-none rounded py-2
                text-center border-light-blue border-2 w-full">
                Регистрация
            </a>
        </div>
    </form>
@endsection

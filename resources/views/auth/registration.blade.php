@extends('auth.base')

@section('form_content')
    <form action="{{ route('auth.registration.register') }}" method="post">
        @csrf
        <div class="flex justify-between items-start pb-0 rounded-t">
            <h3 class="text-xl font-semibold text-white mx-auto mt-6">
                Регистрация
            </h3>
        </div>
        <div class="space-y-6">
            <div class="m-6">
                <label for="first_name" class="block mb-2 text-sm text-white">Имя</label>
                <input type="text" id="first_name" name="first_name" class="border text-sm rounded-lg block w-full
                    p-2.5 bg-black-blue border-gray-700 text-white" required value="{{ old('first_name') }}">
                @error('first_name')
                    <div class="text-red-700 text-sm py-2">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="m-6">
                <label for="last_name" class="block mb-2 text-sm text-white">Фамилия</label>
                <input type="text" id="last_name" name="last_name" class="border text-sm rounded-lg block w-full
                    p-2.5 bg-black-blue border-gray-700 text-white" required value="{{ old('last_name') }}">
                @error('last_name')
                    <div class="text-red-700 text-sm py-2">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="m-6">
                <label for="email" class="block mb-2 text-sm text-white">Email</label>
                <input type="email" id="email" name="email" class="border text-sm rounded-lg block w-full p-2.5
                    bg-black-blue border-gray-700 text-white" required value="{{ old('email') }}">
                @error('email')
                <div class="text-red-700 text-sm py-2">
                    <p>{{ $message }}</p>
                </div>
                @enderror
            </div>
            <div class="m-6">
                <label for="password" class="block mb-2 text-sm text-white">Пароль</label>
                <input type="password" id="password" name="password" class="border text-sm rounded-lg block w-full
                    p-2.5 bg-black-blue border-gray-700 text-white" required minlength="6">
                @error('password')
                    <div class="text-red-700 text-sm py-2">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="m-6">
                <label for="password_confirmation" class="block mb-2 text-sm text-white">Подтверждение пароля</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="border text-sm
                    rounded-lg block w-full p-2.5 bg-black-blue border-gray-700 text-white" required minlength="6">
                @error('password_confirmation')
                    <div class="text-red-700 text-sm py-2">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
            @error('all')
                <div class="text-red-700 text-sm py-2">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </div>
        <div class="flex flex-col items-center mt-6 rounded-b border-t border-gray-600 m-6">
            <button type="submit" class="text-white focus:outline-none rounded py-2 text-center
                bg-light-blue w-full">
                Зарегистрироваться
            </button>
            <p class="text-white font-medium text-sm my-4">Уже есть аккаунт?
                <a class="text-light-blue" href="{{ route('auth.login') }}">Вход</a>
            </p>
        </div>
    </form>
@endsection

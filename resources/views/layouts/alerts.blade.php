@if(\Session::has('successMessages'))
    @foreach(\Session::get('successMessages') as $msg)
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
             role="alert">
            <span class="font-medium">Успешно!</span> {{ $msg }}
        </div>
    @endforeach
@endif
@if(\Session::has('errorMessages'))
    @foreach(\Session::get('errorMessages') as $msg)
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium">Ошибка!</span> {{ $msg }}
        </div>
    @endforeach
@endisset

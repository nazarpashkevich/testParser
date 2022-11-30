<div id="add-event-modal" class="hidden relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all
                sm:my-8 sm:w-full sm:max-w-lg bg-black-blue my-auto">
                <form action="{{ route('event.create') }}" method="post">
                    @csrf
                    <div class="flex justify-between items-start p-6 pb-0 rounded-t">
                        <h3 class="text-xl font-semibold text-white mx-auto">
                            Общие настройки
                        </h3>
                    </div>
                    <div class="p-6 space-y-6">
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm text-white">Название уведомления</label>
                            <input type="text" id="name" name="name" class="border text-sm rounded-lg block w-full p-2.5
                                bg-black-blue border-gray-700 text-white" required>
                            @error('name')
                                <div class="text-red-700 text-sm py-2">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="check_period" class="block mb-2 text-sm text-white">
                                Период проверки новых объявлений (минут)
                            </label>
                            <input type="text" id="check_period" name="check_period" class="border text-sm rounded-lg
                                block w-full p-2.5 bg-black-blue border-gray-700 text-white" required>
                            @error('check_period')
                                <div class="text-red-700 text-sm py-2">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="page_check_count" class="block mb-2 text-sm text-white">
                                Будут проверяться
                                <input type="text" id="page_check_count" name="page_check_count" class="border
                                    text-sm rounded-lg block p-2.5 inline w-10 mx-4 bg-black-blue border-gray-700
                                     text-white" required>
                                первых страниц
                                <a href="#" class="text-blue-600 hover:text-blue-700 inline mr-2" title="Текст подсказки">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline bi bi-question-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/></svg>
                                </a>
                            </label>

                            @error('page_check_count')
                                <div class="text-red-700 text-sm py-2">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block mb-2 text-sm text-white inline-flex">
                                <input type="checkbox" name="track_idealist_check" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4
                                 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800
                                  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-['']
                                   after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300
                                    after:border after:rounded-full after:h-5 after:w-5 after:transition-all
                                     peer-checked:bg-blue-600 relative inline mr-4"></div>
                                Следить за Идеалиста
                            </label>
                            <input type="text" id="track_idealist_text" name="track_idealist_text" class="border text-sm rounded-lg
                                block w-full p-2.5 bg-black-blue border-gray-700 text-white">
                            @error('track_idealist_text')
                                <div class="text-red-700 text-sm py-2">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block mb-2 text-sm text-white inline-flex">
                                <input type="checkbox" name="track_olx_check" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4
                                 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800
                                  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-['']
                                   after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300
                                    after:border after:rounded-full after:h-5 after:w-5 after:transition-all
                                     peer-checked:bg-blue-600 relative inline mr-4"></div>
                                Следить за OLX
                            </label>
                            <input type="text" id="track_olx_text" name="track_olx_text" class="border text-sm rounded-lg
                                block w-full p-2.5 bg-black-blue border-gray-700 text-white">
                            @error('track_olx_text')
                                <div class="text-red-700 text-sm py-2">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block mb-2 text-sm text-white inline-flex">
                                <input type="checkbox" name="track_fb_check" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4
                                 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800
                                  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-['']
                                   after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300
                                    after:border after:rounded-full after:h-5 after:w-5 after:transition-all
                                     peer-checked:bg-blue-600 relative inline mr-4"></div>
                                Следить за FB
                            </label>
                            <input type="text" id="track_fb_text" name="track_fb_text" class="border text-sm rounded-lg
                                block w-full p-2.5 bg-black-blue border-gray-700 text-white">
                            @error('track_fb_text')
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
                    <div class="flex items-center p-6 rounded-b border-t border-gray-600 justify-between">
                        <button type="submit" class="text-white focus:outline-none rounded px-12 py-2 text-center
                             bg-light-blue w-full mr-8">
                            Сохранить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

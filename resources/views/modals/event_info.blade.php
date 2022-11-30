<div class="flex justify-between items-start p-6 pb-0 rounded-t">
    <h3 class="text-xl font-semibold text-white mx-auto">
        Общие настройки
    </h3>
</div>
<div class="p-6 space-y-6">
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm text-white">Название уведомления</label>
        <input type="text" value="{{ $event->name }}" class="border text-sm rounded-lg block w-full p-2.5
            bg-black-blue border-gray-700 text-white" readonly>
    </div>
    <div class="mb-6">
        <label for="check_period" class="block mb-2 text-sm text-white">
            Период проверки новых объявлений (минут)
        </label>
        <input type="text" value="{{ $event->check_period }}" class="border text-sm rounded-lg
            block w-full p-2.5 bg-black-blue border-gray-700 text-white" readonly>
    </div>
    <div class="mb-6">
        <label for="page_check_count" class="block mb-2 text-sm text-white">
            Будут проверяться
            <input type="text" value="{{ $event->page_check_count }}" class="border
                text-sm rounded-lg block p-2.5 inline w-10 mx-4 bg-black-blue border-gray-700
                    text-white" readonly>
            первых страниц
        </label>
    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm text-white inline-flex">
            <input type="checkbox" name="track_idealist_check" class="sr-only peer" disabled
                {{ $event->track_idealist_check ? 'checked' : '' }}>
            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4
                peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800
                 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-['']
                  after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300
                   after:border after:rounded-full after:h-5 after:w-5 after:transition-all
                    peer-checked:bg-blue-600 relative inline mr-4"></div>
            Следить за Идеалиста
        </label>
        <input type="text" value="{{ $event->track_idealist_text }}" class="border text-sm rounded-lg
            block w-full p-2.5 bg-black-blue border-gray-700 text-white" readonly>
    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm text-white inline-flex">
            <input type="checkbox" name="track_olx_check" class="sr-only peer" disabled
                {{ $event->track_olx_check ? 'checked' : '' }}>
            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4
                peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800
                 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-['']
                  after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300
                   after:border after:rounded-full after:h-5 after:w-5 after:transition-all
                    peer-checked:bg-blue-600 relative inline mr-4"></div>
            Следить за OLX
        </label>
        <input type="text" value="{{ $event->track_olx_text }}" class="border text-sm rounded-lg
            block w-full p-2.5 bg-black-blue border-gray-700 text-white" readonly>
    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm text-white inline-flex">
            <input type="checkbox" name="track_fb_check" class="sr-only peer" disabled
                {{ $event->track_fb_check ? 'checked' : '' }}>
            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4
                peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800
                 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-['']
                  after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300
                   after:border after:rounded-full after:h-5 after:w-5 after:transition-all
                    peer-checked:bg-blue-600 relative inline mr-4"></div>
            Следить за FB
        </label>
        <input type="text" value="{{ $event->track_fb_text }}" class="border text-sm rounded-lg
            block w-full p-2.5 bg-black-blue border-gray-700 text-white" readonly>
    </div>
</div>


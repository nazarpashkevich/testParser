<div id="modal-event-delete" class="hidden relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all
                sm:my-8 sm:w-full max-w-xs bg-black-blue justify-center my-auto">
                <form action="{{ route('event.delete') }}" method="get">
                    <input type="hidden" name="event">
                    <div class="flex">
                        <button class="w-6 ml-auto py-4 mr-4 close" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 24 24"><title>close</title><g id="Layer_2" data-name="Layer 2"><g id="close"><g id="close-2" data-name="close"><rect class="cls-1" width="24" height="24" transform="translate(24 24) rotate(180)"/><path class="cls-2" d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></g></g></g></svg>
                        </button>
                    </div>
                    <p class="text-white font-medium text-lg text-center pb-8">Вы точно хотите удалить?</p>
                    <div class="flex items-center p-6 rounded-b border-t border-gray-600 justify-between">
                        <button type="button" class="text-white focus:outline-none rounded px-12 py-2 text-center
                            bg-light-blue w-full mr-8 close">
                            Нет
                        </button>
                        <button type="submit" class="text-light-blue focus:outline-none rounded px-12
                            py-2 text-center border-light-blue border-2 w-full">
                            Да
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

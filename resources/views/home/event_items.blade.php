@foreach($events as $event)
    <div class="bg-black-blue h-52 flex flex-col">
        <div class="flex flex-row">
            <a href="#" class="mx-auto my-6 text-white font-medium text-lg w-full text-center show-event-info"
               data-id="{{ $event->id }}">
                {{ $event->name }}
            </a>
            <button class="w-6 mx-auto py-4 mr-4 delete-event" data-id="{{ $event->id }}" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 24 24"><title>close</title><g id="Layer_2" data-name="Layer 2"><g id="close"><g id="close-2" data-name="close"><rect class="cls-1" width="24" height="24" transform="translate(24 24) rotate(180)"/><path class="cls-2" d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></g></g></g></svg>
            </button>
        </div>
        <div class="mt-auto mb-6 mr-6 flex flex-col">
            <div class="ml-auto">
                <button type="button" class="bg-button-blue font-medium rounded-full text-sm p-2.5
                    text-center inline-flex items-center mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 20 20" version="1.1"><g id="surface1" fill="#fff"><path d="M 7.960938 14.570312 L 6.179688 14.570312 C 5.742188 14.570312 5.390625 14.21875 5.390625 13.785156 L 5.390625 6.222656 C 5.390625 5.789062 5.742188 5.4375 6.179688 5.4375 L 7.960938 5.4375 C 8.394531 5.4375 8.75 5.789062 8.75 6.222656 L 8.75 13.785156 C 8.75 14.21875 8.394531 14.570312 7.960938 14.570312 Z M 7.960938 14.570312 "/><path d="M 13.621094 14.5625 L 11.839844 14.5625 C 11.402344 14.5625 11.050781 14.210938 11.050781 13.777344 L 11.050781 6.214844 C 11.050781 5.78125 11.402344 5.429688 11.839844 5.429688 L 13.621094 5.429688 C 14.058594 5.429688 14.410156 5.78125 14.410156 6.214844 L 14.410156 13.777344 C 14.410156 14.210938 14.058594 14.5625 13.621094 14.5625 Z M 13.621094 14.5625 "/><path d="M 8.097656 5.449219 C 8.25 5.59375 8.347656 5.796875 8.347656 6.023438 L 8.347656 13.582031 C 8.347656 14.019531 7.996094 14.371094 7.5625 14.371094 L 5.777344 14.371094 C 5.730469 14.371094 5.6875 14.367188 5.640625 14.359375 C 5.78125 14.488281 5.96875 14.570312 6.179688 14.570312 L 7.960938 14.570312 C 8.394531 14.570312 8.75 14.21875 8.75 13.785156 L 8.75 6.222656 C 8.75 5.835938 8.46875 5.515625 8.097656 5.449219 Z M 8.097656 5.449219 "/><path d="M 13.757812 5.441406 C 13.914062 5.585938 14.011719 5.789062 14.011719 6.015625 L 14.011719 13.578125 C 14.011719 14.011719 13.65625 14.363281 13.222656 14.363281 L 11.4375 14.363281 C 11.390625 14.363281 11.347656 14.359375 11.300781 14.351562 C 11.441406 14.480469 11.628906 14.5625 11.839844 14.5625 L 13.621094 14.5625 C 14.058594 14.5625 14.410156 14.210938 14.410156 13.777344 L 14.410156 6.214844 C 14.410156 5.828125 14.128906 5.507812 13.757812 5.441406 Z M 13.757812 5.441406 "/><path d="M 39.804688 72.851562 L 30.898438 72.851562 C 28.710938 72.851562 26.953125 71.09375 26.953125 68.925781 L 26.953125 31.113281 C 26.953125 28.945312 28.710938 27.1875 30.898438 27.1875 L 39.804688 27.1875 C 41.972656 27.1875 43.75 28.945312 43.75 31.113281 L 43.75 68.925781 C 43.75 71.09375 41.972656 72.851562 39.804688 72.851562 Z M 39.804688 72.851562 " transform="matrix(0.2,0,0,0.2,0,0)"/><path d="M 68.105469 72.8125 L 59.199219 72.8125 C 57.011719 72.8125 55.253906 71.054688 55.253906 68.886719 L 55.253906 31.074219 C 55.253906 28.90625 57.011719 27.148438 59.199219 27.148438 L 68.105469 27.148438 C 70.292969 27.148438 72.050781 28.90625 72.050781 31.074219 L 72.050781 68.886719 C 72.050781 71.054688 70.292969 72.8125 68.105469 72.8125 Z M 68.105469 72.8125 " transform="matrix(0.2,0,0,0.2,0,0)"/></g></svg><span class="sr-only">Icon description</span>
                </button>
                <button type="button" class="bg-button-blue font-medium rounded-full text-sm p-2.5
                    text-center inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 20 20" version="1.1"><g id="surface1" fill="#fff"><path d="M 6.269531 5.136719 L 13.996094 9.59375 C 14.308594 9.773438 14.308594 10.226562 13.996094 10.40625 L 6.269531 14.863281 C 5.960938 15.042969 5.570312 14.820312 5.570312 14.460938 L 5.570312 5.539062 C 5.570312 5.179688 5.960938 4.957031 6.269531 5.136719 Z M 6.269531 5.136719 "/><path d="M 13.996094 9.59375 L 6.269531 5.136719 C 6.222656 5.109375 6.175781 5.09375 6.128906 5.082031 L 13.597656 9.394531 C 13.90625 9.574219 13.90625 10.023438 13.597656 10.203125 L 5.871094 14.664062 C 5.800781 14.703125 5.726562 14.722656 5.65625 14.726562 C 5.785156 14.914062 6.046875 14.992188 6.269531 14.863281 L 13.996094 10.40625 C 14.308594 10.226562 14.308594 9.773438 13.996094 9.59375 Z M 13.996094 9.59375 "/><path d="M 31.347656 25.683594 L 69.980469 47.96875 C 71.542969 48.867188 71.542969 51.132812 69.980469 52.03125 L 31.347656 74.316406 C 29.804688 75.214844 27.851562 74.101562 27.851562 72.304688 L 27.851562 27.695312 C 27.851562 25.898438 29.804688 24.785156 31.347656 25.683594 Z M 31.347656 25.683594 " transform="matrix(0.2,0,0,0.2,0,0)"/></g></svg>
                </button>
            </div>
        </div>
    </div>
@endforeach

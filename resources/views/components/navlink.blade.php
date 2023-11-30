@props([
'active'=>"before:bg-orange-600 text-orange-600"
])

<a href="{{ (Route::has($url)) ? route($url) : '#' }}" class="relative p-2 font-medium text-lg transition duration-300 text-gray-700 hover:text-orange-600 before:-translate-x-1/2
         before:absolute before:bottom-0 before:left-1/2 before:w-1.5 before:h-1.5 before:rounded-full before:transform before:duration-300
        {{ (Route::is($url)) ? $active : ''}}">{{$text}}</a>
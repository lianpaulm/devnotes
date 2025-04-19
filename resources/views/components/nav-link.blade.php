@props(['active' => false])

<a class="{{ $active ? 'text-gray-900 ' : 'text-gray-500 hover:text-gray-900'}} px-3 py-2 text-sm font-medium" 
    aria-current="{{$active ? 'page' : false}}"
    {{$attributes}} 
>{{$slot}}</a>


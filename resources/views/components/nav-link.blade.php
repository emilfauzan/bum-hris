{{-- Excluding active props in web --}}
@props(['active' => false])

<a {{ $attributes }}
class="{{ $active ? 'bg-teal-800 text-white' : 'text-gray-900 hover:bg-teal-600 hover:text-white' }} sm:block flex ease-in-out duration-200 rounded-md px-3 py-2 text-sm font-bold"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>

@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-white dark:text-black focus:border-lime-900 dark:focus:border-lime-900 focus:ring-lime-400 dark:focus:ring-lime-400 rounded-md shadow-sm']) !!}>

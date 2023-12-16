<h2 class="mt-8 mb-4 text-xl font-semibold text-gray-900 dark:text-white">{{$promptText}}</h2>

<div id="response">
    <x-markdown class="dark:text-white">
        {!! $response['response'] !!}
    </x-markdown>
</div>

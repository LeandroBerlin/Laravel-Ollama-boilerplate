<h2 class="capitalize mb-8 text-xl font-semibold text-gray-900 dark:text-white">{{$promptText}}</h2>

<div id="response">
    <x-markdown class="dark:text-white">
        {!! $response['response'] !!}
    </x-markdown>
</div>

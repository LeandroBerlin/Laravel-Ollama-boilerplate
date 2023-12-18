<div id="response" class="flex w-full flex-col items-start block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <h2 class="first-letter:capitalize text-xl font-semibold text-gray-900 dark:text-white">{{$promptText}}</h2>
    <div
        class="m-4 flex self-end flex-row justify-start gap-x-2 text-slate-500"
    >
{{--        <button class="hover:text-blue-600">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewbox="0 0 24 24"
                stroke-width="2"
                stroke="currentcolor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path stroke="none" d="m0 0h24v24h0z" fill="none"></path>
                <path
                    d="m7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3"
                ></path>
            </svg>
        </button>
        <button class="hover:text-blue-600" type="button">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewbox="0 0 24 24"
                stroke-width="2"
                stroke="currentcolor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path stroke="none" d="m0 0h24v24h0z" fill="none"></path>
                <path
                    d="m7 13v-8a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v7a1 1 0 0 0 1 1h3a4 4 0 0 1 4 4v1a2 2 0 0 0 4 0v-5h3a2 2 0 0 0 2 -2l-1 -5a2 3 0 0 0 -2 -2h-7a3 3 0 0 0 -3 3"
                ></path>
            </svg>
        </button>--}}
        <button class="hover:text-blue-600" type="button" onclick={copyToClipboard()}>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path
                    d="M8 8m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"
                ></path>
                <path
                    d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2"
                ></path>
            </svg>
        </button>
    </div>
        <x-markdown id="response--body" class="dark:text-white">
            {!! $response['response']  !!}
        </x-markdown>
    <div
        class="m-4 flex self-end flex-row justify-start gap-x-2 text-slate-500 lg:mt-0"
    >
        {{--        <button class="hover:text-blue-600">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewbox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentcolor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path stroke="none" d="m0 0h24v24h0z" fill="none"></path>
                        <path
                            d="m7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3"
                        ></path>
                    </svg>
                </button>
                <button class="hover:text-blue-600" type="button">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewbox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentcolor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path stroke="none" d="m0 0h24v24h0z" fill="none"></path>
                        <path
                            d="m7 13v-8a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v7a1 1 0 0 0 1 1h3a4 4 0 0 1 4 4v1a2 2 0 0 0 4 0v-5h3a2 2 0 0 0 2 -2l-1 -5a2 3 0 0 0 -2 -2h-7a3 3 0 0 0 -3 3"
                        ></path>
                    </svg>
                </button>--}}
        <button class="hover:text-blue-600" type="button" onclick={copyToClipboard()}>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path
                    d="M8 8m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"
                ></path>
                <path
                    d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2"
                ></path>
            </svg>
        </button>
    </div>
</div>

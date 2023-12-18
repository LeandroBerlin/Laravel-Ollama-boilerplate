<h2 class="mt-2 text-xl font-bold text-gray-900 dark:text-white">Start using the chatbot</h2>
<form id="ollamaPrompt" class="mx-auto mb-10 flex flex-col" action="#" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
    <label for="promptText" class="block mb-8 text-sm font-medium text-gray-900 dark:text-white">You need to write your <a href="https://replicate.com/blog/how-to-prompt-llama" target="_blank">prompt</a> to proceed</label>
    <textarea name="promptText" id="promptText" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="How do I create a route in Laravel 10? ">{{$promptText ?? ''}}</textarea>
    <button id="submit" disabled type="submit" class="self-end w-36 disabled:opacity-50 mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Generate</button>
</form>

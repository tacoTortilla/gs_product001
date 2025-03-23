<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('キーワード設定') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <form method="POST" action="{{ route('key_inputs.store') }}">
            @csrf
            <div class="mb-4">
              <label for="key_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">キーワード</label>
              <input type="text" name="keyword" id="keyword" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              @error('keyword')
              <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Input</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
        <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">登録キーワード一覧</label>
          @foreach ($key_inputs as $key_input)
          <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
            <p class="text-gray-800 dark:text-gray-300">{{ $key_input->keyword }}</p>
            <a href="{{ route('key_inputs.show', $key_input) }}" class="text-blue-500 hover:text-blue-700">編集</a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
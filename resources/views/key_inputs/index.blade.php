<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('キーワード入力一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          @foreach ($key_inputs as $key_input)
          <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
            <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">キーワード</label>
            <p class="text-gray-800 dark:text-gray-300">{{ $key_input->keyword }}</p>
            <p class="text-gray-600 dark:text-gray-400 text-sm">投稿者: {{ $key_input->user_id }}</p>
            <a href="{{ route('key_inputs.show', $key_inputs) }}" class="text-blue-500 hover:text-blue-700">詳細を見る</a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

</x-app-layout>


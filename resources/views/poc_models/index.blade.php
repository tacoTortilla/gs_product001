<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('PoC一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          @foreach ($poc_models as $poc_model)
          <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
            <p class="text-gray-800 dark:text-gray-300">システム名：{{ $poc_model->name }}</p>
            <p class="text-gray-600 dark:text-gray-400 text-sm">キーワード: {{ $poc_model->key_input->keyword }}</p>
            <p class="text-gray-800 dark:text-gray-300">概要：{{ $poc_model->description }}</p>
            <p class="text-gray-800 dark:text-gray-300">カテゴリ：{{ $poc_model->category }}</p>
            <p class="text-gray-800 dark:text-gray-300">価格[円]：{{ $poc_model->cost_estimate }}</p>
            <p class="text-gray-800 dark:text-gray-300">メーカ名：{{ $poc_model->provider }}</p>
            <p class="text-gray-800 dark:text-gray-300">システム概要：
            <img src="{{ asset($poc_model->image_path) }}"></p>
            <p></p>
            <p class="text-gray-800 dark:text-gray-300">成功事例：
            <img src="{{ asset($poc_model->success_cases) }}"></p>
            <a href="{{ route('poc_models.show', $poc_model) }}" class="text-blue-500 hover:text-blue-700">編集</a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

</x-app-layout>



<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('PoC詳細') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <a href="{{ route('poc_models.index') }}" class="text-blue-500 hover:text-blue-700 mr-2">一覧に戻る</a>
          <p class="text-gray-800 dark:text-gray-300 text-lg">{{ $poc_model->name }}</p>
          <div class="text-gray-600 dark:text-gray-400 text-sm">
            <p class="text-gray-800 dark:text-gray-300">システム名：{{ $poc_model->name }}</p>
            <p class="text-gray-600 dark:text-gray-400 text-sm">キーワード: {{ $poc_model->key_input->keyword }}</p>
            <p class="text-gray-800 dark:text-gray-300">概要：{{ $poc_model->description }}</p>
            <p class="text-gray-800 dark:text-gray-300">カテゴリ：{{ $poc_model->category }}</p>
            <p class="text-gray-800 dark:text-gray-300">価格[円]：{{ $poc_model->cost_estimate }}</p>
            <p class="text-gray-800 dark:text-gray-300">メーカ名：{{ $poc_model->provider }}</p>
            <p class="text-gray-800 dark:text-gray-300">システム概要画像URL：{{ asset($poc_model->image_path) }}</p>
            <p class="text-gray-800 dark:text-gray-300">成功事例画像URL：{{ asset($poc_model->success_cases) }}</p>
            <p>作成日時: {{ $poc_model->created_at->format('Y-m-d H:i') }}</p>
            <p>更新日時: {{ $poc_model->updated_at->format('Y-m-d H:i') }}</p>
          </div>
          @if (in_array(Auth::user()->id, [1, 2, 3]))
          <div class="flex mt-4">
            <a href="{{ route('poc_models.edit', $poc_model) }}" class="text-blue-500 hover:text-blue-700 mr-2">編集</a>
            <form action="{{ route('poc_models.destroy', $poc_model) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-red-500 hover:text-red-700">削除</button>
            </form>
          </div>
          @endif          

        </div>
      </div>
    </div>
  </div>
</x-app-layout>


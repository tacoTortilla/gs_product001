
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('キーワード詳細') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <a href="{{ route('key_inputs.create') }}" class="text-blue-500 hover:text-blue-700 mr-2">入力・一覧に戻る</a>
          <p class="text-gray-800 dark:text-gray-300 text-lg">{{ $key_input->keyword }}</p>
          <p class="text-gray-600 dark:text-gray-400 text-sm">作成者: {{ $key_input->user->name }}</p>
          <div class="text-gray-600 dark:text-gray-400 text-sm">
            <p>作成日時: {{ $key_input->created_at->format('Y-m-d H:i') }}</p>
            <p>更新日時: {{ $key_input->updated_at->format('Y-m-d H:i') }}</p>
          </div>
          @if (in_array(Auth::user()->id, [1, 2, 3]))
          <div class="flex mt-4">
            <a href="{{ route('key_inputs.edit', $key_input) }}" class="text-blue-500 hover:text-blue-700 mr-2">編集</a>
            <form action="{{ route('key_inputs.destroy', $key_input) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
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


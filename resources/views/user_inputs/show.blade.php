
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('お問合せ詳細') }}
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <p class="text-gray-800 dark:text-gray-300 text-lg">{{ $user_input->keyword }}</p>
          <p class="text-gray-600 dark:text-gray-400 text-sm">作成者: {{ $user_input->user->name }}</p>
          <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
            <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">お困りごと</label>
            <p class="text-gray-800 dark:text-gray-300">{{ $user_input->input_content_problem }}</p>
            <hr>
            <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">お困りごとで発生している費用</label>
            <p class="text-gray-800 dark:text-gray-300">{{ $user_input->input_content_cost }}</p>
            <hr>
            <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">対策したい事</label>
            <p class="text-gray-800 dark:text-gray-300">{{ $user_input->input_content_countermeasure }}</p>
            <hr>
            <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">お問合せ</label>
            <p class="text-gray-800 dark:text-gray-300">{{ $user_input->input_content_expect }}</p>
            <hr>
            <p class="text-gray-600 dark:text-gray-400 text-sm">投稿者: {{ $user_input->user->name }}</p>
          </div>
          @if (in_array(Auth::user()->id, [1, 2, 3]))
          <div class="flex mt-4">
            <form action="{{ route('user_inputs.destroy', $user_input) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
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


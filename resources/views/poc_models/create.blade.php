<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('PoCシステム入力') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <form method="POST" action="{{ route('poc_models.store') }}">
            @csrf
            <div class="mb-4">
              <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">PoCシステム入力画面</label>
              <br><br>
              <label for="key_input_id" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">キーワード（適切なキーワードが無い場合は、
              <x-nav-link :href="route('key_inputs.create')" :active="request()->routeIs('key_inputs.create')">
               {{ __('キーワード設定') }}
              </x-nav-link>  
              より設定）</label>   
              <select name="key_input_id" id="key_input_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <option value="">選択してください</option>
                @foreach($key_inputs as $key_input)
                    <option value="{{ $key_input->id }}">{{ $key_input->keyword }}</option>
                @endforeach
              </select>
              @error('key_input_id')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
              <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">PoCシステム名：</label>
              <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">システム概要</label>
              <input type="text" name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">カテゴリ</label>
              <input type="text" name="category" id="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">価格[円]</label>
              <input type="number" name="cost_estimate" id="cost_estimate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">メーカ名</label>
              <input type="text" name="provider" id="provider" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">システム概要画像URL</label>
              <input type="text" name="image_path" id="image_path" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">成功事例画像URL</label>
              <input type="text" name="success_cases" id="success_cases" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            @if ($errors->any())
                <div class="mb-4 text-red-500 text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>※ {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Input</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
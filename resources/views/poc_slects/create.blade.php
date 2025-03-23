<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('製造現場で「新しいことを早く試したい人」、気軽に改善トライができます') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <form method="POST" action="{{ route('poc_slects.store') }}">
            @csrf
            <div class="mb-4">
              <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">すぐ試せる現場改善検索</label>
              <br><br>
              <label for="key_input_id" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">キーワード</label>   
              <select name="key_input_id" id="key_input_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <option value="">選択してください</option>
                @foreach($key_inputs as $key_input)
                    <option value="{{ $key_input->id }}">{{ $key_input->keyword }}</option>
                @endforeach
              </select>
              
              @error('name')
              <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">選択</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
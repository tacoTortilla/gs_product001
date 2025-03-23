<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('お問合せ入力') }}
    </h2>
  </x-slot>


  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <form method="POST" action="{{ route('user_inputs.store') }}">
            @csrf
            <div class="mb-4">
              <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">お困りごと</label>
              <input type="text" name="input_content_problem" id="input_content_problem" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">お困りごとで発生している費用</label>
              <input type="text" name="input_content_cost" id="input_content_cost" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">対策したい事</label>
              <input type="text" name="input_content_countermeasure" id="input_content_countermeasure" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              <label for="user_input" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">お問合せ</label>
              <input type="text" name="input_content_expect" id="input_content_expect" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              @error('input_content_problem')
              <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">送信</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
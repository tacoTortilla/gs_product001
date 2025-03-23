<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('現場LOGIN') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in to GEMBA!") }}                  
                </div>
                <x-nav-link :href="route('poc_slects.create')" :active="request()->routeIs('poc_slects.create')">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __('->すぐ試せる現場改善検索はこちら') }}
                </div>
                </x-nav-link>
            </div>
        </div>
    </div>
</x-app-layout>

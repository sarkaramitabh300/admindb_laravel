<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}</br>
                    <p>Name: {{ Auth::user()->name }}</p>
                    <p>Username: {{ Auth::user()->username }}</p>
                    <p>Email: {{ Auth::user()->email }}</p>
                    <p>Email: {{ Auth::user()->id }}</p>
                    <p>Password: {{ Auth::user()->password }}</p>
                    <p>Created date: {{ Auth::user()->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

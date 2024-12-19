<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Создать машину') }}
        </h2>
        <div class="flex gap-5">
                    <x-nav-link :href="route('car.index')" class="">
                        {{__('Список машин')}}
                    </x-nav-link>
                    <x-nav-link :href="route('car.create')" class="">
                    {{__('Создать машину')}}
                    </x-nav-link>
                    <x-nav-link :href="route('request.create')" class="">
                        {{__('Создать заявление')}}
                    </x-nav-link>
                </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('car.store') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="number" name="number" placeholder="Номер" required>
                        <input type="text" name="mark" placeholder="Марка" required>
                        <input type="text" name="model" placeholder="Модель" required>
                        <button type="submit">Создать машину</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
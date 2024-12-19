<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ваши машины') }}
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
                <div class="p-6 text-gray-900 flex flex-col">
                    @foreach ($cars as $item)
                        {{$item->number}}
                        {{$item->model}}
                        {{$item->mark}}
                        {{$item->user_id}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
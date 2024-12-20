<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between items-center">
            <h2 class="text-3xl font-bold py-5">{{ __('Список заявлений')}}</h2>
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
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($requests as $item)
                        <p>{{$item -> problem}}</p>
                        <p>{{$item -> car -> number}}</p>
                        @if($item->repair_date==null)
                            рассматривается
                        @else
                            {{$item->repair_date}}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
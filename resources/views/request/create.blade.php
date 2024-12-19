<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold py-5">{{ __('Создание нового заявления')}}</h2>
    </x-slot>

    <form method="POST" action="{{ route('request.store') }}">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <textarea name="problem" cols="30" rows="10"></textarea>
        <select name="car_id">
            @foreach ($cars as $item)
                <option value={{$item->id}}>{{$item->number}}</option>
            @endforeach
        </select>
        <button type="submit">Отправить</button>
    </form>
    </div>
</x-app-layout>
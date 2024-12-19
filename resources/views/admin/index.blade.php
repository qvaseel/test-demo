
<x-app-layout>
    <x-slot name="header">
        <h2 class="admin_header font-semibold text-xl text-gray-800 leading-tight flex items-center gap-2">
            {{__('Административная панель')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-2 lg:px-8">
            <table class="rounded-lg w-full overflow-hidden ">
                <thead class="hidden sm:table-header-group">
                    <tr class="bg-blue-800">
                        <th class="text-white font-semibold p-3 text-left">Дата</th>
                        <th class="text-white font-semibold p-3 text-left">ФИО подавшего</th>
                        <th class="text-white font-semibold p-3 text-left">Номер автомобиля</th>
                        <th class="text-white font-semibold p-3 text-left">Описание заявленя</th>
                        <th class="text-white font-semibold p-3 text-left">Статус</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($requests as $request)
                    <tr class="odd:bg-white even:bg-slate-100 sm:table-row flex flex-col p-1 sm:p-3">
                        <td class="p-1 sm:p-3">
                            {{\Carbon\Carbon::parse($request->repair_date)->toDateString()}}
                        </td>
                        <td class="p-1 sm:p-3">{{ $request->user->fullName() }}</td>
                        <td class="p-1 sm:p-3">{{ $request->car->number }}</td>
                        <td class="p-1 sm:p-3">{{ $request->problem }}</td>
                    </tr>    
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        
    </script>
</x-app-layout>
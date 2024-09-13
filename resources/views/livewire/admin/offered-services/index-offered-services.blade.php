<div>
    <div class="mb-4">
        <caption
            class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            <div class="flex justify-between">
                <h3 class="text-3xl font-bold dark:text-white">
                    Serviços
                </h3>
                <a href="{{ route('admin.offered-services.create') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Novo</a>
            </div>
            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Lista de serviços oferecidos pela
                empresa. Esses serviços iram ser listados no calendarios de agendamentos.</p>
        </caption>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="p-4 bg-white dark:bg-gray-800">
            @if (!$data)
                <x-text.list-empty />
            @else
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search"
                        class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Pesquisar itens" wire:model.live="search">
                </div>
        </div>
        <table wire:loading.class.delay="opacity-75"
            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Duração
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ativado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Preço
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr wire:key="{{ $item->id }}"
                        class="odd:bg-white odd:dark:bg-gray-800 even:bg-gray-200 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row"
                            class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <span class="mx-2 w-5 h-5 border-2 border-white dark:border-gray-800 rounded-full" style="background-color: {{ $item->color }};"></span>
                            {{ $item->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->time }}
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center rounded-md {{ $item->isActived ? 'bg-green-100 text-green-700 ring-green-600/20' : 'bg-red-100 text-red-700 ring-red-600/10'}} px-2 py-1 text-xs font-medium ring-1 ring-inset">{{ $item->isActived ? 'Ativado' : 'Desativado'}}</span>
                        </td>
                        <td class="px-6 py-4">
                            R$ {{ $item->price }}
                        </td>
                        <td class="py-4">
                            <a href="{{ route('admin.offered-services.edit', $item->id) }}"
                                class="font-medium text-dark-600 dark:text-white-500 hover:underline px-6">Editar</a>
                            <button type="button" wire:click="delete({{ $item }})"
                                class="font-medium text-dark-600 dark:text-white-500 hover:underline"
                                wire:confirm="Tem certeza?">
                                Apagar
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr class="odd:bg-white odd:dark:bg-gray-800 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td colspan="4">
                            <div class="flex justify-center items-center">
                                <span class="py-8">Nenhum serviço encontrado</span>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        @endif
    </div>
</div>

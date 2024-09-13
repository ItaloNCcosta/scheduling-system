<div>
    <h4 class="text-2xl mb-4 font-bold dark:text-white">Editar serviço</h4>
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <form wire:submit="update">
            <div class="grid gap-6 pb-4">
                <div>
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                    <input type="text" wire:model="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Agendamento de horarios" required />
                    <div class="text-red-600 dark:text-white">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="grid gap-6">
                <label for="description"
                    class="block text-sm font-medium text-gray-900 dark:text-white">Descriçao</label>
                <textarea id="description" rows="4" wire:model="description"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Ex: Oferecemos um serviço de agendamento de horarios."></textarea>
                <div class="text-red-600 dark:text-white">
                    @error('description')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="grid gap-6 mb-4 md:grid-cols-2">
                <div>
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Tempo de duração</label>
                    <x-input.time />
                </div>
                <div>
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preço</label>
                    <x-input.price />
                </div>
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
            <a href="{{ route('admin.offered-services.index') }}"
                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Voltar</a>
        </form>
    </div>
</div>

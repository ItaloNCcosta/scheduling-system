<div>
    <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-6">
        <div class="col-span-full xl:col-auto">
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg p-4 mb-6">
                {{-- IMG --}}
                <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                    <img class="mb-4 w-28 h-28 rounded-lg sm:mb-0 xl:mb-4 2xl:mb-0"
                        src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/jese-leos-2x.png"
                        alt="Jese picture">
                    <div>
                        <h3 class="mb-1 text-2xl font-bold text-gray-900 dark:text-white">
                            {{ Auth::user()->name }}
                        </h3>
                        <div class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                            cargo
                        </div>
                        <a href="#"
                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-500 to-voilet-500 rounded-lg hover:scale-[1.02] transition-transform">
                            <svg class="mr-2 -ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
                                </path>
                                <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                            </svg>
                            Alterar imagem
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg p-4 mb-6">
                <h3 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Alertas &amp; Notificações</h3>
                <div class="divide-y divide-gray-200">

                    <div class="flex justify-between items-center py-4">
                        <div class="flex flex-col flex-grow">
                            <div class="text-lg font-semibold text-gray-900">
                                Receber lembrete
                            </div>
                            <div class="text-base font-normal text-gray-500">
                                Lembrete de notificação de horario marcado
                            </div>
                        </div>
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div
                                class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                        </label>
                    </div>
                    
                    <div class="flex justify-between items-center py-4">
                        <div class="flex flex-col flex-grow">
                            <div class="text-lg font-semibold text-gray-900">
                                SMS
                            </div>
                            <div class="text-base font-normal text-gray-500">
                                Lembrete de notificação de horario marcado por SMS
                            </div>
                        </div>
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div
                                class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                        </label>
                    </div>
                    
                    <div class="flex justify-between items-center py-4">
                        <div class="flex flex-col flex-grow">
                            <div class="text-lg font-semibold text-gray-900">
                                E-mail
                            </div>
                            <div class="text-base font-normal text-gray-500">
                                Receber notificação por e-mail
                            </div>
                        </div>
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div
                                class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                        </label>
                    </div>
                    
                    <div class="flex justify-between items-center py-4">
                        <div class="flex flex-col flex-grow">
                            <div class="text-lg font-semibold text-gray-900">
                                Whatsapp
                            </div>
                            <div class="text-base font-normal text-gray-500">
                                Receber notificação por Whatsapp
                            </div>
                        </div>
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div
                                class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="mt-2">
                    <x-primary-button>{{ __('Salvar') }}</x-primary-button>
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <div class="mx-auto sm:px-4 space-y-6">
                {{-- GENERAL INFORMATION --}}
                {{-- <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-4 mb-6">
                <h3 class="mb-4 text-xl font-bold">General information</h3>
                <form action="#">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">First
                                Name</label>
                            <input type="text" name="first-name" id="first-name"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="Bonnie" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Last
                                Name</label>
                            <input type="text" name="last-name" id="last-name"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="Green" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block mb-2 text-sm font-medium text-gray-900">Country</label>
                            <input type="text" name="country" id="country"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="United States" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="city" class="block mb-2 text-sm font-medium text-gray-900">City</label>
                            <input type="text" name="city" id="city"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="e.g. San Francisco" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="adress" class="block mb-2 text-sm font-medium text-gray-900">Adress</label>
                            <input type="text" name="adress" id="adress"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="e.g. California" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" name="email" id="email"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="example@company.com" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900">Phone
                                Number</label>
                            <input type="number" name="phone-number" id="phone-number"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="e.g. +(12)3456 789" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="birthday"
                                class="block mb-2 text-sm font-medium text-gray-900">Birthday</label>
                            <input type="number" name="birthday" id="birthday"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="15/08/1990" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="organization"
                                class="block mb-2 text-sm font-medium text-gray-900">Organization</label>
                            <input type="text" name="organization" id="organization"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="Company Name" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="role" class="block mb-2 text-sm font-medium text-gray-900">Role</label>
                            <input type="text" name="role" id="role"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="React Developer" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="department"
                                class="block mb-2 text-sm font-medium text-gray-900">Department</label>
                            <input type="text" name="department" id="department"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="Development" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="zip-code" class="block mb-2 text-sm font-medium text-gray-900">Zip/postal
                                code</label>
                            <input type="number" name="zip-code" id="zip-code"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="123456" required="">
                        </div>
                        <div class="col-span-6 sm:col-full">
                            <button
                                class="text-white bg-gradient-to-br from-pink-500 to-voilet-500 rounded-lg shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform font-medium text-sm px-5 py-2.5 text-center"
                                type="submit">
                                Save all
                            </button>
                        </div>
                    </div>
                </form>
            </div> --}}
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <livewire:profile.update-profile-information-form />
                    </div>
                </div>
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <livewire:profile.update-password-form />
                    </div>
                </div>
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <livewire:profile.delete-user-form />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

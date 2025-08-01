<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Contacts list
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="flex justify-end">
                <form class="grow" autocomplete="off">
                    <x-text-input name="search" type="search" class="mt-1 block w-1/3" placeholder="Buscar contacto" :value="request('search')" />
                </form>
                <a href="{{ route('contacts.create') }}"
                    class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded flex-none">
                    Contact create
                </a>
            </div>

            <table class="table-auto w-full text-white border-separate border-spacing-0">
                <thead>
                    <tr class="bg-transparent">
                        <th class="px-4 py-2 border border-purple-500">Nombre</th>
                        <th class="px-4 py-2 border border-purple-500">Email</th>
                        <th class="px-4 py-2 border border-purple-500">Celular</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="bg-transparent">
                            <td class="border border-purple-500 px-4 py-2">{{ $contact->name }}</td>
                            <td class="border border-purple-500 px-4 py-2">{{ $contact->email }}</td>
                            <td class="border border-purple-500 px-4 py-2">{{ $contact->phone }}</td>
                            <td class="px-4 py-2 flex gap-2">
                                <a href="{{ route('contacts.edit', $contact) }}"
                                    class="bg-indigo-600 hover:bg-indigo-800 text-white font-semibold py-1 px-3 rounded transition-all duration-200">
                                    Editar
                                </a>
                                <form action="{{ route('contacts.destroy', $contact) }}" method="POST"
                                    onsubmit="return confirm('¿Estas seguro de eliminar este contacto?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-700 hover:bg-red-900 text-white font-semibold py-1 px-3 rounded transition-all duration-200">
                                        Eliminar
                                    </button>
                                </form>
                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{ $contacts->links() }}
            </div>

        </div>
    </div>
</x-app-layout>

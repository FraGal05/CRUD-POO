<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('clientes.index') }}">
                        <button>
                            Ir a Clientes
                        </button>
                    </a>
                    <p>
                        <a href="{{ route('estados.index') }}">
                        <button>
                            Ir a Estados
                        </button>
                        </a>
                    </p>
                    <p>
                    <a href="{{ route('ordenes.index') }}">
                        <button>
                            Ir a Ordenes
                        </button>
                    </a>
                    </p>
                    <a href="{{ route('tareas.index') }}">
                        <button>
                            Ir a Tareas
                        </button>
                    </a>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

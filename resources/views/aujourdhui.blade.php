<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mr-2">
                {{ __("Aujourd'hui") }}
            </h2>
            <span class="text-sm items-center text-gray-400">{{ date('D') . ' ' . date('d/m/Y') }}</span>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200">
                    @foreach ($tasks as $task)
                        <x-task :title="$task->title" :description="$task->description" :dueDate="$task->dueDate" :done="$task->done" />
                    @endforeach
                </div>
                <hr>
                <div class="p-3 flex justify-end">
                    <button class="flex flex-row p-1 rounded-md" id="btn-add-task">
                        <span class="material-symbols-outlined text-red-500">add</span>
                        <span class="items-center text-gray-500 hover:text-red-500">Ajouter une tâche</span>
                    </button>
                </div>
                <form id="form-add-task" method="POST"class="hidden p-6 w-2/3 ml-auto mr-auto">
                    <div class="flex flex-col">
                        <input type="text">
                        <textarea name="decription" cols="30" rows="10"></textarea>
                    </div>
                    <button class="flex flex-row p-1 rounded-md bg-red-500 text-white hover:bg-red-400">
                        <span class="material-symbols-outlined">add</span>
                        <span class="items-center">Ajouter une tâche</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

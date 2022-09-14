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
                        <x-task :id="$task->id" :title="$task->title" :description="$task->description" :dueDate="$task->due_date"
                            :done="$task->done" />
                    @endforeach
                </div>
                <hr>
                <div class="p-3 flex justify-end">
                    <button class="flex flex-row p-1 rounded-md" id="btn-add-task">
                        <span class="material-symbols-outlined text-red-500">add</span>
                        <span class="items-center text-gray-500 hover:text-red-500">Ajouter une tâche</span>
                    </button>
                </div>
                <form id="form-add-task"
                    method="POST"class="hidden p-6 w-2/3 ml-auto mr-auto border border-gray rounded-md" action="/task">
                    @csrf
                    <div class="flex flex-col">
                        <input type="text" name="title" placeholder="ex : Acheter un cadeau"
                            class="rounded border-none focus:bg-gray-100 mb-1">
                        <textarea name="description" cols="30" rows="2" placeholder="Description"
                            class="rounded border-none focus:bg-gray-100"></textarea>
                        <input type="date" name="due_date">
                    </div>
                    <div class="p-3 flex justify-end">
                        <button class="flex flex-row p-1 rounded-md bg-red-500 text-white pr-4 hover:bg-red-400">
                            <span class="material-symbols-outlined">add</span>
                            <span class="items-center">Ajouter une tâche</span>
                        </button>
                    </div>

                </form>
                @if ($errors->any())
                    <div class="text-red-500 font-bold flex justify-center">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="dialog-edit-task"></div>
        </div>
    </div>
</x-app-layout>

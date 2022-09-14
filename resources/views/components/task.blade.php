<div class="flex justify-between p-1 m-1 cursor-pointer rounded-md hover:bg-gray-100">
    <div class="">
        <div class="flex flex-row items-center">
            <form method="POST" action="{{ route('task.done', ['task' => $id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <button type="submit" class="flex flex-row items-center">
                    <?php $done ? ($html = '<span class="material-symbols-outlined">check_circle</span>') : ($html = '<span class="material-symbols-outlined">radio_button_unchecked</span>'); ?>
                    {!! $html !!}
                </button>
            </form>
            <div class="px-1 rounded {{ $done ? 'bg-lime-300' : '' }}">
                {{ $title }}
            </div>
        </div>
        <div class="text-xs text-gray-400 pl-8">
            {{ $description }}
        </div>
    </div>
    <div class="flex justify-end">
        <button class="test rounded-md h-2/3 hover:bg-gray-200"><span
                class="material-symbols-outlined text-green-500">edit_square</span></button>
        <form action="{{ route('task.destroy', ['task' => $id]) }}" method="POST" enctype="multipart/form-data">
            @method('DELETE')
            @csrf
            <button class="rounded-md h-2/3 hover:bg-gray-200">
                <span class="material-symbols-outlined text-red-500">delete</span>
            </button>
        </form>
        <button class="rounded-md h-2/3 hover:bg-gray-200"><span
                class="material-symbols-outlined">mode_comment</span></button>
        <button class="rounded-md h-2/3 hover:bg-gray-200" id="btn-menu-task">
            <span class="material-symbols-outlined">more_vert</span></button>
    </div>

    {{-- {{ asset('js/components.js') }} --}}


</div>

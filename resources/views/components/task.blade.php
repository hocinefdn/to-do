<div class="flex justify-between p-1 m-1 cursor-pointer rounded-md hover:bg-gray-100">
    <div class="">
        <div class="flex flex-row items-center">
            <input type="checkbox" name="done" class="rounded-3xl m-2 cursor-pointer" @checked($done)>
            <div class="px-1 rounded {{ $done ? 'bg-lime-300' : '' }}">
                {{ $title }}
            </div>
        </div>
        <div class="text-xs text-gray-400 pl-8">
            {{ $description }}
        </div>
    </div>
    <div class="flex justify-end">
        <button class="rounded-md h-2/3 hover:bg-gray-200"><span
                class="material-symbols-outlined">edit_square</span></button>
        <button class="rounded-md h-2/3 hover:bg-gray-200"><span
                class="material-symbols-outlined">event_busy</span></button>
        <button class="rounded-md h-2/3 hover:bg-gray-200"><span
                class="material-symbols-outlined">mode_comment</span></button>
        <button class="rounded-md h-2/3 hover:bg-gray-200"><span
                class="material-symbols-outlined">more_vert</span></button>
    </div>
</div>

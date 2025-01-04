<div>
    <h1>Tasks</h1>

    <input type="text" wire:model="task">
    <button wire:click="add" class="font-bold py-2 px-4 rounded border bg-blue-500 text-white">
        Add Task
    </button>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
</div>

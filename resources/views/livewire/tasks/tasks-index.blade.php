<div class="w-lg max-w-lg mx-auto pt-10">
    <form wire:submit="save">
        <div class="mb-3">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Title
            </label>
            <input
                wire:model="form.title"
                id="title"
                type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            />
            <div>
                @error('form.title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Slug
            </label>
            <input
                wire:model="form.slug"
                id="slug"
                type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            />
            <div>
                @error('form.slug')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Description
            </label>
            <textarea
                wire:model="form.description"
                id="description"
                type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            ></textarea>

            <div>
                @error('form.description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="flex justify-between">
            <div class="mb-3">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Status
                </label>
                <select
                    wire:model="form.status"
                    id="status"
                    class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                    <option value="">Select</option>
                    @foreach (\App\Enums\StatusType::cases() as $status)
                        <option value="{{ $status->value }}">{{ $status->name }}</option>
                    @endforeach
                </select>

                <div>
                    @error('form.status')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="priority" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Priority
                </label>
                <select
                    wire:model="form.priority"
                    id="priority"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                    <option value="">Select</option>
                    @foreach (\App\Enums\PriorityType::cases() as $priority)
                        <option value="{{ $priority->value }}">{{ $priority->name }}</option>
                    @endforeach
                </select>

                <div>
                    @error('form.priority')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="deadline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Deadline
            </label>
            <input
                wire:model="form.deadline"
                id="deadline"
                type="date"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            />

            <div>
                @error('form.deadline')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mb-3 flex justify-between">
            <button
                type="submit"
                class="flex py-2 px-4 bg-indigo-500 hover:bg-indigo-600 text-white rounded-md">
                Submit
            </button>
            <button
                type="button"
                class="flex py-2 px-4 bg-slate-400 hover:bg-slate-500 text-white rounded-md">
                Refresh
            </button>
        </div>
    </form>
</div>

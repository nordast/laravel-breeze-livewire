<div class="max-w-7xl mx-auto flex">
    <div class="w-7/12">
        Images
    </div>
    <div class="4/12">
        <form class="mt-4 bg-white p-4 rounded-md"  wire:submit="saveImage">
            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Upload Image
                </label>
                <input
                    wire:model="image"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    type="file">

                @if ($image)
                    <img class="w-18 h-18 rounded-md" src="{{ $image->temporaryUrl() }}">
                @endif

                @error($image)
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-3">
                <x-primary-button>Upload</x-primary-button>
            </div>
        </form>

        <form class="mt-4 bg-white p-4 rounded-md"  wire:submit="saveImages">
            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Upload Images
                </label>
                <input
                    wire:model="images"
                    multiple
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    type="file">

                @if ($images)
                    @foreach ($images as $image)
                        <img class="w-18 h-18 rounded-md" src="{{ $image->temporaryUrl() }}">
                    @endforeach
                @endif

                @error('images.*')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                @error('images')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-3">
                <x-primary-button>Upload</x-primary-button>
            </div>
        </form>
    </div>
</div>

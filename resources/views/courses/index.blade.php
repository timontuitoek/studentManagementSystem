<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
            {{ __('Course Registration') }}
        </h2>

        <form method="POST" action="{{ route('courses.store') }}">
            @csrf
            <div class="mb-4">
                <x-input-label for="name" :value="__('Course Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="description" :value="__('Description')" />
                <x-textarea id="description" class="block mt-1 w-full" name="description" required>{{ old('description') }}</x-textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <x-primary-button class="mt-4">
                {{ __('Add Course') }}
            </x-primary-button>
        </form>

        <!-- You can add a list of existing courses here if you want -->
    </div>
</x-app-layout>

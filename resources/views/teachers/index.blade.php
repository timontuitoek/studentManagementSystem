<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
            {{ __('Teacher Registration') }}
        </h2>

        <form method="POST" action="{{ route('teachers.store') }}">
            @csrf
            <div class="mb-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="department" :value="__('Department')" />
                <x-text-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('department')" required />
                <x-input-error :messages="$errors->get('department')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="hire_date" :value="__('Hire Date')" />
                <x-text-input id="hire_date" class="block mt-1 w-full" type="date" name="hire_date" :value="old('hire_date')" required />
                <x-input-error :messages="$errors->get('hire_date')" class="mt-2" />
            </div>

            <x-primary-button class="mt-4">
                {{ __('Register Teacher') }}
            </x-primary-button>
        </form>

        <!-- You can add a list of registered teachers here if you want -->
    </div>
</x-app-layout>

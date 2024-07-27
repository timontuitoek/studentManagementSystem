<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
            {{ __('Grade Entry') }}
        </h2>

        <form method="POST" action="{{ route('grades.store') }}">
            @csrf
            <div class="mb-4">
                <x-input-label for="student_id" :value="__('Student')" />
                <select id="student_id" name="student_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required>
                    <option value="">Select a student</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}" {{ old('student_id') == $student->id ? 'selected' : '' }}>
                            {{ $student->name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="course_id" :value="__('Course')" />
                <select id="course_id" name="course_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required>
                    <option value="">Select a course</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
                            {{ $course->name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('course_id')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="grade" :value="__('Grade')" />
                <x-text-input id="grade" class="block mt-1 w-full" type="text" name="grade" :value="old('grade')" required />
                <x-input-error :messages="$errors->get('grade')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="grading_date" :value="__('Grading Date')" />
                <x-text-input id="grading_date" class="block mt-1 w-full" type="date" name="grading_date" :value="old('grading_date')" required />
                <x-input-error :messages="$errors->get('grading_date')" class="mt-2" />
            </div>

            <x-primary-button class="mt-4">
                {{ __('Submit Grade') }}
            </x-primary-button>
        </form>

        <!-- You can add a list of recent grades here if you want -->
    </div>
</x-app-layout>

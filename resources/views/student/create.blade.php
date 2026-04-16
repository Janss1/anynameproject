<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Student
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <!-- SUCCESS MESSAGE -->
                @if (session('success'))
                    <div class="mb-4 text-green-600">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    <!-- First Name -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-1">
                            First Name
                        </label>
                        <input type="text" name="first_name"
                            class="w-full border rounded px-3 py-2
focus:outline-none focus:ring focus:border-blue-300"
                            placeholder="Enter first name" required>
                    </div>
                    <!-- Last Name -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-1">
                            Last Name
                        </label>
                        <input type="text" name="last_name"
                            class="w-full border rounded px-3 py-2
focus:outline-none focus:ring focus:border-blue-300"
                            placeholder="Enter last name" required>
                    </div>
                    <!-- Course Dropdown -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-1">
                            Select Course
                        </label>
                        <select name="course_id"
                            class="w-full border rounded px-3 py-2
focus:outline-none focus:ring focus:border-blue-300"
                            required>
                            <option value="">-- Select Course --</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">
                                    {{ $course->course_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <!-- BUTTONS -->
                    <div class="flex justify-between">
                        <a href="{{ route('dashboard') }}"
                            class="bg-gray-500 hover:bg-gray-600 text-white px-4
py-2 rounded">
                            Back
                        </a>
                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-
white px-4 py-2 rounded">
                            Add Student
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

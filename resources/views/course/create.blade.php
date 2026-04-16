<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Course
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
                <form action="{{ route('course.store') }}" method="POST">
                    @csrf
                    <!-- Course Name -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-1">
                            Course Name
                        </label>
                        <input type="text" name="course_name"
                            class="w-full border rounded px-3 py-2
focus:outline-none focus:ring focus:border-blue-300"
                            placeholder="Enter course name" required>
                    </div>
                    <!-- Description -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-1">
                            Description
                        </label>
                        <textarea name="description" class="w-full border rounded px-3 py-2
focus:outline-none focus:ring focus:border-blue-300"
                            placeholder="Enter description"></textarea>
                    </div>
                    <!-- BUTTON -->
                    <div class="flex justify-between">
                        <a href="{{ route('dashboard') }}"
                            class="bg-gray-500 hover:bg-gray-600 text-white px-4
py-2 rounded">
                            Back
                        </a>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white
px-4 py-2 rounded">
                            Add Course
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

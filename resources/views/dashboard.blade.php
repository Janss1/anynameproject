<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Main Menu') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4">Student Management System</h3>
                <!-- MENU BUTTONS -->
                <div class="flex gap-4">
                    <!-- Add Course -->
                    <a href="{{ route('course.create') }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                        Add Course
                    </a>
                    <!-- Add Student -->
                    <a href="{{ route('student.create') }}"
                        class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
                        Add Student
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

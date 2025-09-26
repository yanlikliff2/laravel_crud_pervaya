@extends('projects.layout')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-gray-100 mb-8">Show Project</h2>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="mb-6">
                <a href="{{ route('projects.index') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-lg transition duration-200 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-100">
                    View All Projects
                </a>
            </div>

            <div class="space-y-4">
                <div>
                    <span class="block text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Name:</span>
                    <p class="text-gray-900 dark:text-gray-100 text-lg">{{ $project->name }}</p>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Description:</span>
                    <p class="text-gray-900 dark:text-gray-100">{{ $project->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
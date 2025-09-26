@extends('projects.layout')

@section('content')
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-gray-100 mb-8">Laravel Project Manager</h2>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-6">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-300">Projects</h3>
                <a href="{{ route('projects.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-200 dark:bg-blue-600 dark:hover:bg-blue-700">
                    Create New Project
                </a>
            </div>

            @if ($message = Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 dark:bg-green-900 dark:border-green-600 dark:text-green-100">
                    {{ $message }}
                </div>
            @endif

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white dark:bg-gray-800">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                    @foreach ($projects as $project)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">{{ $project->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $project->description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <form action="{{ route('projects.destroy',$project->id) }}" method="POST" class="flex space-x-2">
                                    <a href="{{ route('projects.show',$project->id) }}" class="bg-blue-100 hover:bg-blue-200 text-blue-800 px-3 py-1 rounded text-sm transition duration-200 dark:bg-blue-900 dark:hover:bg-blue-800 dark:text-blue-100">
                                        Show
                                    </a>
                                    <a href="{{ route('projects.edit',$project->id) }}" class="bg-green-100 hover:bg-green-200 text-green-800 px-3 py-1 rounded text-sm transition duration-200 dark:bg-green-900 dark:hover:bg-green-800 dark:text-green-100">
                                        Edit
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-100 hover:bg-red-200 text-red-800 px-3 py-1 rounded text-sm transition duration-200 dark:bg-red-900 dark:hover:bg-red-800 dark:text-red-100">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
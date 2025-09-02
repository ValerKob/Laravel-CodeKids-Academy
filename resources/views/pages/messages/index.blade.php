@extends('layouts.main')

@section('title', 'Code Kids Academy -  Дополнительное Образование')

@section('content')
<!-- Page Content -->
<div class="container mx-auto px-4 py-8">
    <!-- Page Title -->
    <h1 class="text-3xl md:text-4xl font-bold text-center text-gray-800 dark:text-white mb-8">
        Клиенты
    </h1>

    <!-- Search Section -->
    <form method="GET" action="{{ route('messages.index') }}"
          class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-6 transition-colors duration-300">
        <div class="flex flex-col md:flex-row gap-4">
            <input type="text" name="search" value="{{ request('search') }}"
                   placeholder="Поиск заявок..."
                   class="flex-grow px-4 py-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-white rounded-lg border border-gray-200 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-colors duration-300" />
            <button type="submit"
                    class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg font-medium transition-colors duration-300 flex items-center justify-center">
                🔍 Найти
            </button>
        </div>
    </form>

    <!-- Applications Table -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-colors duration-300">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-100 dark:bg-gray-700 sticky top-0">
                    <tr>
                        <th class="py-4 px-6 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">ID</th>
                        <th class="py-4 px-6 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Имя</th>
                        <th class="py-4 px-6 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Email</th>
                        <th class="py-4 px-6 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Телефон</th>
                        <th class="py-4 px-6 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Курс</th>
                        <th class="py-4 px-6 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Сообщение</th>
                        <th class="py-4 px-6 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Дата</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse($messages as $message)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200">{{ $message->id }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200">{{ $message->name }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200">{{ $message->email }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200">{{ $message->phone }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200">{{ $message->course }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200">{{ $message->message }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200">{{ $message->created_at->format('d.m.Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-6 text-center text-gray-500 dark:text-gray-400">
                                Нет заявок
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $messages->withQueryString()->links() }}
    </div>
</div>

@endsection

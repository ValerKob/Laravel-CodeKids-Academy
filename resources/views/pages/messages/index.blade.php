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
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200 cursor-pointer copy-cell" data-copy="{{ $message->id }}">{{ $message->id }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200 cursor-pointer copy-cell" data-copy="{{ $message->name }}">
                                {{ $message->name }}
                                @if($message->created_at->diffInHours(now()) < 24)
                                    <span class="ml-2 inline-block bg-green-500 dark:bg-green-400 text-white text-xs font-semibold px-2 py-1 rounded-full uppercase shadow-md animate-pulse">
                                        NEW
                                    </span>
                                @endif
                            </td>
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200 cursor-pointer copy-cell" data-copy="{{ $message->email }}">{{ $message->email }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200 cursor-pointer copy-cell" data-copy="{{ $message->phone }}">{{ $message->phone }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200 cursor-pointer copy-cell" data-copy="{{ $message->course }}">{{ $message->course }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200 cursor-pointer copy-cell" data-copy="{{ $message->message }}">{{ $message->message }}</td>
                            <td class="py-4 px-6 text-sm text-gray-800 dark:text-gray-200 cursor-pointer copy-cell" data-copy="{{ $message->created_at->format('d.m.Y H:i') }}">{{ $message->created_at->format('d.m.Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-6 text-center text-gray-500 dark:text-gray-400">
                                Нет заявок
                            </td>
                        </tr>
                    @endforelse
                </tbody>

                <!-- Toast уведомление -->
                <div id="toast" class="fixed top-4 right-4 bg-blue-600 text-white px-4 py-2 rounded shadow-lg opacity-0 pointer-events-none transition-opacity duration-300 z-50">
                    Скопировано!
                </div>

                <script>
                    document.querySelectorAll('.copy-cell').forEach(cell => {
                        cell.addEventListener('click', () => {
                            const text = cell.dataset.copy;
                            navigator.clipboard.writeText(text).then(() => {

                                // Создаем новый toast
                                const newToast = document.createElement('div');
                                newToast.textContent = 'Скопировано!';
                                newToast.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-lg opacity-0 pointer-events-none transition-all duration-300 transform translate-x-6 z-50';
                                document.body.appendChild(newToast);

                                // Показать с анимацией "наезд справа"
                                setTimeout(() => {
                                    newToast.classList.remove('opacity-0', 'translate-x-6');
                                    newToast.classList.add('opacity-100', 'translate-x-0');
                                }, 10);

                                // Скрыть через 2 секунды с обратной анимацией
                                setTimeout(() => {
                                    newToast.classList.remove('opacity-100');
                                    newToast.classList.add('opacity-0', 'translate-x-6');
                                    setTimeout(() => newToast.remove(), 300);
                                }, 2000);

                                // Подсветка ячейки мягким зеленым на полсекунды
                                cell.classList.add('bg-indigo-200', 'dark:bg-indigo-700');
                                setTimeout(() => {
                                    cell.classList.remove('bg-indigo-200', 'dark:bg-indigo-700');
                                }, 500);

                            });
                        });
                    });
                    </script>

            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $messages->withQueryString()->links() }}
    </div>
</div>
@endsection

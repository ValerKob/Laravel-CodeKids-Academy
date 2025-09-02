@extends('layouts.main')

@section('title', 'Code Kids Academy -  Дополнительное Образование')

@section('content')
<!-- Page Auth -->
<div class="flex items-center justify-center min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 md:p-8">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-6">Вход</h1>

        <form method="POST" action="{{ route('login.process') }}" class="space-y-4">
            @csrf

            @if($errors->any())
                <div class="text-red-600 text-sm">{{ $errors->first('login') }}</div>
            @endif

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                <input type="email" name="email" required class="w-full px-3 py-2 border rounded-md">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Пароль</label>
                <input type="password" name="password" required class="w-full px-3 py-2 border rounded-md">
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md">Войти</button>
        </form>
    </div>
</div>

@endsection

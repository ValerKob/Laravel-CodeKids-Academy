<?php

namespace App\Http\Controllers;

use App\Models\SendUsersMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SendUsersMessageController extends Controller
{
   public function store(Request $request)
    {
        // валидация данных
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:20',
            'course'  => 'required|string|max:255',
            'message' => 'required|string|max:500',
        ]);

        // сохранение в БД
        SendUsersMessage::create($validated);

        return redirect()->back()->with('success', 'Сообщение успешно отправлено!');
    }
       // вывод списка
    public function list_output(Request $request)
    {
        $query = SendUsersMessage::query();

        // поиск по имени/email/телефону/курсу/сообщению
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%")
                  ->orWhere('phone', 'like', "%$search%")
                  ->orWhere('course', 'like', "%$search%")
                  ->orWhere('message', 'like', "%$search%");
            });
        }

        $messages = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('pages.messages.index', compact('messages'));
    }
}

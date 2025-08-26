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
}

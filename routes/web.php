<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/search', [EmployeeController::class, 'search'])->name('employee.search');
Route::get('/employee/dashboard', [EmployeeController::class, 'dashboard'])->name('employee.dashboard');
Route::get('/employee/analyze', [EmployeeController::class, 'upload'])->name('employee.analyzer');

Route::post('/resume', [ResumeController::class, 'store'])->name('resume.store');

Route::get('/wololo', function () {
    $response = Http::withHeaders([
        "Content-Type" => "application/json",
        "x-goog-api-key" => env('GEMINI_API_KEY')
    ])
        ->post(
            'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent',
            [
                // prompt
                "contents" => [
                    "parts" => ["text" => "Explain how car turbo works in a few words"]
                ]
            ]
        );

    if ($response->successful()) {
        $text = $response->json()['candidates'][0]['content']['parts'][0]['text'];
    } else {
        $text = "something is wrong";
    }
    dd($text);
})->name('index');

// curl "https://api.openai.com/v1/responses" \
//     -H "Content-Type: application/json" \
//     -H "Authorization: Bearer $OPENAI_API_KEY" \
//     -d '{
//         "model": "gpt-5-nano",
//         "input": "Write a one-sentence bedtime story about a unicorn."
//     }'

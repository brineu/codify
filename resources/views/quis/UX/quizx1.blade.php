<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD:codify/html/quis/UX/quizx1.html
    <link rel="stylesheet" href="/codify/css/quiz/quis1.css">
=======
    <link rel="stylesheet" href="{{ asset('css/quiz/quis1.css') }}">
>>>>>>> origin/laravel:resources/views/quis/UX/quizx1.blade.php
    <title>Quiz Navbar</title>
</head>
<body>
    <div class="navbar">
<<<<<<< HEAD:codify/html/quis/UX/quizx1.html
        <div class="back-arrow"><img href="/codify/html/list_course/courseux.html" src="/codify/img/back.png" alt="Back"></div>
=======
        <div class="back-arrow"><img src="{{ asset('images/back.png') }}" alt="Back"></div>
>>>>>>> origin/laravel:resources/views/quis/UX/quizx1.blade.php
        <div class="quiz-title">Quiz</div>
    </div>

    <div class="container">
        <p class="container-text">Mastering UI/UX Designer > UX</p>
    </div>

    <div class="question">
        <p class="question-text">1. Apa yang dimaksud dengan personas dalam konteks UX?</p>
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-1">
            <div class="category">
                <label for="dot-1">
                    <span class="gender">Rekam medis pengguna</span>
                </label>
            </div>
        </div>
        <!-- Tambahkan opsi jawaban lainnya di sini -->
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-2">
            <div class="category">
                <label for="dot-2">
                    <span class="gender">Representasi fiktif pengguna ideal</span>
                </label>
            </div>
        </div>
        <!-- Tambahkan opsi jawaban lainnya di sini -->
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-3">
            <div class="category">
                <label for="dot-3">
                    <span class="gender">Hasil analisis data pengguna</span>
                </label>
            </div>
        </div>
        <!-- Tambahkan opsi jawaban lainnya di sini -->
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-4">
            <div class="category">
                <label for="dot-4">
                    <span class="gender">Log interaksi pengguna</span>
                </label>
            </div>
        </div>
        <!-- Tambahkan opsi jawaban lainnya di sini -->
    </div>

    <form action="{{ route('quiz.ux', ['quizNumber' => $quizNumber + 1]) }}">
        <button type="submit" class="next-button">Next</button>
    </form>
    
</body>
</html>

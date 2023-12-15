<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD:codify/html/quis/eksepsi/quize1.html
    <link rel="stylesheet" href="/codify/css/quiz/quis1.css">
=======
    <link rel="stylesheet" href="{{ asset('css/quiz/quis1.css') }}">
>>>>>>> origin/laravel:resources/views/quis/eksepsi/quize1.blade.php
    <title>Quiz Navbar</title>
</head>
<body>
    <div class="navbar">
<<<<<<< HEAD:codify/html/quis/eksepsi/quize1.html
        <div class="back-arrow"><img href="/codify/html/list_course/pyeksep.html" src="/codify/img/back.png" alt="Back"></div>
=======
        <div class="back-arrow"><img src="{{ asset('images/back.png') }}" alt="Back"></div>
>>>>>>> origin/laravel:resources/views/quis/eksepsi/quize1.blade.php
        <div class="quiz-title">Quiz</div>
    </div>

    <div class="container">
        <p class="container-text">Python Beyond Basic > Eksepsi dan Penanganannya</p>
    </div>

    <div class="question">
        <p class="question-text">1. Bagaimana cara melempar eksepsi secara manual di Python?</p>
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-1">
            <div class="category">
                <label for="dot-1">
                    <span class="gender">`throw ExceptionType("message")`</span>
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
                    <span class="gender">`raise ExceptionType("message")`</span>
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
                    <span class="gender">`throw "message"`</span>
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
                    <span class="gender">`raise "message"`</span>
                </label>
            </div>
        </div>
        <!-- Tambahkan opsi jawaban lainnya di sini -->
    </div>

    <form action="{{ route('quiz.pyeksep', ['quizNumber' => $quizNumber + 1]) }}">
        <button type="submit" class="next-button">Next</button>
    </form>
    
</body>
</html>

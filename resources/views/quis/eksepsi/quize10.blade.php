<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD:codify/html/quis/eksepsi/quize10.html
    <link rel="stylesheet" href="/codify/css/quiz/quiz10.css">
=======
    <link rel="stylesheet" href="{{ asset('css/quiz/quiz10.css') }}">
>>>>>>> origin/laravel:resources/views/quis/eksepsi/quize10.blade.php
    <title>Quiz Navbar</title>
</head>
<body>
    <div class="navbar">
<<<<<<< HEAD:codify/html/quis/eksepsi/quize10.html
        <div class="back-arrow"><img href="/codify/html/list_course/pyeksep.html" src="/codify/img/back.png" alt="Back"></div>
=======
        <div class="back-arrow"><img src="{{ asset('images/back.png') }}" alt="Back"></div>
>>>>>>> origin/laravel:resources/views/quis/eksepsi/quize10.blade.php
        <div class="quiz-title">Quiz</div>
    </div>

    <div class="container">
        <p class="container-text">Python Beyond Basic > Eksepsi dan Penanganannya</p>
    </div>

    <div class="question">
        <p class="question-text">10. Apa fungsi dari parameter dalam definisi fungsi Python?</p>
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-1">
            <div class="category">
                <label for="dot-1">
                    <span class="gender">Memberikan nilai balik</span>
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
                    <span class="gender">Menyimpan nilai tetap</span>
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
                    <span class="gender">Menyediakan input untuk fungsi</span>
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
                    <span class="gender">Menangkap pengecualian</span>
                </label>
            </div>
        </div>
        <!-- Tambahkan opsi jawaban lainnya di sini -->
    </div>

    <form id="quizForm">
        <button type="button" class="back-button" onclick="goToPreviousPage()">Back</button>
    </form>

    <script>
        function goToPreviousPage() {
            window.history.back();
        }
    </script>
</body>
</html>

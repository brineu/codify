<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/quiz/quiz10.css') }}">
    <title>Quiz Navbar</title>
</head>
<body>
    <div class="navbar">
<<<<<<< HEAD:codify/html/quis/boot/quizb10.html
        <div class="back-arrow"><img href="/codify/html/list_course/coursebs.html" src="/codify/img/back.png" alt="Back"></div>
=======
        <a class="back-arrow" href="/course/webdev/materi/bootstrap"><img src="{{ asset('images/back.png') }}" alt="Back"></a>
>>>>>>> origin/laravel:resources/views/quis/boot/quizb10.blade.php
        <div class="quiz-title">Quiz</div>
    </div>

    <div class="container">
        <p class="container-text">Fundamental Front-End Web > Bootstrap</p>
    </div>

    <div class="question">
        <p class="question-text">10. Bootstrap menyediakan komponen UI yang siap pakai. Apa itu?</p>
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-1">
            <div class="category">
                <label for="dot-1">
                    <span class="gender">Widget</span>
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
                    <span class="gender">Gadget</span>
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
                    <span class="gender">Component</span>
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
                    <span class="gender">Module</span>
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

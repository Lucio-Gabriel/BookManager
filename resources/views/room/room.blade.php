<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css', 'resources/js/pomodoro.js')
    <title>Sala de Leitura - BookManager</title>
</head>
<body class="bg-cinza-claro">

    <div class="bg-amarelo py-4 px-20 flex justify-between items-center">
        <img class="" src="/assests/image/book.png" alt="" width="150" height="150">
        <div class="flex gap-3 items-center">
            <a class="flex justify-center items-center py-2 bg-white px-6 mt-4  rounded-full font-semibold"
                href="{{ route('home') }}"> Voltar para biblioteca </a>
            <a class="flex justify-center items-center py-2 bg-white px-6 mt-4  rounded-full font-semibold"
                href="{{route('book.create')}}"> Adicionar um novo livro </a>
        </div>
    </div>

    <div class="flex justify-center items-center pt-10 pb-20">
        <h1 class="text-4xl font-semibold">Sala de<span class="text-amarelo"> Leitura</span></h1>
    </div>

    <div class="text-center">
        <h1 class="text-4xl font-bold mb-6 text-gray-800">Pomodoro Timer</h1>
        <div id="timer" class="text-6xl font-bold text-[#EA9901]">25:00</div>
        <div class="mt-6">
            <button id="start" class="px-6 py-2 bg-[#EA9901] text-white rounded-md hover:bg-orange-600 focus:outline-none">
                Start
            </button>
            <button id="reset" class="px-6 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none">
                Reset
            </button>
        </div>
    </div>

    <div class="flex justify-center items-center pt-10">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/jfKfPfyJRdk?si=uZFhjjrViQhxvS8q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>


        <script>
            // Pomodoro Timer Variables
    const timerDisplay = document.getElementById("timer");
    const startButton = document.getElementById("start");
    const resetButton = document.getElementById("reset");

    let timerInterval;
    let timeLeft = 25 * 60; // 25 minutes in seconds
    let isRunning = false;

    // Function to update the display
    function updateDisplay() {
        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        timerDisplay.textContent = `${minutes < 10 ? "0" : ""}${minutes}:${
            seconds < 10 ? "0" : ""
        }${seconds}`;
    }

    // Function to start the timer
    function startTimer() {
        if (!isRunning) {
            isRunning = true;
            timerInterval = setInterval(() => {
                if (timeLeft > 0) {
                    timeLeft--;
                    updateDisplay();
                } else {
                    clearInterval(timerInterval);
                    timerDisplay.textContent = "Time's up!";
                    isRunning = false;
                }
            }, 1000);
        }
    }

    // Function to reset the timer
    function resetTimer() {
        clearInterval(timerInterval);
        timeLeft = 25 * 60; // Reset to 25 minutes
        updateDisplay();
        isRunning = false;
    }

    // Event Listeners
    startButton.addEventListener("click", startTimer);
    resetButton.addEventListener("click", resetTimer);

    // Initial Display
    updateDisplay();

        </script>
    


</body>
</html>

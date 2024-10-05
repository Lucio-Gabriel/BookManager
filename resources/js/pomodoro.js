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

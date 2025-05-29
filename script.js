const button = document.getElementById('start');
const result = document.getElementById('result');

button.addEventListener('click', () => {
    let recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
    recognition.onstart = () => console.log("Listening...");
    recognition.onresult = (event) => {
        let speech = event.results[0][0].transcript.toLowerCase();
        result.innerText = "You said: " + speech;
        
        // Handling Commands
        if (speech.includes("open google")) {
            window.open("https://www.google.com", "_blank");
        } else if (speech.includes("open youtube")) {
            window.open("https://www.youtube.com", "_blank");
        }
        else if (speech.includes("open")) { 
            let query = speech.replace("open", "").trim();
            window.open(`https://www.${query}.com/login`, "_blank");
        }
        else if (speech.includes("wikipedia")) {
            let query = speech.replace("wikipedia", "").trim();
            window.open(`https://en.wikipedia.org/wiki/${query}`, "_blank");
        }
        else{
            console.log("<p>Sorry</p>");
        }

        // Sending command to PHP
        fetch('store.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
           body: `command=${encodeURIComponent(speech)}`

        });
    };
    recognition.start();
});
# Voice_Assisstant
A simple web-based voice command assistant built using HTML, CSS, JavaScript, and PHP, capable of recognizing voice commands and executing predefined actions like opening websites. Commands are also stored in a backend for history viewing.
<br>
Features:<br>
* Uses browser's Speech Recognition API to listen for voice input.<br>
* Opens common websites based on recognized commands (e.g., Google, YouTube, Wikipedia).<br>
* Dynamically opens other websites via open <sitename> command.<br>
* Sends voice input to a PHP backend for logging.<br>

History view via a dedicated dataR.php page.<br>

Project Structure:<br>
├── mini.html         # Main frontend interface<br>
├── script.js         # JavaScript logic for voice recognition and command handling<br>
├── styles.css        # Styling for the webpage<br>
├── store.php         # PHP script to store voice commands in a database<br>
├── dataR.php         # PHP page to display stored command history<br>


How It Works:<br>

1.User clicks Start Listening.<br>
2.The browser captures speech and converts it to text.<br>
3.The script processes the speech and takes appropriate action:<br>
   i. Opens specific websites<br>
  ii. Sends command to store.php via POST<br>
4.The user can view command history through the History button.<br>

Requirements:<br>
* A modern browser that supports Web Speech API (e.g., Chrome).<br>
* PHP backend with access to a MySQL database.<br>
* Apache server or any local server stack like XAMPP/LAMP.<br>

Setup Instructions:<br>
* Place all files in your web server directory (e.g., htdocs for XAMPP).<br>
* Ensure your database and table are set up as required in store.php and dataR.php.<br>
* Start your local server.<br>
* Open mini.html in your browser to start using the assistant.<br>

Sample Voice Commands:<br>
"Open Google"<br>
"Open YouTube"<br>
"Open github"<br>
"Wikipedia Elon Musk"<br>


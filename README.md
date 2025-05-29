
# Voice_Assistant

A simple web-based voice command assistant built using **HTML**, **CSS**, **JavaScript**, and **PHP**, capable of recognizing voice commands and executing predefined actions like opening websites. Commands are also stored in a backend for history viewing.

---

## ✨ Features

- Uses browser's Speech Recognition API to listen for voice input.  
- Opens common websites based on recognized commands (e.g., Google, YouTube, Wikipedia).  
- Dynamically opens other websites via `open <sitename>` command.  
- Sends voice input to a PHP backend for logging.  
- History view via a dedicated `dataR.php` page.  

---

## 📁 Project Structure

```
├── mini.html         # Main frontend interface
├── script.js         # JavaScript logic for voice recognition and command handling
├── styles.css        # Styling for the webpage
├── store.php         # PHP script to store voice commands in a database
├── dataR.php         # PHP page to display stored command history
```

---

## ⚙️ How It Works

1. User clicks **Start Listening**.  
2. The browser captures speech and converts it to text.  
3. The script processes the speech and takes appropriate action:  
   - Opens specific websites  
   - Sends command to `store.php` via POST  
4. The user can view command history through the **History** button.  

---

## 🧰 Requirements

- A modern browser that supports Web Speech API (e.g., Chrome).  
- PHP backend with access to a MySQL database.  
- Apache server or any local server stack like XAMPP/LAMP.  

---

## 🚀 Setup Instructions

- Place all files in your web server directory (e.g., `htdocs` for XAMPP).  
- Ensure your database and table are set up as required in `store.php` and `dataR.php`.  
- Start your local server.  
- Open `mini.html` in your browser to start using the assistant.  

---

## 🎤 Sample Voice Commands

- `Open Google`  
- `Open YouTube`  
- `Open github`  
- `Wikipedia Elon Musk`  

---

## 👨‍💻 Author

**Vivek M A**

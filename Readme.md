# News Aggregator Web App

A dynamic news aggregator web application that fetches and displays real-time news from multiple categories using a PHP backend and a modern frontend interface.

---

##  Features

-  Search news by keyword
-  Browse news by categories (Technology, Business, Sports, Health)
-  Real-time news fetching using API
-  Modern UI with glassmorphism design
-  Responsive layout
-  Login system using PHP sessions
-  Dynamic content rendering without page reloads

---

## Tech Stack

### Frontend
- HTML5  
- CSS3 (Flexbox, Glassmorphism UI)  
- JavaScript (Fetch API, DOM Manipulation)

### Backend
- PHP

### API
- News API (for fetching real-time news)

---

## 📂 Project Structure
web_tech_project/
│
├── index.php # Main dashboard (after login)
├── login.php # Login page
├── fetch_news.php # Backend API handler
├── script.js # Frontend logic
├── style.css # Main UI styling
├── login.css # Login page styling
├── config.php # API key configuration

## ⚙️ How It Works

1. User logs in through `login.php`
2. PHP session is created after successful login
3. `index.php` is accessible only after authentication
4. JavaScript sends request to backend: fetch_news.php → News API
5. Backend fetches data from API
6. JSON response is sent to frontend
7. News articles are dynamically rendered using JavaScript

---
## UI Highlights
1. Glassmorphism news cards
2. Animated gradient background
3. Sticky navigation bar
4. Interactive search and category filters
5. Responsive web page

## Key Concepts Used
- Asynchronous data fetching (Fetch API)
- DOM manipulation
- PHP session management
- REST API integration
- Responsive UI design

## Key Concepts Used
- Asynchronous data fetching (Fetch API)
- DOM manipulation
- PHP session management
- REST API integration
- Responsive UI design

## Author
Ishita Singh


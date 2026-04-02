<!DOCTYPE html>
<html>
<head>
    <title>News Aggregator</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <h1>News Aggregator</h1>

    <div class="categories">
        <button onclick="getNews('technology')">Technology</button>
        <button onclick="getNews('sports')">Sports</button>
        <button onclick="getNews('business')">Business</button>
        <button onclick="getNews('health')">Health</button>
    </div>

    <div id="news-container"></div>

    <script src="script.js"></script>
</body>
</html>

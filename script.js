function getNews(category) {

    fetch(`http://localhost/web_tech_project/fetch_news.php?category=${category}`)
        .then(response => response.json())
        .then(data => {

            const container = document.getElementById("news-container");
            container.innerHTML = "";

            if (data.articles.length === 0) {
                container.innerHTML = "<p>No news found.</p>";
                return;
            }

            data.articles.forEach(article => {

                container.innerHTML += `
                    <div class="news-card">
                        <img src="${article.urlToImage || 'assets/placeholder.jpg'}">
                        <h3>${article.title}</h3>
                        <p>${article.description || 'No description available'}</p>
                        <a href="${article.url}" target="_blank">Read More</a>
                    </div>
                `;
            });
        })
        .catch(error => {
            console.error("Error fetching news:", error);
        });
}
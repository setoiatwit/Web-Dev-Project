const posts = [
    {
        "title": "title1",
        "description": "description1",
        "tags": ["tag1"]
    },
    {
        "title": "title2",
        "description": "description2",
        "tags": ["tag1"]
    },
    {
        "title": "title3",
        "description": "description3",
        "tags": ["tag1"]
    },
    {
        "title": "title4",
        "description": "description4",
        "tags": ["tag1"]
    },
    {
        "title": "title5",
        "description": "description5",
        "tags": ["tag1"]
    }
];

for (let i = 0; i < posts.length; i++) {
    console.log(posts[i].title);
    document.write(`
        <div class="forum-post"> 
            <a href="forum.html">${posts[i].title}</a>
            <p>${posts[i].description}</p>
        </div>
    `);
}
wp.apiFetch({ path: '/wp/v2/posts' }).then(posts => {
    const block = document.querySelector('.wp-block-my-block-posts-list');
    if (!block) {
        return;
    }

    const ul = document.createElement('ul');
    posts.forEach(post => {
        const li = document.createElement('li');
        li.innerHTML = post.title.rendered;
        ul.appendChild(li);
    });

    block.appendChild(ul);
});


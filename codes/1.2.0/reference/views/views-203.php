<!-- app/views/index.phtml -->
<!DOCTYPE html>
<html>
<head>
    <title>Blog's title</title>
</head>
<body>

<!-- app/views/layouts/common.phtml -->

<ul class="menu">
    <li><a href="/">Home</a></li>
    <li><a href="/articles">Articles</a></li>
    <li><a href="/contact">Contact us</a></li>
</ul>

<div class="content">

    <!-- app/views/layouts/posts.phtml -->

    <h1>Blog Title</h1>

    <!-- app/views/layouts/posts/last.phtml -->

    <article>
        <h2>This is a title</h2>

        <p>This is the post content</p>
    </article>

    <article>
        <h2>This is another title</h2>

        <p>This is another post content</p>
    </article>

</div>

</body>
</html>


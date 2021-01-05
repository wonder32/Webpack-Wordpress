<?php

    define('WP_ENVIRONMENT_TYPE', 'production');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Javascript ES6 - example.com</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php if (WP_ENVIRONMENT_TYPE == "production") : ?>
        <script src="/assets/dist/js/header.script.js"></script>
        <link rel='stylesheet' href='/assets/dist/css/style.css' type='text/css' media='all' />
    <?php else : ?>
        <script src="http://localhost:8080/assets/dist/js/header.script.js"></script>
        <link rel='stylesheet' href='http://localhost:8080/assets/dist/css/style.css' type='text/css' media='all' />
    <?php endif;  ?>

</head>
<body>

    <header>
        <h1>Javascript ES6 - example.com</h1>
        <sub>a tryout axample</sub>
    </header>

    <main>
        <div class="content-container">
        <article>
            Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Aliquid blanditiis culpa cum cumque ducimus
            eius eos est exercitationem officiis ratione,
            similique sit totam ut. Alias amet eum iste itaque
            molestiae!

        </article>
        <article>
            Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Aliquid blanditiis culpa cum cumque ducimus
            eius eos est exercitationem officiis ratione,
            similique sit totam ut. Alias amet eum iste itaque
            molestiae!

        </article>
        </div>
        <nav>
            <ul>
                <li>Subject 1</li>
                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
            </ul>
        </nav>
        <aside>
            <ul>
                <li>Subject 1</li>
                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
            </ul>
        </aside>
    </main>

    <footer>
        <ul>
            <li>Subject 1</li>
            <li>Link 1</li>
            <li>Link 2</li>
            <li>Link 3</li>
        </ul>
        <ul>
            <li>Subject 1</li>
            <li>Link 1</li>
            <li>Link 2</li>
            <li>Link 3</li>
        </ul>
        <ul>
            <li>Subject 1</li>
            <li>Link 1</li>
            <li>Link 2</li>
            <li>Link 3</li>
        </ul>
        <ul>
            <li>Subject 1</li>
            <li>Link 1</li>
            <li>Link 2</li>
            <li>Link 3</li>
        </ul>
    </footer>
    <script src="/assets/dist/js/footer.script.js" async></script>
</body>
</html>
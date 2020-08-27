<?php
header('Cache-control: private, max-age=0');


if ($_SERVER['REQUEST_URI'] === '/') {
    echo '<a href="/welcome">welcome</a>';
    echo '<br>';
    echo '<a href="/not-found">not-found</a>';
} elseif ($_SERVER['REQUEST_URI'] === '/welcome') {
    echo '<a href="/">main</a>';
} else {
    http_response_code(404);
    echo 'Page not found. <a href="/">main</a>';
}

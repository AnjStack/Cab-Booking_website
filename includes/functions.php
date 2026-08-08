<?php
function page_title($title)
{
    return '<h1>' . htmlspecialchars($title) . '</h1>';
}

function current_year()
{
    return date('Y');
}
?>

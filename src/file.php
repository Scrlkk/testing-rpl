<?php

$url = 'http://mediabisnisonline.com/';

function create_link($url)
{
    echo '<a href="' . $url . '">Klik Link Ini</a>';
}

create_link($url);
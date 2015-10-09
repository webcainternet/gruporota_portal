<?php
$url = "http://rss.cnn.com/rss/edition_americas.rss"; // url to parse
$rss = simplexml_load_file($url); // XML parser


$i = 0; // counter
foreach($rss->channel->item as $item) {
if ($i < 10) { // parse only 10 items
    print '<a class="noticiaslinks" href="'.$item->link.'">'.$item->title.'</a><br>&nbsp;<br>';
}

$i++;
}
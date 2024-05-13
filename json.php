<?php

$url = "https://www.jma.go.jp/bosai/quake/data/list.json";

header("Content-Type: application/json; charset=utf-8");
echo file_get_contents( $url );
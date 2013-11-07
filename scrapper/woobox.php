<?php
require "simple_html_dom.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://woobox.com/4mn57p/vote');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$result = curl_exec($ch);
curl_close($ch);

$html = str_get_html($result);

$i = 0;
$photos = array();

foreach($html->find('.element-content') as $element) {
  $i++;
  
  if ($i > 6) {
    break;
  }
  
  preg_match('/https?\:\/\/[^\" ]+/i', $element->find('.square-thumb', 0)->style, $matches);
  $img = rtrim($matches[0], ')');
  $photos[] = array('url' => $img,
                    'caption' => $element->find('.caption', 0)->plaintext
                  );
}

echo json_encode($photos);

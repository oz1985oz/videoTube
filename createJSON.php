<?php

$obj = [];
$obj = [
	[
		'src' => 'https://storage.googleapis.com/webfundamentals-assets/videos/chrome.webm',
		'comment' => 'Chrome is the best',
		'title' => 'Chrome'
	],
	[
		'src' => 'https://ak9.picdn.net/shutterstock/videos/3915479/preview/stock-footage-aerial-shot-of-the-top-of-a-plateau.mp4',
		'comment' => 'Nice show',
		'title' => 'Plateau'
	],
	[
		'src' => 'https://ak6.picdn.net/shutterstock/videos/18634556/preview/stock-footage-feeling-fresh-at-haew-narok-waterfall-khao-yai-national-park-nakhon-nayok-province-thailand.mp4',
		'comment' => 'Rotarians to advance world understanding, goodwill, and peace',
		'title' => 'Waterfall'
	],
	[
		'src' => 'https://ak8.picdn.net/shutterstock/videos/4012198/preview/stock-footage-aerial-view-flying-over-the-beautiful-autumn-river-aerial-camera-shot-altai-siberia.mp4', 
		'comment' => 'Develops, supports, and stewards legal and technical infrastructure',
		'title' => 'River'	
	]
];

file_put_contents('videosDetails.json', json_encode($obj));
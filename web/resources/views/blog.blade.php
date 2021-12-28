@include('simple_html_dom')

@php

$context = stream_context_create();
stream_context_set_params($context, array('user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Whale/2.8.107.16 Safari/537.36'));

$html = file_get_html('https://blog.naver.com/prologue/PrologueList.nhn?blogId=stayhauoli');

// find all span tags with class="gb1"
foreach($html->find('dl.p_post_top') as $e) echo $e->outertext . '<br>' . PHP_EOL;

@endphp

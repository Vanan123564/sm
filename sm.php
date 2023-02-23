<?php
error_reporting(0);
session_start();
ini_set("set_time_limit", 5);
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";

$_SESSION['useragent'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36';
$lmkdz= $trang."❀".$do."[".$luc."NMP".$do."] ".$trang."➨ ";
$lmkdz1= $xnhac."NMP";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	$_SESSION['load'] = 2000;
	$_SESSION['delay'] = 5000;
} else {
	$_SESSION['load'] = 0;
	$_SESSION['delay'] = 0;
}
system('clear');
echo
"\033[1;92m   UPDATE:\033[1;33m v3
\033[1;33m - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
\033[1;33m  Bản Quyền: \033[1;32m NMP  \033[1;32m            \033[1;33m
\033[1;33m  YTB:\033[1;32m NMP TOOL & TUT VIP          \033[1;34m                        
 \033[1;33m - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
";
echo $lmkdz.$luc."Nhập Số Điện Thoại: $trang";
$sdt = trim(fgets(STDIN));
$dem = 0;
system('clear');
echo
"\033[1;92m   Coppyright:\033[1;33m NMP
\033[1;33m - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
\033[1;33m  Bản Tool: \033[1;32m v1  \033[1;32m            \033[1;33m
\033[1;33m  Update:\033[1;32m v1          \033[1;34m                        
 \033[1;33m - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
";
while(true) {
	$check = json_decode(file_get_contents("https://quanghuynopro.xyz/api/call.php?phone=".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;31m | \033[1;36m Spam Call  \033[1;31m   | \033[1;33m "  .$sdt." \033[1;31m| $hong$check->msg\n";
	if ($check->status == "success") {
}
$check1 = json_decode(file_get_contents("https://nnquangpro.com/spammomo.php?phone=".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;31m | \033[1;36m Spam MoMo \033[1;31m    | \033[1;33m ".$sdt." \033[1;31m| $hong$check->msg\n";
	if ($check->status == "success") {
}
$check2 = json_decode(file_get_contents("https://quanghuynopro.xyz/api/tv360.php?phone=".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;31m | \033[1;36m Spam Tv360  \033[1;31m  | \033[1;33m ".$sdt." \033[1;31m| $hong$check->msg\n";
	if ($check->status == "success") {
}
$check3 = json_decode(file_get_contents("https://quanghuynopro.xyz/api/vtmoney.php?phone=".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;31m | \033[1;36m Spam VTMoney  \033[1;31m| \033[1;33m ".$sdt." \033[1;31m| $hong$check->msg\n";
	if ($check->status == "success") {
}
$check4 = json_decode(file_get_contents("https://quanghuynopro.xyz/api/zalopay.php?phone=84837238252".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;31m | \033[1;36m Spam Zalopay  \033[1;31m| \033[1;33m ".$sdt." \033[1;31m| $hong$check->msg\n";
	if ($check->status == "success") {
}
$check5 = json_decode(file_get_contents("https://quanghuynopro.xyz/api/fpt.php?phone=".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;31m | \033[1;36m Spam FPT  \033[1;31m    | \033[1;33m ".$sdt." \033[1;31m| $hong$check->msg\n";
	if ($check->status == "success") {
}
$check6 = json_decode(file_get_contents("https://nnquangpro.com/apivip/pop.php?phone=".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;31m | \033[1;36m Spam PoP \033[1;31m     | \033[1;33m ".$sdt." \033[1;31m| $hong$check->msg\n";
	if ($check->status == "success") {
}
	delay(30);
}
function delay ($delay){
	for($tt = $delay ;$tt>= 0;$tt--){
		echo "\r\033[1;33m   NMP \033[1;31m →_→       \033[1;32m LO      \033[1;31m [ $tt ] "; usleep(150000);
        echo "\r\033[1;31m   NMP \033[1;33m   →_→     \033[1;37m LOA     \033[1;31m [ $tt ] "; usleep(150000);
        echo "\r\033[1;32m   NMP \033[1;33m     →_→   \033[1;37m LOAD    \033[1;31m [ $tt ] "; usleep(150000);
        echo "\r\033[1;34m   NMP \033[1;33m      →_→  \033[1;37m LOADI   \033[1;31m [ $tt ] "; usleep(150000);
        echo "\r\033[1;35m   NMP \033[1;33m       →_→ \033[1;37m LOADIN  \033[1;31m [ $tt ] "; usleep(150000);
        echo "\r\033[1;35m   NMP  \033[1;33m       →_→ \033[1;37m LOADING \033[1;31m [ $tt ] "; usleep(150000);
        echo "\r\033[1;35m   NMP. \033[1;33m        →_→\033[1;37m LOADING.\033[1;31m [ $tt ] "; usleep(100000);} 
echo "\r\033[1;35m   SPAM SMS                      \r"; 
}
function chay($t = 23) { for ($x = 0; $x <= $t; $x++) {echo "\033[1;37m=\033[1;31m●";usleep(5000); } echo"\n";}
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { @system('clear'); } else { @system('cls'); }
	for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
	chay(35);
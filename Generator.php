<?php
// Encoded by: BOIESCYLOSH
$p1 = "\x1b[1;31m"; $p2 = "\x1b[1;32m"; $p3 = "\x1b[1;33m";
$p4 = "\x1b[1;37m"; $p5 = "\x1b[1;36m"; $p6 = "\x1b[0m";

function cls() { system('clear'); }
function hdr() { global $p5,$p3,$p6; echo $p5."
  e88'Y88     e   e         e Y8b     88P'888'Y88 888 Y8b Y8P 
 d888  'Y    d8b d8b       d8b Y8b    P'  888  'Y 888  Y8b Y  
C8888       e Y8b Y8b     d888b Y8b       888     888   Y8b   
 Y888  ,d  d8b Y8b Y8b   d888888888b      888     888  e Y8b  
  \"88,d88 d888b Y8b Y8b d8888888b Y8b     888     888 d8b Y8b ".$p6."

    ".$p3."AUTHOR TOOL | BOIESCYLOSH".$p6."\n\n"; }
function ldd($t) { global $p3,$p2,$p6; echo "\n".$p3."[*] ".$t.$p6."\n";
  for($i=0;$i<=20;$i++){ $b=str_repeat('=', $i); $s=str_repeat(' ', 20-$i); $c=$i*5;
    printf("\r".$p2."[%s%s] %d%%", $b, $s, $c); usleep(100000); } echo "\n".$p2."[+] Done!".$p6."\n"; }
function inf($f) { global $p4,$p3,$p5,$p2,$p1,$p6; echo "\n".$p4."File : ".$p3.$f.$p6;
  echo "\n".$p4."Save : ".$p5."cp $f /storage/emulated/0/".$p6."\n".$p1."\nEnter to back".$p6;
  fgets(STDIN); echo $p3."\nBack...".$p6; sleep(1); }

function v1() { cls(); global $p2,$p4,$p1,$p6; echo $p2."[".$p4." .php ".$p2."]\n".$p1."CTRL+o back\n\n";
  echo $p4."Name : ".$p2; $n=trim(fgets(STDIN)); echo $p4."Quote : ".$p2; $q=trim(fgets(STDIN));
  echo $p4."File : ".$p2; $f=trim(fgets(STDIN)); if(!$f) return;
  $c="<?php
\$n=strtoupper('$n'); \$q=strtoupper('$q'); \$w=[\" \$n \",\" \$q \"]; \$ch=\"ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789\";
echo \"\\033[?25l\\033[2J\"; \$wi=0; \$lc=microtime(1);
while(1){ \$h=(int)exec('tput lines'); \$l=(int)exec('tput cols');
if(microtime(1)-\$lc>0.5){\$wi=(\$wi+1)%count(\$w); \$lc=microtime(1);}
ob_start(); echo \"\\033[H\";
for(\$y=1;\$y<=\$h;\$y++){ for(\$x=1;\$x<=\$l;\$x++){ if(rand(0,10)>8){
echo \"\\033[1;31m\".\$ch[rand(0,strlen(\$ch)-1)]; }else{ echo \" \"; } } echo \"\\n\"; }
\$m=\$w[\$wi]; \$sx=(int)((\$l-strlen(\$m))/2); \$sy=(int)(\$h/2);
echo \"\\033[\$sy;{\$sx}H\\033[1;37m\\033[40m \$m \\033[0m\"; ob_end_flush(); usleep(50000); } ?>";
  file_put_contents($f, $c); ldd("Generating..."); inf($f); }

function v2() { cls(); global $p2,$p4,$p1,$p6; echo $p2."[".$p4." .php ".$p2."]\n".$p1."CTRL+o back\n\n";
  echo $p4."Teks 1 : ".$p2; $t1=trim(fgets(STDIN)); echo $p4."Teks 2 : ".$p2; $t2=trim(fgets(STDIN));
  echo $p4."Link : ".$p2; $lk=trim(fgets(STDIN)); echo $p4."File : ".$p2; $f=trim(fgets(STDIN)); if(!$f) return;
  $c="<?php
echo \"\\033[1;31mCTRL+C stop\\033[0m\\n\";
while(1){ echo \"\\033[1;33m[ \\033[1;37m• \\033[1;33m] \\033[1;32m$t1 \\033[1;33m> \\033[1;37m$t2 \\033[1;32m// \\033[1;33m[ \\033[1;31mAttack \\033[1;33m] \\033[1;36m$lk\\n\"; usleep(500000); } ?>";
  file_put_contents($f, $c); ldd("Building..."); inf($f); }

while(1){ cls(); hdr(); echo $p3."1.".$p4." Versi Teks\n2.".$p4." Versi Login\n3.".$p4." About\n4.".$p4." Exit\n".$p5."Pilih > ".$p6;
  $m=trim(fgets(STDIN)); if($m=="1"){ v1(); }elseif($m=="2"){ v2(); }elseif($m=="3"){ cls(); echo $p1."
  ┌─────────────────────────────────────────────────┐
  │ ".$p4."Tool untuk bikin tampilan hack biar keren  ".$p1."│
  │ ".$p4."Biar gak 404 atau tulisan itu2 aja           ".$p1."│
  └─────────────────────────────────────────────────┘".$p6."
  ".$p3."\nEnter to back".$p6; fgets(STDIN); }elseif($m=="4"){ echo $p1."\nExit...".$p6; exit(); } }
?>

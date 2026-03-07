<?php
$c1 = "\033[1;36m"; 
$c2 = "\033[1;33m"; 
$c3 = "\033[1;31m";
$c4 = "\033[1;32m";
$c5 = "\033[0m";

$b = $c1."  e88'Y88     e   e        e Y8b     88P'888'Y88 888 Y8b Y8P \n";
$b .= " d8888 'Y    d8b d8b      d8b Y8b    P'  888  'Y 888  Y8b Y  \n";
$b .= "C8888      e Y8b Y8P     d888b Y8b       888     888   Y8b  \n";
$b .= " Y888  ,d  d8b Y8b Y8b   d888888888bi      888     888  e Y8b  \n";
$b .= "  '88,d88 d888b Y8b Y8bi d8888888b Y8bi     888     888 d8b Y8b \n".$c5;

function cls() { passthru('clear'); }

while (true) {
    cls();
    echo $b . "\n";
    echo $c2." AUTHOR TOOL | BOIESCYLLOSH\n\n".$c5;
    echo $c2."1. ".$c5."Versi Teks\n";
    echo $c2."2. ".$c5."Versi Login\n";
    echo $c2."3. ".$c5."About Tool\n";
    echo $c2."4. ".$c5."Exit\n\n";
    echo $c1."Choose No > ".$c5;
    $sel = trim(fgets(STDIN));

    if ($sel == "1") {
        cls();
        echo $c4."[ File harus .php ]\n".$c5;
        echo "Nama Anda : "; $n = trim(fgets(STDIN));
        echo "Quotes    : "; $q = trim(fgets(STDIN));
        echo "File Name : "; $f = trim(fgets(STDIN));
        if ($f) {
            $code = "<?php echo 'Hacked By $n\n$q'; ?>";
            file_put_contents($f, $code);
            echo "\n".$c4."[+] Success Created $f\n".$c5; sleep(2);
        }
    } elseif ($sel == "2") {
        cls();
        echo $c4."[ Build Login Page ]\n".$c5;
        echo "Target Link : "; $l = trim(fgets(STDIN));
        echo "File Name   : "; $fn = trim(fgets(STDIN));
        if ($fn) {
            $code = "<?php echo 'Login to $l'; ?>";
            file_put_contents($fn, $code);
            echo "\n".$c4."[+] Success Created $fn\n".$c5; sleep(2);
        }
    } elseif ($sel == "3") {
        cls();
        echo $c3."[ WARNING !!! ]\n".$c5;
        echo str_repeat("-", 40)."\n";
        echo "Tool ini untuk membuat script deface sederhana.\n";
        echo "Gunakan dengan bijak, bre!\n";
        echo str_repeat("-", 40)."\n";
        echo "\nTekan ENTER untuk kembali...";
        fgets(STDIN);
    } elseif ($sel == "4") {
        exit("\nBye Bre!\n");
    }
}
?>

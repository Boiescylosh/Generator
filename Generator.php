<?php
$c1 = "\033[1;36m"; 
$c2 = "\033[1;33m"; 
$c3 = "\033[0m";

$b =  $c1."  e88'Y88     e   e        e Y8b     88P'888'Y88 888 Y8b Y8P \n";
$b .= " d8888 'Y    d8b d8b      d8b Y8b    P'  888  'Y 888  Y8b Y  \n";
$b .= "C8888      e Y8b Y8P     d888b Y8b       888     888   Y8b  \n";
$b .= " Y888  ,d  d8b Y8b Y8b   d888888888bi      888     888  e Y8b  \n";
$b .= "  '88,d88 d888b Y8b Y8bi d8888888b Y8bi     888     888 d8b Y8b \n".$c3;

function cls() { passthru('clear'); }

while (true) {
    cls();
    echo $b . "\n";
    echo $c2."AUTHOR TOOL | BOIESCYLLOSH\n\n".$c3;
    echo "1. Create Deface File\n";
    echo "2. Exit\n\n";
    echo "Choose > ";
    
    $sel = trim(fgets(STDIN));
    
    if ($sel == "1") {
        cls();
        echo "File Name (ex: deface.php) : ";
        $fn = trim(fgets(STDIN));
        if ($fn) {
            $code = "<?php echo 'Hacked By You'; ?>";
            file_put_contents($fn, $code);
            echo "\n\033[1;32m[+] Success! File saved as: $fn\033[0m\n";
            sleep(2);
        }
    } elseif ($sel == "2") {
        exit("\nBye Bre!\n");
    }
}
?>

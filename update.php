<?php
function execPrint($command) {
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "\n");
    }
}
// Print the exec output inside of a pre element
print("<pre>" . execPrint("git pull https://marcodebus:Mypasword@github.com/marcodebus/carambasoft.git master") . "</pre>");
exec("rm -v *");
//testcode....
?>

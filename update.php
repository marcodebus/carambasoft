<?php
function execPrint($command) {
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "\n");
    }
}
// Print the exec output inside of a pre element
print("<pre>" . execPrint("git pull https://marcodebus:Marcokite2@github.com/marcodebus/carambasoft.git master") . "</pre>");

exec("rm -v *");
echo 'Error with Github Repo https://github.com/marcodebus/carambasoft.git' >index.html


//testcode....
?>

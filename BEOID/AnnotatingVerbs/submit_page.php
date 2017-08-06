<style>
    h1 {color:navy;}
</style>

<?php

    $key = $_POST['key'];

    $out_file = fopen('out'.$key.'.txt', "w") or die("Unable to open file!");

    fwrite($out_file, "---\n");

    foreach($_POST as $key => $value) {
        if($key != 'key'):
            fwrite($out_file, $key." ".$value."\n");
        endif;
    }

    fwrite($out_file, "---\n");

    fclose($out_file);
?>

<div>
    <h1> Thank you for your response!</h1>
</div>

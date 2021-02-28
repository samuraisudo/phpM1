<?php
function alert($_PM_TEXT){
    echo("<script>alert(\"".$_PM_TEXT."\");</script>");
}

function console($_PM_TEXT){
    echo("<script>console.log(\"".$_PM_TEXT."\");</script>");
}
?>
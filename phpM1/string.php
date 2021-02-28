<?php
function cout($_PM_TEXT){
    $_PM_TEXT = htmlspecialchars($_PM_TEXT, ENT_QUOTES, 'UTF-8');
    echo($_PM_TEXT);
}
function get_return($_PM_TEXT){
    $_PM_TEXT = htmlspecialchars($_GET[$_PM_TEXT], ENT_QUOTES, 'UTF-8');
    return $_PM_TEXT;
}
function post_return($_PM_TEXT){
    $_PM_TEXT = htmlspecialchars($_POST[$_PM_TEXT], ENT_QUOTES, 'UTF-8');
    return $_PM_TEXT;
}
function color($_PM_TEXT, $_PM_color){
    $_PM_color = htmlspecialchars($_PM_color, ENT_QUOTES, 'UTF-8');
    return "<font color=\"".$_PM_color."\">".$_PM_TEXT."</font>";
}
function b($_PM_TEXT){
    return "<b>".$_PM_TEXT."</b>";
}
function vmail($_PM_TEXT){
    if(preg_match("/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/", $_PM_TEXT)){
        return true;
    }
    else
    {
        return false;
    }
}
function vurl($_PM_TEXT){
    if(preg_match("/https?:\/\/[^\s]*/", $_PM_TEXT)){
        return true;
    }
    else
    {
        return false;
    }
}
function filt($_PM_TEXT){
    $_PM_TEXT = htmlspecialchars($_PM_TEXT, ENT_QUOTES, 'UTF-8');
    return $_PM_TEXT;
}
?>
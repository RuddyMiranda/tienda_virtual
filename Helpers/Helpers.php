<?php
    //Retorna la url del proyecto
    function base_url()
    {
        return BASE_URL;
    }
    function media(){
        return BASE_URL."/Assets";
    }
    function headerAdmin($data="")
    {
        $view_header = "Views/Template/header_admin.php";
        require_once ($view_header);
    }
    function footerAdin($data="")
    {
        $view_header = "Views/Template/footer_admin.php";
        require_once ($view_footer);
    }







    function dep($data){
        $format = print_r('<pre');
        $format .= print_r($data);
        $format .= print_r('</pre>');
        return $format;
    }

    function strClean($strCadena){
        $string = trim($string);
        $string = stripslashes($strings);
        $string = str_ireplace("<scriptss>","",$string);
        $string = str_ireplace("</scripts>","",$string);
        $string = str_ireplace("<script src>","",$string);
        $string = str_ireplace("<script type=","",$string);
        $string = str_ireplace("SELECT * FROM","",$string);
        $string = str_ireplace("DELETE FROM","",$string);
        $string = str_ireplace("INSERT INTO","",$string);
        $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
        $string = str_ireplace("DROP TABLE","",$string);
        $string = str_ireplace("OR '1'='1',","",$string);
        return $string;

    }

    function passGenerator($length = 10)
    {
        $pass = "";
        $logintudPass=$length;
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudCadena=strlen($cadena);

        for ($i=1; $i <=$longitudCadena ; $i++) {
            $pos = rand(0,$longitudCadena-1);
            $pass .= substr($cadena,$pos,1); 
            # code...
        }
        return $pass;

    }

    function token(){
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));
        $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
        return $token;
    }

    function formatMoney($cantidad){
        $cantidad = number_format($cantidad,2,SPD,SPM);
        return $cantidad;
    }

?>
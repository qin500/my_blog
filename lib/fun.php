<?php

class Fun
{
    function getParam()
    {
        $url_arr = explode('/', $_SERVER["REQUEST_URI"]);
        $url_arr[0] = "/";
        $url_rpos = strpos(end($url_arr), '?');
        $url_p_n = [];
        if ($url_rpos) {
            $param_str = substr(end($url_arr), $url_rpos + 1);
            $url_arr[array_key_last($url_arr)] = substr(end($url_arr), 0, $url_rpos);
            $url_p = explode('&', $param_str);
            foreach ($url_p as $k => $v) {
                $v = urldecode($v);
                list($k1, $v1) = explode('=', $v);
                $url_p_n[$k1] = $v1;
            }
        }

        return ["url" => $url_arr, "param" => $url_p_n];
    }

}
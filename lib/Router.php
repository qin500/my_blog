<?php

class Router
{
    public $routes = [];

    public function add($route, $func)
    {
        $this->routes[$route] = $func;
    }

    public function dispatch()
    {
        $url = $_SERVER["REQUEST_URI"];
        $length = (strpos($url, '?') == false) ? strlen($url) : strpos($url, '?');
        $get_url=substr($url,$length+1);

        $url = substr($url, 0, $length);


        //提取GET查询参数
        parse_str($get_url, $out);


        foreach ($out as $key => $value) {
            $_GET[$key] = $value;
        }


        $url = trim($url, '/');
        $url = explode('/', $url);
        $url = array_filter($url);
        array_unshift($url, "/");

        $params = [];
        $route = [];

        $route = '/' . implode('/', $route);


        $a_tmp = [];
        foreach (array_keys($this->routes) as $v) {
            $tmp = explode("/", $v);
            $tmp = array_filter($tmp);
            array_unshift($tmp, "/");
            $a_tmp[] = $tmp;
        }

        //$a_tmp  Array
        //(
        //    [0] => /about
        //    [1] => /post/{id}
        //)
        $door = false;
        foreach ($a_tmp as $k => $v) {
            if (count($url) == count($v)) {
                $s = true;
                $t = 0;
                for ($i = 0; $i < count($url); $i++) {
                    if ($url[$i] !== $v[$i]) {
                        if (preg_match('/{[\w]+}/', $v[$i])) {
                            $params[] = urldecode($url[$i]);
                            continue;
                        } else {
                            $s = false;
                            break;
                        }
                    }
                }
                if ($s) {
                    $door = true;
                    $u = substr(implode('/', $v), 1) ;
                    $u = $u == "" ? "/" : $u;
                    call_user_func_array($this->routes[$u], $params);
                    break;
                }
            }
        }

        if (!$door) {
            header('Location: /404', true, 301);
        }

    }
}
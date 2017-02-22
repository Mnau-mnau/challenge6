<?php

class url
{
    public static function to($page_name = '', $params = array())
    {
        if($page_name)
        {
            //array('page' => 'contact')
            $params['page'] = $page_name;
        }

        //this function builds a http query
        $query_string = http_build_query($params);

        //using config::get('base_url') creates a full string for a browser bar with
        //http: my-website .. it creates absolute path for every page which is better for seo
        return config::get('base_url').($query_string ? '?'.$query_string : '');
        //if $query_string is empty, don't add '?', if contains $page_name, add? and $query_string
    }

    public static function redirect($url, $code = 302)
    {
        $url = url::to($url);

        if($code == 'refresh')
        {
            header('Refresh: 0; url='.$url);
        }
        else
        {
            $codes = array
        (
            '301' => 'Moved Permanently',
            '302' => 'Found',
            '303' => 'See Other',
            '304' => 'Not Modified',
            '305' => 'Use Proxy',
            '307' => 'Temporary Redirect'
        );

        $code = isset($codes[$code]) ? $code : '302';

        header('HTTP/1.1 '.$code.' '.$codes[$code]);
        header('Location: '.$url);
        }
        exit('<h1>'.$code.' - '.$codes[$code].'</h1><p><a href="'.$url.'">'.$url.'</a></p>');
    }
}
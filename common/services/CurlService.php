<?php
/**
 * @author     : lims
 * @date       : 2025-01-09
 * @version    : 1.0
 * description :
 */

namespace common\services;

use backend\models\MyCurl;

class CurlService
{

    /**
     * @param MyCurl $model
     * @return bool|string
     */
    public static function request(MyCurl $model)
    {
        $int = curl_init();
        curl_setopt($int, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
        curl_setopt($int, CURLOPT_RETURNTRANSFER, 1);
        if (is_array($model->header) && !empty($model->header)) {
            curl_setopt($int, CURLOPT_HTTPHEADER, $model->header);
        }
        if ($model->method === 'post') {
            curl_setopt($int, CURLOPT_POST, true);
            if (is_array($model->params) && !empty($model->params))
                curl_setopt($int, CURLOPT_POSTFIELDS, $model->params);
        } else {
            if ($model->params) {
                $get = http_build_query($model->params);
                $model->url .= (strpos($model->url, '?') === false ? '?' : '&') . $get;
            }
        }
        curl_setopt($int, CURLOPT_URL, $model->url);
        $data = curl_exec($int);
        curl_close($int);
        return $data;
    }
}

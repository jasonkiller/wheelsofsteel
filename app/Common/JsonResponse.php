<?php
/**
 * Created by PhpStorm.
 * User: hyd
 * Date: 2017/7/17
 * Time: 下午4:15
 */

namespace app\Common;

class JsonResponse
{

    /**
     * [success description]
     * @author hyd
     * @date   2017-07-17T16:15:53+0800
     * @param  [type]                   $data    [description]
     * @param  [type]                   $url     [description]
     * @param  integer $code [description]
     * @param  string $message [description]
     * @return [type]                            [description]
     */
    public static function success($data = null, $url = null, $code = 200, $message = 'success')
    {
        return self::json($message, $code, $data, $url);
    }

    /**
     * [error description]
     * @author hyd
     * @date   2017-07-17T16:16:16+0800
     * @param  string $message [description]
     * @param  integer $code [description]
     * @param  [type]                   $url     [description]
     * @param  [type]                   $data    [description]
     * @return [type]                            [description]
     */
    public static function error($message = 'error', $code = 400, $url = null, $data = null)
    {
        return self::json($message, $code, $data, $url);
    }

    protected static function json($message, $code, $data, $url)
    {
        $result['message'] = $message;
        $code !== null && $result['status_code'] = $code;
        $data !== null && $result['data'] = $data;
        $url !== null && $result['url'] = $url;
        return response()->json($result);
    }

}

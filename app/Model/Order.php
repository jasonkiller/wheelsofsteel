<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //Order Model
    protected $table = 'order';
    protected $fillable = [];

    /**
     * 订单列表
     * @author hyd
     * @date   2017-07-13T16:43:18+0800
     * @return Array                    订单列表
     */
    public static function orderList()
    {
        return static::get();
    }

    /**
     * 添加订单
     * @author hyd
     * @date   2017-07-13T16:40:55+0800
     * @param  Array                   $data 订单数据
     * @return id                            订单 id
     */
    public static function addOrder($data)
    {
        return static::create($data);
    }

    /**
     * 删除订单
     * @author hyd
     * @date   2017-07-13T16:39:24+0800
     * @param  int                   $id  订单 id
     * @return int                        0删除失败 1删除成功
     */
    public static function delOrder($id)
    {
        return static::where('id', $id)->delete();
    }

    /**
     * 修改订单
     * @author hyd
     * @date   2017-07-13T16:36:39+0800
     * @param  String                   $id   订单 id
     * @param  Array                   $data  订单数据
     * @return int                            0修改失败 1修改成功
     */
    public static function editOrder($id, $data)
    {
        return static::where('id', $id)->update($data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Model\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * [orderList description]
     * @author hyd
     * @date   2017-07-13T16:33:53+0800
     * @return [type]                   [description]
     */
    public function orderList()
    {
        Order::orderList();
    }

    /**
     * [createOrder description]
     * @author hyd
     * @date   2017-07-13T16:34:00+0800
     * @param  Request                  $request [description]
     * @return [type]                            [description]
     */
    public function createOrder(Request $request)
    {
        $data = $request->input('data');
        Order::addOrder($data);
    }

    /**
     * [deleteOrder description]
     * @author hyd
     * @date   2017-07-13T16:34:05+0800
     * @param  Request                  $request [description]
     * @return [type]                            [description]
     */
    public function deleteOrder(Request $request)
    {
        $id = $request->input('id');
        Order::delOrder($id);

    }

    /**
     * [updateOrder description]
     * @author hyd
     * @date   2017-07-13T16:34:11+0800
     * @param  Request                  $request [description]
     * @return [type]                            [description]
     */
    public function updateOrder(Request $request)
    {
        $id = $request->input('id');
        $data = $request->input('data');
        Order::editOrder($id, $data);
    }

}

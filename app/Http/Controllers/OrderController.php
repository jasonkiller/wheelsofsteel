<?php

namespace App\Http\Controllers;

use App\Model\Order;
use Illuminate\Http\Request;
use app\Common\JsonResponse;
use Validator;

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
        $data['start'] = $request->input('start');
        $data['end'] = $request->input('end') ? $request->input('end') : '';
        $data['descripton'] = $request->input('descripton') ? $request->input('descripton') : '';
        $data['username'] = $request->input('username') ? $request->input('username') : '';
        $data['tel'] = $request->input('tel') ? $request->input('tel') : '';
        $data['date'] = $request->input('date') ? $request->input('date') : '';

        $rules = [
            'start' => 'required',
            'end' => 'required',
            'description' => 'required',
            'username' => 'required',
            'tel' => 'required',
            'data' => 'required',
        ];

        $message = [
            'start.requierd' => '请选择开始时间',
            'end.required' => '请选择结束时间',
            'username.required' => '请选择用户',
            'tel.required' => '请填写电话号码',
        ];

        $validator = Validator::make($rules, $message, $data);
        dd($validator->passes());

        if ($validator->passes()) {
            Order::addOrder($data);
            return JsonResponse::success();
        } else {
            return JsonResponse::error($validator->errors()->first());
        }

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

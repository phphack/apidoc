<?php

class User
{
    /**
     * @api {post} /user/get_all 获取所有用户列表
     * @apiVersion 1.0.0
     * @apiName get_all
     * @apiGroup User
     * 
     * @apiParam {Number} [page]     当前页，默认1
     * @apiParam {Number} [pageSize] 页面大小，默认20
     *
     * @apiSuccess {Number}   code      错误码
     * @apiSuccess {String}   msg       错误提示
     * @apiSuccess {Object[]} list      数据列表
     * @apiSuccess {Number}   list.id   用户id
     * @apiSuccess {String}   list.name 用户名
     */
    public function get_all() {}

    /**
     * @api {get} /user/:id 获取单条用户信息
     * @apiVersion 1.0.0
     * @apiName get_one
     * @apiGroup User
     *
     * @apiParam {Number} id 用户id
     *
     * @apiSuccess {String} id   用户id
     * @apiSuccess {String} name 用户名
     */
    public function get_one() {}
}

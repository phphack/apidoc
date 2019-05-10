<?php

class Game
{
    /**
     * @api {post} /game/get_all 获取游戏列表
     * @apiVersion 1.0.0
     * @apiName get_all
     * @apiGroup Game
     * 
     * @apiParam {Number} [page]     当前页，默认1
     * @apiParam {Number} [pageSize] 页面大小，默认20
     *
     * @apiSuccess {Number}   code      错误码
     * @apiSuccess {String}   msg       错误提示
     * @apiSuccess {Object[]} list      数据列表
     * @apiSuccess {Number}   list.id   游戏id
     * @apiSuccess {String}   list.name 游戏名
     */
    public function get_all() {}

    /**
     * @api {get} /game/:id 获取游戏信息
     * @apiVersion 1.0.0
     * @apiName get_one
     * @apiGroup Game
     *
     * @apiParam {Number} id 游戏id
     *
     * @apiSuccess {String} id   游戏id
     * @apiSuccess {String} name 游戏名
     */
    public function get_one() {}
}

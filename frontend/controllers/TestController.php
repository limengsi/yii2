<?php
/**
 * @author     : lims
 * @date       : 2022/5/20 11:24
 * @version    : 1.0
 * description :
 */

namespace frontend\controllers;

class TestController extends BaseController
{
    public function actionIndex()
    {
        $this->cutOffTree([[1, 2, 3], [0, 0, 4], [7, 6, 5]]);

//        return "index";
    }

    function cutOffTree($forest)
    {
        $list = [];
        $history = [];
        $starts = [];
        $target = [];
        foreach ($forest as $y => $value) {
            foreach ($value as $x => $v) {
                $list[$y . '_' . $x] = [
                    'val' => $v,
                    'y' => $y,
                    'x' => $x,
                ];
//                if($v == 0){
//                    $starts[] = [
//                        'y'=>$y,
//                        'x'=>$x,
//                    ];
//                }else
                if ($v > 1) {
                    $target[$v] = [
                        'y' => $y,
                        'x' => $x,
                    ];
                }
            }
        }

        //因为只能从大到小，排序
        krsort($target, SORT_NUMERIC);

        $this->targets($list, $target);
    }

    function targets($list, $target)
    {
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: rozbo
 * Date: 2017/2/28
 * Time: 下午4:50
 */

namespace core\helpers;

use Overtrue\Pinyin\Pinyin;
class PinYinHelper extends Pinyin{

    public function noun($str) {
        $pinyinArr=$this->convert($str);
        foreach ($pinyinArr as &$pinyin) {
            //首字母转大写
            $pinyin[0]=strtoupper($pinyin[0]);
        }
        return implode('',$pinyinArr);
    }
}
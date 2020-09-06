<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Psy\Command\ListCommand\FunctionEnumerator;

class Todo extends Model
{
    /**
     * 状態定義
     **/

    const STATUS = [
        1 => ['badge' => '未着手', 'class' => 'badge-warning'],
        2 => ['badge' => '作業中', 'class' => 'badge-info'],
        3 => ['badge' => '完了', 'class' => 'badge-success'],
    ];

    /**
     * 状態のラベル
     * @return string
     */

    public function getStatusBadgeAttribute()
    {
        //状態値
        $status = $this->attributes['status'];

        // 定義されていなければ空文字を返す
        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['badge'];
    }

    public function getStatusClassAttribute()
    {
        //状態値
        $status = $this->attributes['status'];

        // 定義されていなければ空文字を返す
        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['class'];
    }
}

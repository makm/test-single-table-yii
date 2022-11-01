<?php

namespace app\models\search\Query;


use yii\db\ActiveQuery;
use yii2tech\ar\eagerjoin\EagerJoinQueryTrait;

class HistoryQuery extends ActiveQuery
{
    use EagerJoinQueryTrait;
}

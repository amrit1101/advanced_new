<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-index">

    <!-- <h1><?//= Html::encode($this->title) ?></h1>-->

    <h1>Employee List</h1>
    
    <p>
        <?= Html::a('Add Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'designation',
            'address',
            'phone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

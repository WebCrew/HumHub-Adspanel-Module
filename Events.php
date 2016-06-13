<?php
namespace humhub\modules\adspanel;

use Yii;
use yii\helpers\Url;
use humhub\modules\adspanel\widgets\AdFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('AdspanelModule.base', 'Adspanel Settings'),
            'url' => Url::toRoute('/adspanel/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-weixin"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'adspanel' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addAdFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(AdFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'adspanel')
        ]);
    }
}

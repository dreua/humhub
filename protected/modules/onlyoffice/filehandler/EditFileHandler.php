<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\onlyoffice\filehandler;

use Yii;
use humhub\libs\Html;
use humhub\modules\onlyoffice\Module;
use humhub\modules\file\handler\BaseFileHandler;
use yii\helpers\Url;

/**
 * Description of ViewHandler
 *
 * @author Luke
 */
class EditFileHandler extends BaseFileHandler
{

    /**
     * @inheritdoc
     */
    public function getLinkAttributes()
    {
        return [
            'label' => Yii::t('OnlyofficeModule.base', 'Edit document'),
            'data-action-url' => Url::to(['/onlyoffice/open', 'guid' => $this->file->guid, 'mode' => Module::OPEN_MODE_EDIT]),
            'data-action-click' => 'ui.modal.load',
            'data-modal-id' => 'onlyoffice-modal',
            'data-modal-close' => ''
        ];
    }

}

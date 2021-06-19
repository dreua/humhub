<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

namespace humhub\modules\ui\filter\widgets;

use yii\helpers\ArrayHelper;

class CheckboxFilterInput extends FilterInput
{
    /**
     * @inheritdoc
     */
    public $view = 'checkboxInput';

    /**
     * @inheritdoc
     */
    public $type = 'checkbox';

    /**
     * @var string data-action-click handler of the input event
     */
    public $clickAction = 'toggleFilter';

    public $iconActive = 'fa-check-square-o';

    public $iconInActive = 'fa-square-o';

    public $checked = false;

    /**
     * @inheritdoc
     */
    public function prepareOptions()
    {
        parent::prepareOptions();
        $this->options['data-action-click'] = $this->clickAction;
        $this->options['data-filter-value'] = $this->value;
        $this->options['data-filter-icon-active'] = $this->iconActive;
        $this->options['data-filter-icon-inactive'] = $this->iconInActive;
        $this->options['href'] = '#';
    }

    /**
     * @inheritdoc
     */
    protected function getWidgetOptions()
    {
        return ArrayHelper::merge(parent::getWidgetOptions(), [
            'checked' => $this->checked,
            'iconActive' => $this->iconActive,
            'iconInActive' => $this->iconInActive
        ]);
    }

}

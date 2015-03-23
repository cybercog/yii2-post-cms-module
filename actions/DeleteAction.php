<?php
/**
 * DeleteAction class file.
 * @copyright (c) 2015, bariew
 * @license http://www.opensource.org/licenses/bsd-license.php
 */

namespace bariew\postModule\actions;

use yii\base\Action;
use bariew\postModule\models\SearchItem;
use Yii;
use bariew\postModule\controllers\ItemController;

/**
 * Description.
 *
 * Usage:
 * @author Pavel Bariev <bariew@yandex.ru>
 *
 * @property ItemController $controller
 */
class DeleteAction extends Action
{
    /**
     * @inheritdoc
     */
    public function run($id)
    {
        $this->controller->findModel($id)->delete();

        return $this->controller->redirect(['index']);
    }
}
<?php
/**
 * Class Form
 * @package app\core\form
 * @author Tinh Thanh Vo <tinhthanh.vo@nfq.asia>
 */

namespace app\core\form;

use app\core\Model;

class Form
{
    /**
     * @param $action
     * @param $method
     * @return Form
     */
    public static function begin($action, $method): Form
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    /**
     * @return void
     */
    public static function end(): void
    {
        echo '</form>';
    }

    /**
     * @param Model $model
     * @param $attribute
     * @return Field
     */
    public function field(Model $model, $attribute): Field
    {
        return new Field($model, $attribute);
    }

}

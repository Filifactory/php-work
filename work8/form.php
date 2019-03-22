<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 22.03.19
 * Time: 20:25
 */

class form
{

    /**
     * @var array
     */

    private $fields;

    /**
     * @var string
     */

    private $metod;

    /**
     * @var string
     */

    private $action;

    public function  __construct(string $metod, string $action)
    {
        $this->method = $metod;
        $this->action = $action;
        $this->fields = [];
    }

public function render()
{
    $html = sprintf('<form method="%s" action="%s">', $this->method, $this->action);

    $html .='</form>';
    return $html
}
?>
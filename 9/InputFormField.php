<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 29.03.19
 * Time: 19:21
 */

class InputFormField extends  FormField
{
    private $type ='text';

public function render()
{
    return sprintf('<input type="%s" name="%s" value="%s">', $this->type, $this->name, this->value);

}



}
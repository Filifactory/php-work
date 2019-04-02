<?php
abstract class FormField


{
    protected $value;
    protected $name;
abstract public function render();

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function setValue(string $value): void

    {
        $this->value = $value;
    }
  public function getName(): string
  {
      return$this->name;

  }
}
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 29.03.19
 * Time: 19:20
 */
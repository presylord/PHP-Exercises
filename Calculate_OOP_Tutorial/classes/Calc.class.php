<?php

class Calc
{
    protected $num1;
    protected $num2;
    protected $oper;

    public function __construct(string $oper, int $num1, int $num2)
    {
        $this->oper = $oper;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculate()
    {
        switch ($this->oper) {
            case '+':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case '-':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case '*':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            case '/':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            default:
                echo 'Error';
                break;
        }
    }
}

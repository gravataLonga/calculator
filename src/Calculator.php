<?php

namespace Gravatalonga;

use Gravatalonga\CalculatorNote;

class Calculator
{

    protected $list = null;

    public function __construct()
    {
        $notes = new CalculatorNote;
        $this->list = func_get_args();
        
        if (func_num_args() <= 0) {
            $this->list = [0];
        }
        $notes->add($this->list);
        $this->notes = $notes;
    }

    public function sum()
    {
        if ($this->list == null) {
            throw new \InvalidArgumentException('You must pass arguments on construct');
        }
        $total = $this->notes->operator(function ($value, $keys, $total) {
            return $total + $value;
        });
        return $total;
    }

    public function sub()
    {
        if ($this->list == null) {
            throw new \InvalidArgumentException('You must pass arguments on construct');
        }
        $total = $this->notes->operator(function ($value, $keys, $total) {
            if ($total == null) {
                return $value;
            }
            return $total - $value;
        });
        return $total;
    }

    public function multiply()
    {
        if ($this->list == null) {
            throw new \InvalidArgumentException('You must pass arguments on construct');
        }

        $total = $this->notes->operator(function ($value, $keys, $total) {
            if ($total == null) {
                return $value;
            }
            return $total * $value;
        });
        return $total;
    }

    public function divided()
    {
        if ($this->list == null) {
            throw new \InvalidArgumentException('You must pass arguments on construct');
        }

        $total = $this->notes->operator(function ($value, $keys, $total) {
            if ($total == null) {
                return $value;
            }
            return $total / $value;
        });
        return $total;
    }

}
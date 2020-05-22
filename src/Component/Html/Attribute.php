<?php namespace IamAdty\Component\Html;

class Attribute
{
    protected $name = null;
    protected $value = null;

    public function __construct($name = null, $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function compile()
    {
        $result = "";

        if (!is_null($this->name)) {
            $name = trim(strval($this->name));
            if (!empty($name)) {
                $result .= $name;

                if (!is_null($this->value)) {
                    if (is_string($this->value)) {
                        $value = trim($this->value);
                        if (!empty($value)) {
                            $result .= "=\"{$value}\"";
                        }
                    } else {
                        $value = trim(strval($this->value));
                        $result .= "=\"{$value}\"";
                    }
                }
            }
        }

        return $result;
    }

    /**
     * @param string|null $name
     * @param mixed|null $value
     */
    public static function set()
    {
        $args = func_get_args();
        return new self($args[0] ?? null, $args[1] ?? null);
    }
}

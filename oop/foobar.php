<?php

class foobar {
    protected $_foobar;
    private $_foo;
    private $_bar;

    /**
     * @param $_foo
     * @param $_bar
     */
    public function __construct($_foo, $_bar) {
        $this->_foo = $_foo;
        $this->_bar = $_bar;
    }

    /**
     * @return mixed
     */
    public function getFoo() {
        return $this->_foo;
    }

    /**
     * @param mixed $foo
     */
    public function setFoo($foo): void {
        $this->_foo = $foo;
    }

    /**
     * @return mixed
     */
    public function getBar() {
        return $this->_bar;
    }

    /**
     * @param mixed $bar
     */
    public function setBar($bar): void {
        $this->_bar = $bar;
    }

    /**
     * @return mixed
     */
    public function getFoobar() {
        return $this->_foobar;
    }

    /**
     * @param mixed $foobar
     */
    public function setFoobar($foobar): void {
        $this->_foobar = $foobar;
    }


}
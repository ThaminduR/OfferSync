<?php

class Session
{
    private $user;
    private $database;
    function __construct($user)
    {
        $this->user = $user;
        $this->database = $user->Get_Database();

        session_set_save_handler(
            array($this, "_open"),
            array($this, "_close"),
            array($this, "_read"),
            array($this, "_write"),
            array($this, "_destroy"),
            array($this, "_gc")
        );

        session_start();
    }

    public function _open()
    {
        if ($this->database) {
            return true;
        }
        return false;
    }

    public function _close()
    { }

    public function _read($id)
    {
        $result = $this->database->SearchSession($id);
        if ($result) {
            return $result['data'];
        }
        return "";
    }

    public function _write($id, $data)
    {
        $access = time();
        $result = $this->database->InsertSession($id, $data, $access);

        if ($result) {
            return true;
        }
        return false;
    }

    public function _destroy($id)
    {
        $result = $this->database->DestroySession($id);
        if ($result) {
            return true;
        }
        return false;
    }

    public function _gc($max)
    {
        $old = time() - $max;
        $result = $this->database->GarbageSession($old);
        if ($result) {
            return true;
        }
        return false;
    }
}

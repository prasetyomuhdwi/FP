<?php
session_start();

class Api extends Controller
{
    public function delete($table, $id)
    {
        var_dump($table);
        var_dump($id);
    }

    public function update($table, $id)
    {
        echo $table;
        echo $id;
    }

    public function insert($table)
    {
        echo $table;
    }
}

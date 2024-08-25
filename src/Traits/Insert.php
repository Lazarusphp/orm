<?php
namespace LazarusPhp\Orm\Traits;

trait Insert
{
    public function insert()
    {
        $this->newFlag("insert")
        $keys = implode(',',array_keys($this->param));
        $placeholders = ':' . implode(', :', array_keys($this->param));
        // $this->newFlags("insert");
        $this->sql .= "INSERT INTO " . $this->table ;
        $this->sql .= " ($keys) ";
        $this->sql .= "VALUES($placeholders)";
        return $this;
    }
}
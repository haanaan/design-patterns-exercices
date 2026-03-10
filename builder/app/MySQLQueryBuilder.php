<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface
{
    private string $table;
    private array $fields = [];
    private array $conditions = [];

    public function table(string $table): self
    {
        $this->table = $table;
        return $this;
    }

    public function select(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function where(string $field, string $operator, $value): self
    {
        $this->conditions[] = "$field $operator '$value'";
        return $this;
    }

    public function build(): string
    {
        $fields = implode(', ', $this->fields);
        $conditions = implode(' AND ', $this->conditions);
        return "SELECT $fields FROM {$this->table}" . ($conditions ? " WHERE $conditions" : "");
    }
}
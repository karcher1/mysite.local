<?php

namespace App\orm;

class Insert
{
    private string $table;
    private array $fields = [];
    private array $values = [];

    public function into(string $table): self
    {
        $this->table = $table;
        return $this;
    }

    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function values(array $values): self
    {
        $this->values = $values;
        return $this;
    }

    public function getQuery(): string
    {
        $fieldsString = implode(", ", $this->fields);
        $placeholders = array_map(fn($v) => '(' . implode(', ', array_fill(0, count($v), '?')) . ')', $this->values);
        $placeholdersString = implode(', ', $placeholders);

        return "INSERT INTO {$this->table} ({$fieldsString}) VALUES {$placeholdersString}";
    }

    public function execute(): void
    {
        $connection = Connector::getInstance()->getConnection();
        $stmt = $connection->prepare($this->getQuery());

        $params = array_merge(...$this->values);

        $stmt->execute($params);
    }
}

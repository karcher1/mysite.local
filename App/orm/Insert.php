<?php

namespace App\orm;

class Insert
{
    private string $table;
    private array $fields = [];
    private array $values = [];

    public function setTable(string $table): self
    {
        $this->table = $table;
        return $this;
    }

    public function setFields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function setValues(array $values): self
    {
        if ($this->isValidValues($values)) {
            $this->values = $values;
        } else {
            throw new \Exception('Keys in values arrays do not match fields');
        }
        return $this;
    }

    public function getQuery(): string
    {
        if (empty($this->table) || empty($this->fields) || empty($this->values)) {
            throw new \Exception('Table, fields, and values must be set before generating the query');
        }

        $fieldsString = implode(', ', $this->fields);
        $valuesString = $this->prepareValues();

        return "INSERT INTO {$this->table} ({$fieldsString}) VALUES {$valuesString};";
    }

    private function prepareValues(): string
    {
        $preparedValues = array_map(function ($valueSet) {
            $quotedValues = array_map(fn($value) => "'$value'", $valueSet);
            return '(' . implode(', ', $quotedValues) . ')';
        }, $this->values);

        return implode(', ', $preparedValues);
    }

    private function isValidValues(array $values): bool
    {
        if (!is_array($values) || empty($values)) {
            return false;
        }

        $fieldCount = count($this->fields);
        foreach ($values as $valueSet) {
            if (!is_array($valueSet) || count($valueSet) !== $fieldCount) {
                return false;
            }
        }

        return true;
    }
}

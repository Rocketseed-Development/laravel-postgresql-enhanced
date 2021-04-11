<?php

declare(strict_types=1);

namespace Tpetry\PostgresqlEnhanced\Schema;

use Illuminate\Database\Schema\ColumnDefinition;

trait BlueprintTypes
{
    /**
     * Create a new big integer range column on the table.
     */
    public function bigIntegerRange(string $column): ColumnDefinition
    {
        return $this->addColumn('bigIntegerRange', $column);
    }

    /**
     * Create a new fixed bit column on the table.
     */
    public function bit(string $column, int $length = 1): ColumnDefinition
    {
        return $this->addColumn('bit', $column, compact('length'));
    }

    /**
     * Create a new case insensitive text column on the table.
     */
    public function caseInsensitiveText(string $column): ColumnDefinition
    {
        return $this->addColumn('caseInsensitiveText', $column);
    }

    /**
     * Create a new date range column on the table.
     */
    public function dateRange(string $column): ColumnDefinition
    {
        return $this->addColumn('dateRange', $column);
    }

    /**
     * Create a new decimal range column on the table.
     */
    public function decimalRange(string $column): ColumnDefinition
    {
        return $this->addColumn('decimalRange', $column);
    }

    /**
     * Create a new integer range column on the table.
     */
    public function integerRange(string $column): ColumnDefinition
    {
        return $this->addColumn('integerRange', $column);
    }

    /**
     * Create a new ip network column on the table.
     */
    public function ipNetwork(string $column): ColumnDefinition
    {
        return $this->addColumn('ipNetwork', $column);
    }

    /**
     * Create a new case insensitive text column on the table.
     */
    public function labelTree(string $column): ColumnDefinition
    {
        return $this->addColumn('labelTree', $column);
    }

    /**
     * Create a new timestamp range column on the table.
     */
    public function timestampRange(string $column): ColumnDefinition
    {
        return $this->addColumn('timestampRange', $column);
    }

    /**
     * Create a new timestamp (with time zone) range column on the table.
     */
    public function timestampTzRange(string $column): ColumnDefinition
    {
        return $this->addColumn('timestampTzRange', $column);
    }

    /**
     * Create a new varying bit column on the table.
     */
    public function varbit(string $column, ?int $length = null): ColumnDefinition
    {
        return $this->addColumn('varbit', $column, compact('length'));
    }

    /**
     * Create a new xml column on the table.
     */
    public function xml(string $column): ColumnDefinition
    {
        return $this->addColumn('xml', $column);
    }
}
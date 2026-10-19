<?php

interface IStudentRepository
{
    public static function all(): array;

    public static function find(string $id): array;

    public static function update(array $student): array;

    public static function delete(string $id): void;

}

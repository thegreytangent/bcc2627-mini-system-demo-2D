<?php

interface IStudentRepository
{
    public function all(): array;
    
    public function find(string $id): array;
    
    public function update(array $student): array;
    
    public function delete(string $id): void;
    
}

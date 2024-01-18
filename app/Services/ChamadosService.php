<?php

namespace App\Services;

use App\DTO\CreateChamadosDTO;
use App\DTO\UpdateChamadosDTO;
use App\Repositories\ChamadosRepositoryInterface;
use stdClass;

class ChamadosService
{
    public function __construct(
        protected ChamadosRepositoryInterface $repository,
    )
    {}

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function getOne(string|int $id): stdClass|null
    {
        return $this->repository->getOne($id);
    }

    public function new(CreateChamadosDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }

    public function update(UpdateChamadosDTO $dto): stdClass|null
    {
        return $this->repository->update($dto);
    }

    public function delete(string|int $id): void
    {
        $this->repository->delete($id);
    }
}
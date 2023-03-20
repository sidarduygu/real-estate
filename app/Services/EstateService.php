<?php

namespace App\Services;

use App\Models\Estate;
use Illuminate\Support\Collection;
use App\Repositories\EstateRepository;

class EstateService implements BaseService
{   
    protected $estateRepository;

    public function __construct(EstateRepository $estateRepository)
    {
        $this->estateRepository = $estateRepository;
    }
    
    public function getAll(): Collection
    {
        return $this->estateRepository->getAll();
    }

    public function create(array $data): Estate
    {   
        $image = imageUpload($data['image'],'images/estate/');
        $data['image'] = $image;
        return $this->estateRepository->create($data);
    }

    public function update(array $attributes, array $data): bool
    {
        return $this->estateRepository->update($attributes, $data);
    }

    public function delete(int $id): bool
    {
        return $this->estateRepository->delete($id);
    }
}

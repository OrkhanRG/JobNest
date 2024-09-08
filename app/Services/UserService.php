<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class UserService
{

    private array $prepareData = [];

    public function __construct(public User $user)
    {
    }

    public function getUsers($conditions = [], int|null $pagination = null): Collection|LengthAwarePaginator
    {
        $user_query = $this->user->query()
            ->where(function ($query) use ($conditions) {
            if (count($conditions)){
                foreach ($conditions as $condition) {
                    $query->where($condition[0], $condition[2], $condition[1]);
                }
            }
        });

        if ($pagination) {
            return $user_query->paginate($pagination);
        }

        return $user_query->get();
    }

    public function getById(int $id): User|null
    {
        return $this->user->query()->find($id);
    }

    public function setUser(User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function setPrepareData(array $data): self
    {
        $this->prepareData = $data;
        return $this;
    }

    public function update(array|null $data = null): bool
    {
        if (is_null($data)) {
            $data = $this->prepareData;
        }

        return $this->user->update($data);
    }

    public function delete(): bool
    {
        return $this->user->delete();
    }
}

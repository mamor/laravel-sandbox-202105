<?php

namespace App\Http\Actions;

use App\Presenters\UserShowPresenter;
use App\Repositories\UserRepository;

final class UserShowAction
{
    public function __invoke(UserRepository $repository, int $id): array
    {
        return $repository->find($id); // DefaultPresenter will be used.
//        return $repository->setPresenter(UserShowPresenter::class)->find($id); // UserShowPresenter will be used.
    }
}

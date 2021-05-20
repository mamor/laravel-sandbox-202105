<?php

namespace App\Repositories;

use App\Presenters\DefaultPresenter;

abstract class BaseRepository extends \Prettus\Repository\Eloquent\BaseRepository
{
    public function presenter(): string
    {
        return DefaultPresenter::class;
    }
}

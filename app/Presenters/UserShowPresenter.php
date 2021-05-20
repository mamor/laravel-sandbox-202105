<?php

namespace App\Presenters;

use App\Transformers\UserShowTransformer;
use League\Fractal\TransformerAbstract;
use Prettus\Repository\Presenter\FractalPresenter;

final class UserShowPresenter extends FractalPresenter
{
    public function getTransformer(): TransformerAbstract
    {
        return new UserShowTransformer();
    }
}

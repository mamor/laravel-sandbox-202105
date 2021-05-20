<?php

namespace App\Presenters;

use App\Transformers\DefaultTransformer;
use League\Fractal\TransformerAbstract;
use Prettus\Repository\Presenter\FractalPresenter;

final class DefaultPresenter extends FractalPresenter
{
    public function getTransformer(): TransformerAbstract
    {
        return new DefaultTransformer();
    }
}

<?php

namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use League\Fractal\TransformerAbstract;

final class DefaultTransformer extends TransformerAbstract
{
    public function transform(Model $model): array
    {
        return $model->toArray();
    }
}

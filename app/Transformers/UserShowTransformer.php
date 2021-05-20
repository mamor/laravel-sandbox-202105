<?php

namespace App\Transformers;

use App\Models\User;
use League\Fractal\TransformerAbstract;

final class UserShowTransformer extends TransformerAbstract
{
    public function transform(User $model): array
    {
        return [
            'id' => $model->id,
        ];
    }
}

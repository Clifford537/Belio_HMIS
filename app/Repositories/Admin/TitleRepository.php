<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Title;
use App\Repositories\BaseRepository;

class TitleRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Title::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\Roomtype;
use App\Repositories\BaseRepository;

/**
 * Class RoomtypeRepository
 * @package App\Repositories
 * @version December 28, 2020, 10:50 am UTC
*/

class RoomtypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Roomtype::class;
    }
}

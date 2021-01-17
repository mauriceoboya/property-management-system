<?php

namespace App\Repositories;

use App\Models\Roomnumber;
use App\Repositories\BaseRepository;

/**
 * Class RoomnumberRepository
 * @package App\Repositories
 * @version January 9, 2021, 7:42 pm UTC
*/

class RoomnumberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'roomnumber',
        'roomtype_id'
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
        return Roomnumber::class;
    }
}

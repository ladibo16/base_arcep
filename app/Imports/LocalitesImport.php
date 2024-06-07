<?php

namespace App\Imports;

use App\Models\Localite;
use Maatwebsite\Excel\Concerns\ToModel;

class LocalitesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Localite([
            'arrondissement'=> $row[0],
            'commune'=> $row[1], 
            'departement'=> $row[2],
            'quartier'=> $row[3], 
        ]);
    }
}

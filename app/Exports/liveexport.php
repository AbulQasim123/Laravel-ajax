<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class liveexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return [
            'Id',
            'FirstName',
            'LastName',
        ];
    }
    public function collection()
    {
        return DB::table('livetable')->get();
    }
}

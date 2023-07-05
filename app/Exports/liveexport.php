<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class liveexport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
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

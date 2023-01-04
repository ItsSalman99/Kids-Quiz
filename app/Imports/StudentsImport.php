<?php

namespace App\Imports;

use App\Models\Batch;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //return $row;
        foreach($row as $rows)
        {
            print_r($rows);
        }
    //  $count= count($row);
    //  echo $count;
    //   die();
        //  $batch= Batch::where('batch_timings','=',$row['email'])->first();
        // return new User([
        //     'name'  => $row[1],
        //     'email' => $row[2],
        //     // 'batch_id' => $row[9],
        // ]);
    }
}

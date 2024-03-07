<?php

namespace App\Imports;

use App\Models\Administration;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


// class UsersImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    // public function collection(Collection $rows)
    // {
    //     foreach ($rows as $row)
    //     {
    //         // $customer = Customer::where('email', $row['email'])->first();
    //         if($customer){

    //             $customer->update([
    //                 'name' => $row['name'],
    //                 'phone' => $row['phone'],
    //             ]);

    //         }else{

    //             Customer::create([
    //                 'name' => $row['name'],
    //                 'email' => $row['email'],
    //                 'phone' => $row['phone'],
    //             ]);
    //         }

    //     }
    // }
}

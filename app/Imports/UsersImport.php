<?php

namespace App\Imports;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
class UsersImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $importedData = [];

    public function collection(Collection $rows)
    {
        foreach ($rows->slice(1) as $row) {
        $dataToInsert = [];

            $this->importedData[] = [
                'full_name' => $row[1],
                'email' => $row[4],
                // 'password' => Hash::make(),
                'phone' =>$row[5],
                'department' => $row[3],
                'designation' => $row[2],
            ];
            $dataToInsert[] = [
                'full_name' => $row[1],
                'email' => $row[4],
                // 'password' => Hash::make(),
                'phone' =>$row[5],
                'department' => $row[3],
                'designation' => $row[2],
            ];
            User::insert($dataToInsert);
        }
    }
    public function getImportedData()
    {
        return $this->importedData;
    }
   
}
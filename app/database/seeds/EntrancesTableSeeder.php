<?php

//require_once __DIR__."/LKD_export_zp.csv";

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = $this->getCSV(__DIR__."/LKD_export_zp.csv", 17);

        foreach ($data as $row) {

            if ($row['СТАТУС ЛКД'] === 'эксплуатация') {
                $status = 'maintenance';
            } else {
                $status = 'none';
            }

            $floors = 0;
            if ($row['Количество этажей ЛКД']<> '') {
                $floors = $row['Количество этажей ЛКД'];
            }

            $number = 0;
            if ($row['Подъезд(ЛКД)'] <> '') {
                $number = $row['Подъезд(ЛКД)'];
            }

            DB::table('entrances')->insert([
                'id' => $row['ID Подъезда'],
                'number' => $number,
                'house_id' => $row['ID Дома'],
                'floors_numb' => $floors,
                'lkd_status' => $status,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }


    public function getCSV($objectpath, $numfields)
    {
        $header = NULL;
        $data = array();
        $handle = fopen($objectpath, 'r');
        while ($row = fgetcsv($handle, 0, ';')) {
            $tmp = array();
            $cnt = 0;
            foreach ($row as $val) {
                $tmp[] = iconv('cp1251', 'utf-8', $val);
                $cnt++;
            }
            if (!$header) {
                $header = $tmp;
            } else {
                if ($numfields > $cnt) {
                    for (; $cnt < $numfields; $cnt++) {
                        array_push($tmp, '');
                    }
                }
                $data[] = array_combine($header, $tmp);
                /*echo "<pre>";
                print_r($header);
                print_r($tmp);
                echo "</pre>";*/
            }
        }
        fclose($handle);

        return $data;
    }

}
<?php

use App\Models\Town;
use Illuminate\Database\Seeder;


class TownsTableSeeders extends Seeder
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
            Town::firstOrCreate(['name' => $row['Город ЛКД']]);
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

<?php

use App\Models\Street;
use App\Models\Town;
use Illuminate\Database\Seeder;

class StreetsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->getCSV(__DIR__."/LKD_export_zp.csv", 17);

        foreach ($data as $row)
        {
            $cut_town = rtrim(substr($row['Город ЛКД'], 0, strpos($row['Город ЛКД'], "м.")));
            $tn_id = Town::where('name', '=', $cut_town)->firstOrFail()->id;
            $str = Street::firstOrNew(['name' => $row['Улица ЛКД'], 'town_id' => $tn_id]);
            $str->name = $row['Улица ЛКД'];
            $str->town_id = $tn_id;
            $str->save();
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

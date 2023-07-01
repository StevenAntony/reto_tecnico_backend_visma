<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = '[{"di_nombre":"Marketing","di_embajador":"Cordula Woolley"},
        {"di_nombre":"Legal","di_embajador":"Zorine Sayward"},
        {"di_nombre":"Human Resources","di_embajador":null},
        {"di_nombre":"Sales","di_embajador":"Rodolph Scolding"},
        {"di_nombre":"Accounting","di_embajador":"Christoffer Coulter"},
        {"di_nombre":"Accounting","di_embajador":"Tonnie Scandrett"},
        {"di_nombre":"Services","di_embajador":null},
        {"di_nombre":"Sales","di_embajador":"Sheena Moylan"},
        {"di_nombre":"Legal","di_embajador":"Phineas Rangall"},
        {"di_nombre":"Services","di_embajador":"Aretha Cannop"},
        {"di_nombre":"Training","di_embajador":"Coral Regnard"},
        {"di_nombre":"Research and Development","di_embajador":"Tobias Doull"},
        {"di_nombre":"Engineering","di_embajador":"Ken Rihosek"},
        {"di_nombre":"Human Resources","di_embajador":"Harmon O Flynn"},
        {"di_nombre":"Legal","di_embajador":"Cherin Whelan"},
        {"di_nombre":"Training","di_embajador":"Phillipe Eilles"},
        {"di_nombre":"Marketing","di_embajador":"Alexandros Trench"},
        {"di_nombre":"Legal","di_embajador":"Dulcea Bonanno"},
        {"di_nombre":"Research and Development","di_embajador":"Agneta Lynam"},
        {"di_nombre":"Services","di_embajador":"Clay Skilling"},
        {"di_nombre":"Research and Development","di_embajador":null},
        {"di_nombre":"Engineering","di_embajador":"Corrine McAw"},
        {"di_nombre":"Research and Development","di_embajador":"Feliza Bedo"},
        {"di_nombre":"Legal","di_embajador":"Kennedy Earngy"},
        {"di_nombre":"Marketing","di_embajador":"Jennifer Riquet"},
        {"di_nombre":"Accounting","di_embajador":"Margarete Tute"},
        {"di_nombre":"Product Management","di_embajador":"Omar Cecchetelli"},
        {"di_nombre":"Human Resources","di_embajador":"Alexei Tolworthy"},
        {"di_nombre":"Legal","di_embajador":"Lalo Hutt"},
        {"di_nombre":"Training","di_embajador":"Cassey Oda"},
        {"di_nombre":"Engineering","di_embajador":"Linn Mack"},
        {"di_nombre":"Services","di_embajador":"Winni Mobberley"},
        {"di_nombre":"Engineering","di_embajador":"Florencia Wallentin"},
        {"di_nombre":"Marketing","di_embajador":"Mandy Frarey"},
        {"di_nombre":"Services","di_embajador":"Ryann Cleall"},
        {"di_nombre":"Accounting","di_embajador":"Dari Ruckhard"},
        {"di_nombre":"Legal","di_embajador":"Yasmeen Gabbotts"},
        {"di_nombre":"Research and Development","di_embajador":"Danit Valois"},
        {"di_nombre":"Research and Development","di_embajador":"Gar Hathwood"},
        {"di_nombre":"Training","di_embajador":"Jehu Kroin"},
        {"di_nombre":"Marketing","di_embajador":"Peyton Middlewick"},
        {"di_nombre":"Sales","di_embajador":null},
        {"di_nombre":"Training","di_embajador":"Anallese Tarn"},
        {"di_nombre":"Research and Development","di_embajador":"Alejandro Pensom"},
        {"di_nombre":"Legal","di_embajador":"Illa Pounsett"},
        {"di_nombre":"Legal","di_embajador":"Horten Howison"},
        {"di_nombre":"Marketing","di_embajador":"Dorry Kittman"},
        {"di_nombre":"Support","di_embajador":null},
        {"di_nombre":"Legal","di_embajador":"Opal Codner"},
        {"di_nombre":"Training","di_embajador":"Hunter Androlli"},
        {"di_nombre":"Engineering","di_embajador":"Genovera Lyngsted"},
        {"di_nombre":"Marketing","di_embajador":"Fina Rawlison"},
        {"di_nombre":"Business Development","di_embajador":"Krista Baudacci"},
        {"di_nombre":"Training","di_embajador":"Ly Paddle"},
        {"di_nombre":"Product Management","di_embajador":"Tiffy Kilcullen"},
        {"di_nombre":"Research and Development","di_embajador":"Marsha Gotthard"},
        {"di_nombre":"Training","di_embajador":"Winona Rohlfs"},
        {"di_nombre":"Services","di_embajador":"Hedvig Ralphs"},
        {"di_nombre":"Research and Development","di_embajador":"Wallas Bonhill"},
        {"di_nombre":"Marketing","di_embajador":"Meta Macveigh"},
        {"di_nombre":"Legal","di_embajador":"Geraldine Lowdeane"},
        {"di_nombre":"Engineering","di_embajador":"Hamlen Coy"},
        {"di_nombre":"Support","di_embajador":"Coleman Rawood"},
        {"di_nombre":"Training","di_embajador":"Maible Nisot"},
        {"di_nombre":"Accounting","di_embajador":"Charyl Sends"},
        {"di_nombre":"Research and Development","di_embajador":"Ozzy Guisot"},
        {"di_nombre":"Business Development","di_embajador":"Dareen Duchateau"},
        {"di_nombre":"Engineering","di_embajador":null},
        {"di_nombre":"Human Resources","di_embajador":"Sid Dacre"},
        {"di_nombre":"Marketing","di_embajador":"Mirabelle Moreno"},
        {"di_nombre":"Business Development","di_embajador":"Rena Prestedge"},
        {"di_nombre":"Legal","di_embajador":"Annice Heskin"},
        {"di_nombre":"Engineering","di_embajador":"Alf Chapman"},
        {"di_nombre":"Support","di_embajador":"Ramsay Bence"},
        {"di_nombre":"Support","di_embajador":"Marylinda Styan"},
        {"di_nombre":"Research and Development","di_embajador":"Halette Ellingsworth"},
        {"di_nombre":"Sales","di_embajador":"Kennith Chidler"},
        {"di_nombre":"Legal","di_embajador":"Loleta Stackbridge"},
        {"di_nombre":"Engineering","di_embajador":"Jannel Beddard"},
        {"di_nombre":"Support","di_embajador":"Colleen Ricks"},
        {"di_nombre":"Business Development","di_embajador":"Jim Arends"},
        {"di_nombre":"Business Development","di_embajador":null},
        {"di_nombre":"Support","di_embajador":"Reese Brelsford"},
        {"di_nombre":"Accounting","di_embajador":"Augusta Falco"},
        {"di_nombre":"Training","di_embajador":"Bone Stenning"},
        {"di_nombre":"Engineering","di_embajador":"Johnath Bennie"},
        {"di_nombre":"Sales","di_embajador":"Alvie Thebe"},
        {"di_nombre":"Legal","di_embajador":"Belle Krugmann"},
        {"di_nombre":"Legal","di_embajador":"My Yanuk"},
        {"di_nombre":"Research and Development","di_embajador":"Haleigh Maulin"},
        {"di_nombre":"Human Resources","di_embajador":"Lynnet Maskell"},
        {"di_nombre":"Engineering","di_embajador":"Linn Nani"},
        {"di_nombre":"Support","di_embajador":null},
        {"di_nombre":"Support","di_embajador":"Fanechka Isack"},
        {"di_nombre":"Training","di_embajador":"Cazzie Gateland"},
        {"di_nombre":"Human Resources","di_embajador":"Torrey Janoch"},
        {"di_nombre":"Sales","di_embajador":"Grange Feben"},
        {"di_nombre":"Support","di_embajador":"Randy Spearett"},
        {"di_nombre":"Product Management","di_embajador":"Kathrine McNeely"},
        {"di_nombre":"Product Management","di_embajador":null}]';
        $data = json_decode($json);

        foreach ($data as $key => $value) {
            try {
                $random = random_int(0,20);
                DB::table('division')->insert([
                    'di_nombre' => Str::random(3).'_'.$value->di_nombre,
                    'ds_id' => $random == 0 ? null : $random,
                    'di_colaborador'=> random_int(0,100),
                    'di_embajador' =>empty($value->di_embajador) ? '--' : $value->di_embajador,
                    'di_nivel' => random_int(1,20)
                ]);
            } catch (\Throwable $th) {
            }
        }
    }
}

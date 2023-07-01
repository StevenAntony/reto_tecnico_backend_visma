<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSuperiorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = '[{"ds_nombre":"BLDRS Developed Markets 100 ADR Index Fund"},
        {"ds_nombre":"Industrias Bachoco, S.A. de C.V."},
        {"ds_nombre":"Cowen Inc."},
        {"ds_nombre":"Entravision Communications Corporation"},
        {"ds_nombre":"Wins Finance Holdings Inc."},
        {"ds_nombre":"Fauquier Bankshares, Inc."},
        {"ds_nombre":"1347 Property Insurance Holdings, Inc."},
        {"ds_nombre":"STARWOOD PROPERTY TRUST, INC."},
        {"ds_nombre":"Fibrocell Science Inc"},
        {"ds_nombre":"Great Southern Bancorp, Inc."},
        {"ds_nombre":"NetScout Systems, Inc."},
        {"ds_nombre":"Dolby Laboratories"},
        {"ds_nombre":"Cumberland Pharmaceuticals Inc."},
        {"ds_nombre":"Canadian Imperial Bank of Commerce"},
        {"ds_nombre":"Nuveen Quality Municipal Income Fund"},
        {"ds_nombre":"Asia Pacific Fund, Inc. (The)"},
        {"ds_nombre":"Wayside Technology Group, Inc."},
        {"ds_nombre":"Mammoth Energy Services, Inc."},
        {"ds_nombre":"Reis, Inc"},
        {"ds_nombre":"Nuveen Select Tax Free Income Portfolio III"}]';
        $data = json_decode($json);

        foreach ($data as $key => $value) {
            DB::table('division_superior')->insert([
                'ds_nombre' => $value->ds_nombre,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = '[{"sd_nombre":"Senior Developer"},
        {"sd_nombre":"Compensation Analyst"},
        {"sd_nombre":"Administrative Officer"},
        {"sd_nombre":"Automation Specialist III"},
        {"sd_nombre":"Assistant Manager"},
        {"sd_nombre":"Teacher"},
        {"sd_nombre":"Desktop Support Technician"},
        {"sd_nombre":"Financial Advisor"},
        {"sd_nombre":"Database Administrator IV"},
        {"sd_nombre":"Marketing Assistant"},
        {"sd_nombre":"Senior Developer"},
        {"sd_nombre":"Safety Technician I"},
        {"sd_nombre":"Nurse Practicioner"},
        {"sd_nombre":"VP Sales"},
        {"sd_nombre":"Electrical Engineer"},
        {"sd_nombre":"VP Quality Control"},
        {"sd_nombre":"Operator"},
        {"sd_nombre":"Human Resources Assistant II"},
        {"sd_nombre":"Librarian"},
        {"sd_nombre":"Quality Engineer"},
        {"sd_nombre":"Physical Therapy Assistant"},
        {"sd_nombre":"Teacher"},
        {"sd_nombre":"Automation Specialist II"},
        {"sd_nombre":"VP Marketing"},
        {"sd_nombre":"Occupational Therapist"},
        {"sd_nombre":"Pharmacist"},
        {"sd_nombre":"Budget/Accounting Analyst I"},
        {"sd_nombre":"Compensation Analyst"},
        {"sd_nombre":"Internal Auditor"},
        {"sd_nombre":"Physical Therapy Assistant"},
        {"sd_nombre":"Physical Therapy Assistant"},
        {"sd_nombre":"Librarian"},
        {"sd_nombre":"Dental Hygienist"},
        {"sd_nombre":"Administrative Assistant I"},
        {"sd_nombre":"Registered Nurse"},
        {"sd_nombre":"Senior Financial Analyst"},
        {"sd_nombre":"Software Test Engineer IV"},
        {"sd_nombre":"Speech Pathologist"},
        {"sd_nombre":"Operator"},
        {"sd_nombre":"Community Outreach Specialist"},
        {"sd_nombre":"Account Representative I"},
        {"sd_nombre":"VP Accounting"},
        {"sd_nombre":"Account Representative II"},
        {"sd_nombre":"Clinical Specialist"},
        {"sd_nombre":"Nurse Practicioner"},
        {"sd_nombre":"Cost Accountant"},
        {"sd_nombre":"Pharmacist"},
        {"sd_nombre":"Tax Accountant"},
        {"sd_nombre":"Operator"},
        {"sd_nombre":"Structural Engineer"},
        {"sd_nombre":"Clinical Specialist"},
        {"sd_nombre":"Staff Accountant II"},
        {"sd_nombre":"Physical Therapy Assistant"},
        {"sd_nombre":"Senior Cost Accountant"},
        {"sd_nombre":"Programmer II"},
        {"sd_nombre":"Graphic Designer"},
        {"sd_nombre":"Design Engineer"},
        {"sd_nombre":"Business Systems Development Analyst"},
        {"sd_nombre":"Computer Systems Analyst IV"},
        {"sd_nombre":"Associate Professor"},
        {"sd_nombre":"Geologist I"},
        {"sd_nombre":"Analyst Programmer"},
        {"sd_nombre":"Account Executive"},
        {"sd_nombre":"Director of Sales"},
        {"sd_nombre":"Geological Engineer"},
        {"sd_nombre":"Payment Adjustment Coordinator"},
        {"sd_nombre":"Nuclear Power Engineer"},
        {"sd_nombre":"Structural Analysis Engineer"},
        {"sd_nombre":"Social Worker"},
        {"sd_nombre":"Project Manager"},
        {"sd_nombre":"Analog Circuit Design manager"},
        {"sd_nombre":"Registered Nurse"},
        {"sd_nombre":"Payment Adjustment Coordinator"},
        {"sd_nombre":"Civil Engineer"},
        {"sd_nombre":"Payment Adjustment Coordinator"},
        {"sd_nombre":"Account Coordinator"},
        {"sd_nombre":"Operator"},
        {"sd_nombre":"Compensation Analyst"},
        {"sd_nombre":"Health Coach III"},
        {"sd_nombre":"Desktop Support Technician"},
        {"sd_nombre":"Teacher"},
        {"sd_nombre":"Senior Developer"},
        {"sd_nombre":"Operator"},
        {"sd_nombre":"Programmer III"},
        {"sd_nombre":"Internal Auditor"},
        {"sd_nombre":"Media Manager III"},
        {"sd_nombre":"Pharmacist"},
        {"sd_nombre":"Programmer III"},
        {"sd_nombre":"Operator"},
        {"sd_nombre":"Structural Engineer"},
        {"sd_nombre":"Biostatistician IV"},
        {"sd_nombre":"Environmental Specialist"},
        {"sd_nombre":"Structural Analysis Engineer"},
        {"sd_nombre":"Teacher"},
        {"sd_nombre":"Professor"},
        {"sd_nombre":"Sales Associate"},
        {"sd_nombre":"Accountant I"},
        {"sd_nombre":"Web Developer I"},
        {"sd_nombre":"Software Consultant"},
        {"sd_nombre":"Teacher"}]';
        $data = json_decode($json);

        foreach ($data as $key => $value) {
            try {
                DB::table('subdivision')->insert([
                    'sd_nombre' => $value->sd_nombre,
                    'di_id' => random_int(1,100)
                ]);
            } catch (\Throwable $th) {
            }
        }
    }
}

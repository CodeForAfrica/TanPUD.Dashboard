<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'entry_type', 'firstname', 'middlename', 'surname', 'birth_date', 
        'birth_place', 'gender', 'registration_number', 'maskani',
        'region', 'district', 'ward', 'street', 'drug_type', 'drug_type_other',
        'drug_use', 'overdose', 'overdose_date', 'hiv_test', 'hiv_test_date',
        'hiv_test_results', 'tb_test', 'tb_test_date', 'tb__test_results',
        'hpv_test', 'hpv_test_date', 'hpv_test_results', 'mental_health_test',
        'mental_health_test_date', 'mental_health_test_results', 'services'
    ];
}

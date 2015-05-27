<?php

namespace App;


/**
 * Coutries: Model holding all the countries that are included in the EMS Services
 *
 * @author Slevian Global Limited
 */
class Countries {
    
    
    public static function get_all_countries(){
        return DB::table('countries')->orderBy('country', 'desc')->get();
    }
    
    public static function get_zone_by_country($country){
        return DB::table('countries')->where('country', $country)->pluck('zone');
    }
    
    
}

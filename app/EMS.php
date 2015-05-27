<?php

namespace App;
use DB;

/**
 * EMS: Handles rate and computation retrieval and processing
 *
 * @author Slevian Global Limited
 * @website http://www.slevian.com
 */

class EMS 
{
    
    
    private $excess;
    private $zone;
    
    
    public function __construct() 
    {
        $this->excess = 0.0;
        $this->zone = '';
    }
    
    
    #  ----------------------------- 
    #  EMS Internatioal rate
    #  -----------------------------
    public static function get_international_ems_cost($weight, $zone)
    {
        if($weight <= 31.5){
            return DB::table('ems_international_rates')->where('weight', $weight)->pluck("zone{$zone}");
        } else if($weight > 31.5 && $weight <= 100) {
            $ceiling_cost = DB::table('ems_international_rates')->where('weight', 31.5)->pluck("zone{$zone}");
            $excess_weight = $weight - 31.5;
            $excess_cost_rate_per_kg = EMS::get_excess_unit_rate_per_zone($zone);
            $total_excess_cost = $excess_cost_rate_per_kg * $excess_weight;
            return $ceiling_cost + $total_excess_cost;
        } else {
            #Error flag denoting alternative does not exist
            return -1; 
            # NOTE: Shipments above 100kgs will be quoted on shipment by shipment basis 
            # due to the unpredictable line haul and operational as instructed by Posta terms of refference
            # costs for heavy weight shipments
        }
    }
    
    
    # NB :- It is assumed that the Primary key remains unchanges if the steps remain the same 
    # Currently set at (65) holding the additional costs  
    public static function get_excess_unit_rate_per_zone($zone)
    {
        return DB::table('ems_international_rates')->where('id', 65)->pluck("zone{$zone}");
    }
    
    
    # ----------------------------------------------
    # BAHASHA KASHA
    # -----------------------------------------------
    # Assumption: weight remains constant(280gms)
    public static function get_bahasha_kasha_cost($destination)
    {
        $this->zone = EMS::get_local_zone_by_destination($destination);
        return DB::table('ems_local_rates')->where('ems_package_id', 1)->where('zone', $this->zone)->pluck('cost');
    }
    
    
    # ----------------------------------------------
    # EMS OVERNIGHT
    # -----------------------------------------------
    public static function EMS_overnight_cost($destination, $weight)
    {
        $this->zone = EMS::get_local_zone_by_destination($destination);
        $ceiling_cost = DB::table('ems_local_rates')->where('ems_package_id', 2)->where('zone', $this->zone)->pluck('cost');
        
        if($weight <= 5.0){
            return  $ceiling_cost;
        } else if($weight >= 5.0 && $weight <= 50.0){
            if($this->zone === 'A' || $this->zone === 'B' || $this->zone === 'C'){
                $this->excess = ($weight - 5.0) * 30.0; 
            }
            if($this->zone === 'E' || $this->zone === 'F'){
                $this->excess = ($weight - 5.0) * 35.0; 
            }
            return $ceiling_cost + $this->excess;
        } else {
            return -1; #Capture a none applicable scenario
        }
    }
    
    
    # ----------------------------------------------
    # EMS BAG RATE OVERNIGHT
    # -----------------------------------------------
    public static function EMS_bag_rate_overnight_cost($destination, $weight)
    {
        $this->zone = EMS::get_local_zone_by_destination($destination);
        $ceiling_cost = DB::table('ems_local_rates')->where('ems_package_id', 3)->where('zone', $this->zone)->pluck('cost');
        
        if($weight <= 5.0){
            return  $ceiling_cost;
        } else if($weight >= 5.0 && $weight <= 50.0){
            if($this->zone === 'A' || $this->zone === 'B' || $this->zone === 'C'){
                $this->excess = ($weight - 5.0) * 50.0; 
            }
            if($this->zone === 'E' || $this->zone === 'F'){
                $this->excess = ($weight - 5.0) * 55.0; 
            }
            return $ceiling_cost + $this->excess;
        } else {
            return -1; #Capture a none applicable scenario
        }
    }
    
    
    public static function get_local_zone_by_destination($destination){
        return DB::table('ems_domestic_zones')->where('destination', $destination)->pluck('zone');
    }
    
}
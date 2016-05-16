<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
use App\Phone;
use Session;
use Excel;

class PhoneController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *
     */
    public function export()
    {
        $rqst = Session::get('filters');
        if(!empty($rqst)){
            $state=$rqst['st'];
            $city=$rqst['ct'];
            $gender=$rqst['gender'];
            $phones = Phone::searchState($state)->searchCity($city)->searchGender($gender)
                ->get();
        }
        else {
            $phones = Phone::all();
        }
        Excel::create('export', function($excel)use($phones){
            $excel->sheet('Phone List', function($sheet) use($phones) {
                $sheet->fromModel($phones);
            });
        })->download('xlsx');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rqst = Request::all();
        if(!empty($rqst)){
            $state=$rqst['st'];
            $city=$rqst['ct'];
            $gender=$rqst['gender'];
            $phones = Phone::searchState($state)->searchCity($city)->searchGender($gender)
            ->get();
        }
        else {
            $phones = Phone::all();
        }
        $count=count($phones);
        $filterValues = ['z4', 'dpc', 'fips_cty', 'addr_typ', 'cbsa', 'dma_suppr', 'cra', 'z4_typ', 'dsf_ind' ,'dpd_ind', 'phone_flag','phone','time_zn', 'ing_hh_rank','how_ownr_src','dob_yr','dob_mon','dob_day','exatc_age','age','hh_income','net_worth','credit_lines', 'credit_range_new','educ','occ_occup', 'occ_occup', 'occ_occup_det','occ_busn_ownr','num_kids', 'pres_kids', 'hh_marital_stat', 'home_ownr', 'lor','dwell_typ', 'num_adults', 'hh_size', 'gens', 'cc_user', 'invest_act', 'invest_pers', 'invest_rl_est', 'invest_stocks', 'invest_read_fin_news', 'invest_money_seekr', 'int_grp_invest', 'invest_foreign', 'invest_est_prop_own', 'int_grp_donor', 'donr_mail_ord', 'donr_charitable', 'donr_animal', 'donr_arts', 'donr_kids', 'donr_wildlife', 'donr_environ', 'donr_health', 'donr_intl_aid', 'donr_pol', 'donr_pol_cons', 'donr_pol_lib', 'donr_relig', 'donr_vets', 'donr_oth', 'donr_comm_char', 'vet_in_hh','buy_gardening', 'buy_home_gard', 'int_trav_casino', 'int_hob_sweeps', 'int_trav_genl', 'life_home', 'life_diy', 'buy_auto_parts', 'ethnic_code', 'ethnic_conf', 'ethnic_grp', 'ethnic_lang', 'ethnic_relig', 'ethnic_hisp_cntry', 'ethnic_assim', 'credit_rating','dnc_flag', 'prop_type'];
        $forjson = [];
        foreach ($phones as $phone){
            $forjson[] = $phone->replicate($filterValues);
        }
        $json = json_encode($forjson); 
        Request::flash();
        Session::put('filters', $rqst);
        return view('phones.index', compact('phones','count','json'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}

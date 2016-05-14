<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fn')->nullable(); 
            $table->string('mi')->nullable();
            $table->string('ln')->nullable();
            $table->string('name_pre')->nullable();
            $table->string('addr')->nullable();
            $table->string('apt')->nullable();
            $table->string('city')->nullable();
            $table->string('st')->nullable();
            $table->string('zip')->nullable();
            $table->integer('z4')->nullable(); 
            $table->integer('dpc')->nullable();
            $table->integer('fips_cty')->nullable(); 
            $table->decimal('latitude', 10, 7)->nullable(); 
            $table->decimal('longitude', 10, 7)->nullable(); 
            $table->integer('addr_typ')->nullable(); 
            $table->integer('cbsa')->nullable(); 
            $table->integer('addr_line')->nullable(); 
            $table->string('dma_suppr')->nullable(); 
            $table->integer('cra')->nullable(); 
            $table->string('z4_typ')->nullable(); 
            $table->integer('dsf_ind')->nullable(); 
            $table->string('dpd_ind')->nullable(); 
            $table->string('phone_flag')->nullable(); 
            $table->string('phone')->nullable(); 
            $table->string('time_zn')->nullable(); 
            $table->string('gender')->nullable(); 
            $table->integer('inf_hh_rank')->nullable(); 
            $table->string('home_ownr_src')->nullable(); 
            $table->integer('dob_yr')->nullable();
            $table->integer('dob_mon')->nullable(); 
            $table->integer('dob_day')->nullable(); 
            $table->integer('exact_age')->nullable(); 
            $table->integer('age')->nullable(); 
            $table->string('hh_income')->nullable(); 
            $table->string('net_worth')->nullable(); 
            $table->integer('credit_lines')->nullable(); 
            $table->string('credit_range_new')->nullable();
            $table->string('educ')->nullable(); 
            $table->string('occ_occup')->nullable(); 
            $table->string('occ_occup_det')->nullable(); 
            $table->string('occ_busn_ownr')->nullable(); 
            $table->integer('num_kids')->nullable(); 
            $table->string('pres_kids')->nullable(); 
            $table->string('hh_marital_stat')->nullable();
            $table->string('home_ownr')->nullable(); 
            $table->integer('lor')->nullable(); 
            $table->string('dwell_typ')->nullable(); 
            $table->integer('num_adults')->nullable(); 
            $table->integer('hh_size')->nullable(); 
            $table->integer('gens')->nullable();
            $table->string('cc_user')->nullable(); 
            $table->string('invest_act')->nullable(); 
            $table->string('invest_pers')->nullable(); 
            $table->string('invest_rl_est')->nullable(); 
            $table->string('invest_stocks')->nullable(); 
            $table->string('invest_read_fin_news')->nullable(); 
            $table->string('invest_money_seekr')->nullable(); 
            $table->string('int_grp_invest')->nullable(); 
            $table->string('invest_foreign')->nullable(); 
            $table->string('invest_est_prop_own')->nullable(); 
            $table->string('int_grp_donor')->nullable(); 
            $table->string('donr_mail_ord')->nullable(); 
            $table->string('donr_charitable')->nullable(); 
            $table->string('donr_animal')->nullable(); 
            $table->string('donr_arts')->nullable(); 
            $table->string('donr_kids')->nullable();
            $table->string('donr_wildlife')->nullable(); 
            $table->string('donr_environ')->nullable(); 
            $table->string('donr_health')->nullable(); 
            $table->string('donr_intl_aid')->nullable(); 
            $table->string('donr_pol')->nullable(); 
            $table->string('donr_pol_cons')->nullable(); 
            $table->string('donr_pol_lib')->nullable(); 
            $table->string('donr_relig')->nullable(); 
            $table->string('donr_vets')->nullable(); 
            $table->string('donr_oth')->nullable(); 
            $table->string('donr_comm_char')->nullable(); 
            $table->string('vet_in_hh')->nullable(); 
            $table->string('buy_gardening')->nullable(); 
            $table->string('buy_home_gard')->nullable(); 
            $table->string('int_trav_casino')->nullable(); 
            $table->string('int_hob_sweeps')->nullable(); 
            $table->string('int_trav_genl')->nullable();
            $table->string('life_home')->nullable(); 
            $table->string('life_diy')->nullable(); 
            $table->string('buy_auto_parts')->nullable(); 
            $table->string('ethnic_code')->nullable(); 
            $table->string('ethnic_conf')->nullable(); 
            $table->string('ethnic_grp')->nullable(); 
            $table->string('ethnic_lang')->nullable(); 
            $table->string('ethnic_relig')->nullable(); 
            $table->string('ethnic_hisp_cntry')->nullable(); 
            $table->string('ethnic_assim')->nullable(); 
            $table->string('credit_rating')->nullable(); 
            $table->string('dnc_flag')->nullable(); 
            $table->string('prop_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('phones');
    }
}

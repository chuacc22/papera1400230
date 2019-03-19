<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Party;
use App\Candidate;

class Init_Data extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init tables with data';

    private $parties_data =[
        [
            'name'=>'Parti Ayam',
            'created_at'=>'1976-08-19 11:20:12',
            'updated_at'=>'1976-08-19 11:20:12'
        ],
        [
            'name'=>'Parti Itik',
            'created_at'=>'1977-07-15 15:30:26',
            'updated_at'=>'1999-12-31 11:22:42'
        ],
        [
            'name'=>'Parti Kucing',
            'created_at'=>'1986-06-20 11:30:55',
            'updated_at'=>'1986-06-20 11:30:55'
        ]
    ];

    private $candidates_data=[
        [
            'name'=>'Abu Bakar Muhammad',
            'party_id'=>'3',
            'created_at'=>'2018-04-21 09:45:01',
            'updated_at'=>'2018-04-21 09:45:01'
        ],
        [
            'name'=>'Ng Pei Li',
            'party_id'=>'3',
            'created_at'=>'2018-04-21 09:48:03',
            'updated_at'=>'2018-04-21 09:48:03'
        ],
        [
            'name'=>'Ranjit Singh Deo',
            'party_id'=>'3',
            'created_at'=>'2018-04-21 09:58:02',
            'updated_at'=>'2018-04-21 09:58:02'
        ],
        [
            'name'=>'Foo Yoke Wai',
            'party_id'=>'1',
            'created_at'=>'2018-04-21 09:58:11',
            'updated_at'=>'2018-04-21 09:58:11'
        ],
        [
            'name'=>'Chia Kim Hooi',
            'party_id'=>'2',
            'created_at'=>'2018-04-21 09:59:13',
            'updated_at'=>'2018-04-21 09:59:13'
        ]
    ];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        foreach($this->parties_data as $party_data){
            $party = new Party;
            $party->name = $party_data['name'];
            $party->created_at = $party_data['created_at'];
            $party->updated_at = $party_data['updated_at'];
            $party->save();

            echo "Party $party->name created successfully\n";
        }

        foreach($this->candidates_data as $candidate_data){
            $candidate = new Candidate;
            $candidate->name = $candidate_data['name'];
            $candidate->party_id = $candidate_data['party_id'];
            $candidate->created_at = $candidate_data['created_at'];
            $candidate->updated_at = $candidate_data['updated_at'];
            $candidate->save();

            echo "Party $candidate->name created successfully\n";
        }
    }
}

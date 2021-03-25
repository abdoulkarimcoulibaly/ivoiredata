<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function getDemography()
    {

        $client = new Client();
        $i = 0;

        $url = 'https://www.worldometers.info/world-population/cote-d-ivoire-population/';
        $page = $client->request('GET', $url);

        $contentInner = $page->filter('.content-inner');
        $tableResponsive = $contentInner->filter('.table-responsive');
        $tableList = $tableResponsive->filter('tbody');
        //dd($tableList->html());

        $tableList->each(function ($item) {

            $this->results[] = $item->html();
        });

        $data = $this->results;

        /*$trValue = $trValue[] = preg_split("<tr>", $data[0]);
        foreach($trValue as $val){
            echo $val."//";
        }
        dd($data[0]);*/
 
        return view('infosdata', compact('data'));
    }
}

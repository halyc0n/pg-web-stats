<?php

namespace Halyc0n\PgWebStats;

use DB;
use Illuminate\Routing\Controller;

class PgWebStatsController extends Controller
{
    public function index()
    {
        $sql = 'SELECT total_time, (total_time / calls) AS average_time, query 
                FROM pg_stat_statements
                WHERE userid = (SELECT usesysid FROM pg_user WHERE usename = current_user LIMIT 1)
                ORDER BY 2 DESC';

        $rows = DB::select($sql);

        return view('pg-web-stats::index', ['rows' => $rows]);
    }
}
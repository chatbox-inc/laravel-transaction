<?php
namespace Chatbox\LaravelTransaction\Http\Middleware;

use Closure;
use Illuminate\Database\DatabaseManager;

class LaravelTransactionMiddleware
{
    protected $db;

    public function __construct(DatabaseManager $db)
    {
        $this->db = $db;
    }

    public function handle($request, Closure $next)
    {
        return $this->db->transaction(function($request, $next){
            return $next($request);
        });
    }
}

class TokenAccess
{  
   public function handle($request, Closure $next)
    {
     dd(str_random(50));    
    }
}

<?php
namespace App\Http\Middleware;
use Closure;
class Session
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {  
        if (!$request->session()->exists('admin_email')) {
            // user value cannot be found in session
          
            return redirect('/admin/auth/login');
        }

        return $next($request);
      
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next, $role) {
		echo '1. Middleware';
		echo '<br /> Vai tro:' . $role;
		echo '<br /> Thuc hien khi dang xu ly Http response';
		return $next($request);
	}

	public function terminate($request, $response) {
		echo '<br />3. Terminate Middleware';
		echo '<br /> Thuc hien sau khi Http response gui den trinh duyet';
	}
}

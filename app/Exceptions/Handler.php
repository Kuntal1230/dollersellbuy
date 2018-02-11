<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof HttpException) {
            $status = $exception->getStatusCode();
            if (view()->exists("errors.{$status}")) {
                return response()->view("errors.{$status}", ['exception' => $exception], $status, $exception->getHeaders());
            }
        }elseif ($exception instanceof ModelNotFoundException) {
            $status = $exception->getStatusCode();
            if (view()->exists("errors.{$status}")) {
                return response()->view("errors.{$status}", ['exception' => $exception], $status, $exception->getHeaders());
            }
        }elseif ($exception instanceof \Illuminate\Database\QueryException) {
            if (view()->exists("errors.dberror")) {
                return response()->view("errors.dberror", ['exception' => $exception]);
            }
        }
        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into a response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
      $guard = array_get($exception->guards(),0);
      switch ($guard) {
        case 'admin':
          $redirect = route('admin.login');
          break;

        default:
          $redirect = route('login');
          break;
      }
        return $request->expectsJson()
                    ? response()->json(['message' => $exception->getMessage()], 401)
                    : redirect()->guest($redirect);
    }
}

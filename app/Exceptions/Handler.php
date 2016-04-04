<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Log;

class Handler extends ExceptionHandler
{

    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param \Exception $e the exception
     *
     * @return void
     */
    public function report(Exception $e)
    {
        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request the request
     * @param \Exception               $e       the exception
     *
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        $trace = $e->getTraceAsString();
        if ($e instanceof ModelNotFoundException && mb_strpos($trace, 'app/Http/Backend/Controllers')) {
            $message = $e->getMessage();
            return view('backend.errors.404', compact('message'));
        }
        return parent::render($request, $e);
    }
}

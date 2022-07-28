<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Translation\Exception\NotFoundResourceException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

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
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        if ($request->is('admin') || $request->is('admin/*')) {
            return redirect()->guest('admin/login');
        }

        return redirect()->guest(route('login'));
    }

    public function render($request, Throwable $exception)
    {
        if ($request->wantsJson()) {   //add Accept: application/json in request
            return $this->handleApiException($request, $exception);
        } else {
            return parent::render($request, $exception);
        }
    }

    public function handleApiException($request, Throwable $exception)
    {
        $httpStatusCode = ($exception->getCode()) ? $exception->getCode() : 400;
        
        if ($exception instanceof AuthenticationException) 
            $httpStatusCode = 401;
        
        if ($exception instanceof NotFoundHttpException || $exception instanceof NotFoundResourceException) 
            $httpStatusCode = 404;
        
        
        $responseData = [
            'status' => false,
            'message' => $exception->getMessage(),
        ];

        if (config('app.debug')) {
            $responseData['stack_trace'] = $exception->getTrace();
        }

        \Log::error($exception->getMessage(), $exception->getTrace());
        
        return response()->json($responseData, $httpStatusCode);
    }
}

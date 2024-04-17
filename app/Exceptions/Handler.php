<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Stancl\Tenancy\Exceptions\TenantCouldNotBeIdentifiedOnDomainException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof TenantCouldNotBeIdentifiedOnDomainException) {
            // Return a custom response for the specific exception
            return response()->view('errors.tenant_not_identified', [], 500);
        }

        if ($this->isHttpException($exception)) {
            return $this->renderHttpExceptionView($exception);
        }

        return parent::render($request, $exception);
    }

    protected function renderHttpExceptionView($exception)
    {
        $status = $exception->getStatusCode();

        if (view()->exists("errors.$status")) {
            return response()->view("errors.$status", [], $status);
        } else {
            return response()->view('errors.default', [], $status);
        }
    }
}

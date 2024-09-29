<?php
namespace App\Filament\Resources\DepartmentResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\DepartmentResource;
use Illuminate\Routing\Router;


class DepartmentApiService extends ApiService
{
    protected static string | null $resource = DepartmentResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}

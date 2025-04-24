<?php
namespace Da1shiq\MakeService;

use Illuminate\Support\ServiceProvider;
use Da1shiq\MakeService\Commands\MakeServiceCommand;

class MakeServiceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            MakeServiceCommand::class,
        ]);
    }
}

?>
<?php
namespace Da1shiq\LaraMakeService;

use Illuminate\Support\ServiceProvider;
use Da1shiq\LaraMakeService\Commands\MakeServiceCommand;

class MakeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            MakeServiceCommand::class,
        ]);
    }
}

?>
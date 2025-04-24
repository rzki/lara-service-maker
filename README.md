
# Laravel Service Maker 

Simple package that enables Laravel devs (or non-Laravel devs) to create Service class without manually creating it from scratch.


## Installation

Install `lara-service-maker` by running single command :

```bash
    composer require da1shiq/lara-service-maker
```

and that's it!

## Usage/Examples
Initialize Service class creation by typing this command:

```bash
php artisan make:service <Your Service Name>
```

Optional tags:
- 
1. `--folder` : what folder will the Service class will be saved (Leave it blank to save it to default `Services` folder)
2. `--test` : Generate Test class (optional)
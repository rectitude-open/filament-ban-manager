#!/bin/bash
set -e

/home/wwwroot/filament-ban-manager/vendor/bin/pest
/home/wwwroot/filament-ban-manager/vendor/bin/pint
/home/wwwroot/filament-ban-manager/vendor/bin/phpstan analyse

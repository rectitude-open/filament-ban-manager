#!/bin/sh
set -e
cd /home/wwwroot/filament-ban-manager || exit
chown -R www-data:www-data /home/wwwroot/filament-ban-manager && \
find /home/wwwroot/filament-ban-manager -type f -exec chmod 644 {} \; && \
find /home/wwwroot/filament-ban-manager -type d -exec chmod 755 {} \; && \
chmod -R +x /home/wwwroot/filament-ban-manager/vendor/bin/ && \
chmod -R +x /home/wwwroot/filament-ban-manager/dev/

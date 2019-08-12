# code-analysis
Playing with php code analysis tools

*Tested commands*

composer require --dev squizlabs/php_codesniffer

vendor/bin/phpcs --standard=phpcs.xml ./

vendor/bin/phpmd ./ text phpmd.xml

vendor/bin/phpstan analyse ./app

php artisan code:analyse

*Shortcut commands*

composer phpcs

composer analysis

fixer:
	./vendor/bin/php-cs-fixer fix app/ --rules=@PSR2 && ./vendor/bin/php-cs-fixer fix tests/ --rules=@PSR2
ide:
	php artisan ide-helper:models -M -D app/Models && php artisan ide-helper:generate && php artisan ide-helper:meta

## Badania Bieglosci


### Mailgun

- Domain settings
- SMTP credentials: login and password

### DigitalOcean

Add DNS records for mailgun service:

- CNAME - badaniabieglosci.patrykpilek.com
- CNAME - email.mg.patrykpilek.com
- TXT - mg.patrykpilek.com
- TXT - smtp._domainkey.mg.patrykpilek.com
- MX - mg.patrykpilek.com
- MX - mg.patrykpilek.com

### .env:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=badaniabieglosci
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=database
SESSION_DRIVER=database
SESSION_LIFETIME=240

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=no-replay@badaniabieglosci.test

```

### Queue - Supervisor Configuration

Install supervisor

```console
username@servername:~$ sudo apt-get install supervisor
```

Supervisor configuration files are typically stored in the /etc/supervisor/conf.d directory.

Create a laravel-worker.conf file that starts and monitors queue:work processes:

```editorconfig
[program:laravel-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /home/username/app.com/artisan queue:work --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
user=username
numprocs=8
redirect_stderr=true
stdout_logfile=/home/username/app.com/worker.log
stopwaitsecs=3600
```

Starting Supervisor

```console
username@servername:~$ sudo supervisorctl reread
username@servername:~$ sudo supervisorctl update
username@servername:~$ sudo supervisorctl start laravel-worker:*
```

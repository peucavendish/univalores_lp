# Univalores LP

Projeto Laravel da landing page da Univalores.

Repositorio oficial: [https://github.com/peucavendish/univalores_lp](https://github.com/peucavendish/univalores_lp)

## 1) Subir alteracoes para o GitHub

No seu computador local, dentro da pasta do projeto:

```bash
git status
git add .
git commit -m "Descreva a alteracao"
git push origin main
```

Se estiver usando outra branch, troque `main` pelo nome correto.

## 2) Deploy em producao (servidor)

Conectar no servidor:

```bash
ssh -i "/caminho/da-chave.pem" ubuntu@SEU_HOST
```

Entrar no projeto:

```bash
cd /var/www/html
```

Atualizar codigo + dependencias + build + cache:

```bash
git pull origin main
composer install --no-dev --optimize-autoloader
npm ci
npm run build
sudo -u www-data php artisan migrate --force
sudo -u www-data php artisan optimize:clear
sudo -u www-data php artisan optimize
sudo systemctl reload nginx
sudo systemctl restart php8.3-fpm
```

## 3) Permissoes obrigatorias (Laravel)

Se der erro de `Permission denied` em `storage/logs/laravel.log`:

```bash
cd /var/www/html
sudo chown -R www-data:www-data storage bootstrap/cache database
sudo find storage bootstrap/cache -type d -exec chmod 775 {} \;
sudo find storage bootstrap/cache -type f -exec chmod 664 {} \;
sudo touch storage/logs/laravel.log
sudo chown www-data:www-data storage/logs/laravel.log
sudo chmod 664 storage/logs/laravel.log
```

## 4) Nginx (Laravel)

O `root` deve apontar para `public`:

```nginx
root /var/www/html/public;
```

Depois de alterar Nginx:

```bash
sudo nginx -t
sudo systemctl reload nginx
```

## 5) Troubleshooting rapido

- Erro `not a git repository`: voce nao esta na pasta do projeto (`cd /var/www/html`).
- Erro `readonly database` (SQLite): ajuste owner/permissoes da pasta `database`.
- Erro `no such table: sessions/cache`: rode `sudo -u www-data php artisan migrate --force`.
- Erro 500 apos deploy: rode novamente `optimize:clear` e `optimize` como `www-data`.

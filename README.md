## How to install peminjaman-asset

-   open git bash in laragon/www/
-   git clone https://github.com/tednih/peminjaman-asset.git to laragon/www/
-   composer install & npm install in laragon/www/peminjaman-asset
-   copy .env from RDS/VM pinjam asset
-   setting document root laragon to laragon/www/peminjaman-asset/public
-   start laragon
-   open your laragon ip in browser

## How to commit code change to github

**(BEFORE EDIT CODE IN YOUR LOCAL, NEED TO open git bash and then "git pull" in laragon/www/peminjaman-asset)**

-   open terminal laragon
-   cd.. (laragon/www/peminjaman-asset)
-   git config --global user.name "YourName"
-   git config --global user.email "YourEmail@example.com"
-   git add .
-   git commit -m "comment"
-   git push -u origin main

## How to change code in RDS/VM pinjam asset

-   open git bash in laragon/www/peminjaman-asset
-   git pull

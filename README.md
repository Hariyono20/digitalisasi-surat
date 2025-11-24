1.Clone Repo
````
git clone https://github.com/Aldosyhptra/digitalisasi-surat.git
cd digitalisasi-surat
````
2. Install Dependencies PHP
````
composer install
````
3. Install Dependencies NPM (Vite + Tailwind)
````
npm install
````
4. Copy File Environment
````
cp .env.example .env
````
atau di Windows:
````
copy .env.example .env
````
5. Generate Application Key
````
php artisan key:generate
````
6. Setting Database
Edit file .env dan sesuaikan:
````
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=digitalisasi-surat-db
DB_USERNAME=root
DB_PASSWORD=
````
7. Migrasi Table Database
````
php artisan migrate
````
Jika ada seeder yang perlu dijalankan:
````
php artisan db:seed
````
8. Menjalankan Server
````
npm run dev
````

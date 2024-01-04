# BSB Learning Friday

### MVC-Webapplications mit Laravel

## Installation

#### 1. Den Sourcecode von GitHub holen

```bash
git clone https://github.com/kayschima/BSB_learning_friday.git
```

#### 2. in das Verzeichnis wechseln

```bash
cd BSB_learning_friday
```

#### 3. alle PHP-Komponenten mit Composer installieren und Verschlüsselungskey generieren

```bash
composer install -o
php artisan key:generate
```

#### 4. CSS und JavaScript mit NPM installieren und kompilieren

```bash
npm ci
npm run build
```

#### 5. .env-Datei kopieren und anpassen

```bash
cp .env.example .env
```

#### 6. ggf. Datenbank in .env-Datei eintragen

```bash
DB_CONNECTION=sqlite
```

#### 7. Applikation starten

```bash
php artisan serve
```
## License

Diese Beispiele stehen alle unter der [MIT license](https://opensource.org/licenses/MIT).

[![Github All Releases](https://img.shields.io/github/downloads/ecommvu/product-email/total.svg)]()

**Steps to install:**

1. Inside packages directory make another directory 'Ecommvu'.
2. Inside the directory 'Ecommvu' make another directory 'Meta'.
3. Copy content of this repo inside 'Meta' directory.
4. Goto root of your Bagisto application and open composer.json
and add this line in the psr-4 object -> "Ecommvu\\Meta\\": "packages/Ecommvu/Meta/src"
5. Goto config/app.php file and in the providers array add this line:
Ecommvu\Meta\Providers\MetaServiceProvider::class
6. Perform composer dump-autoload
7. Make sure there are no errors in step 6.
8. Open admin panel you will see a menu item for ecommvu.
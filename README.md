
# Artisan Artipôle Laravel
## Installer le projet

- Installez [Visual Studio Code](https://code.visualstudio.com/).
- Si c'est la première fois que vous lancez le projet, suivez ces étapes :
    - Installez le plugin [Live SASS Compiler](.) en cliqand sur **Extensions** sur la gauche (logo avec 4 petits carrés).
    - Recherchez [Live SASS Compiler](.) puis cliquez sur **installer**.
- Cliquez sur **gérer** (roue crantée en bas à gauche) puis **paramètres** et enfin **IU** (papier avec une flèche en haut à droite).
- Sur le document qui s'ouvre, inserer le code comme suit :
```
{"terminal.external.windowsExec": 
"C:\\laragon\\bin\\cmder\\vendor\\conemu-maximus5\\ConEmu.xml",
"terminal.integrated.allowChords": false,
"liveSassCompile.settings.formats": [
{"format": "compressed",
"extensionName": ".min.css",
"savePath": "/public/css"}],
"liveSassCompile.settings.includeItems": ["/src/scss/styles.scss"],
"liveSassCompile.settings.generateMap": false,
"liveServer.settings.donotVerifyTags": true,
"php.validate.executablePath": "C:/laragon/bin/php/php-8.1.10-Win32-vs16-x64/php.exe",}
```
- Copiez le fichier **.env** disponible dans les ressources et le coller à la racine du dossier.
- Cliquez sur **Watch Sass** en bas de la fenêtre (sur une barre horizontale bleue).

## Démarrage du site

- Faites un clic droit sur le dossier du projet (qui s'appelle **artipole-laravel**) et **Copier en tant que chemin d'accès**.
- Ouvrez le logiciel **Laragon**.
- Cliquez sur **Terminal**.
- Tapez la commande `cd CLIC-DROIT`.
- Tapez la commande `composer update`.
  -- [FACULTATIF] Tapez la commande `npm update`.
- Tapez la commande `php artisan serve`.
- Et enfin, rendez-vous sur internet, et entrez dans l'url `http://127.0.0.1/8000`.

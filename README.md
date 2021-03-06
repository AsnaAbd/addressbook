<b>Contexte</b> :<br>
Un simple carnet d'adresses en ligne réalisé sous Symfony2.<br>
<br>
<b>Prérequis</b> (détail plus bas) :<br>
Composer<br>
NodeJS pour installer uglify-js, uglifycss et bower<br>
Ruby pour installer saas<br>
<br>
<b>Les fonctionnalités sont les suivantes</b> :<br>
<br>
Login / Inscription :<br>
·       Identification (Inscription/Connexion/Déconnexion) de l'utilisateur par login/mot de passe (FOSUserbundle).<br>
<br>
Dashboard :<br>
·       Inviter/Ajouter/Afficher/Lister/EditerSupprimer des contacts de son carnet d'adresses (membres qui pourront aussi se connecter à leur tour). <br>
·       Afficher/Modifier ses informations (e-mail / adresse / téléphone / site web).<br>
<br>
Mailing :<br>
·       Confirmation inscription/invitation<br>
<br>
<br>
<b>Prérequis</b> : rapatrier le projet ;)
<br>
 ========================================<br>
<br>
Installer Composer (Windows)<br>
https://getcomposer.org/Composer-Setup.exe<br>
<br>
install Node.js (Windows)<br>
https://nodejs.org/dist/v0.12.7/x64/node-v0.12.7-x64.msi<br>
<br>
 ========================================<br>
 -> Redémarrer !<br>
 ========================================<br>
 <br>
Executer:<br>
<br>
composer install (si problème de caractères "maxpathlength" et co' <b>composer install --prefer-source</b>)<br>
npm install uglify-js -g<br>
npm install uglifycss -g<br>
npm install bower -g<br>
bower install<br>
<br>
 ========================================<br>
<br>
Installer Ruby (Windows) et selectionner l'écriture dans le PATH windows<br>
http://dl.bintray.com/oneclick/rubyinstaller/rubyinstaller-2.2.2.exe<br>
<br>
========================================<br>
-> Redémarrer !<br>
========================================<br>
<br>
exécuter:<br>
gem install sass<br>
<br>
 ========================================<br>
Fichier de conf app\conf\parameters.yml à modifier en fonction de vos répertoire d'installation (ici ce sont les chemins par défaut)<br>
<b>A modifier avec vos donnéess et/ou chemins par défaut</b><br>
<br>
parameters:<br>
    database_driver: pdo_mysql<br>
    database_host: localhost<br>
    database_port: null<br>
    database_name: addressbook<br>
    database_user: root<br>
    database_password: null<br>
    mailer_transport: smtp<br>
    mailer_host: smtp.orange.fr<br>
    mailer_user: null<br>
    mailer_password: null<br>
    delivery_address: null<br>
    secret: ThisTokenIsNotSoSecretChangeIt<br>
    node_bin_path: 'C:/Program Files/nodejs/node.exe'<br>
    node_lib_paths:<br>
        - 'C:/Program Files/nodejs/node_modules'<br>
        - 'C:/Users/Jihane/AppData/Roaming/npm/node_modules'<br>
    uglify_js_path: 'C:/Users/Jihane/AppData/Roaming/npm/node_modules/uglify-js'<br>
    uglify_css_path: 'C:/Users/Jihane/AppData/Roaming/npm/node_modules/uglifycss'<br>
    ruby_path: 'C:/Ruby22-x64/bin/ruby'<br>
    sass_path: 'C:/Ruby22-x64/bin/sass'<br>
    request_context.base_path: ''<br>
    router.request_context.base_url: ''<br>
    contact_email: jihanechawki@gmail.com<br>
    basePath: 'http://www.addressbook.deve/'<br>
    prod_email: addressbook@yopmail.com<br>
<br>
 ========================================<br>
<br>
-> Installer un vhost sous WAMP <br>
Editer "C:\wamp\bin\apache\apache2.4.9\conf\extra\httpd-vhosts.conf"<br>
<br>
\<VirtualHost *:80><br>
    ServerAdmin contact@addressbook.deve<br>
    DocumentRoot "c:/wamp/www/addressbook"<br>
    ServerName addressbook.deve<br>
    ErrorLog "logs/addressbook.deve-error.log"<br>
    CustomLog "logs/addressbook.deve-access.log" common<br>
\</VirtualHost><br>
<br>
 ========================================<br>
<br>
-> Pointer le vhost sur localhost<br>
Editer "C:\Windows\System32\drivers\etc\hosts"<br>
<br>
Ajouter :<br>
127.0.0.1 addressbook.deve www.addressbook.deve<br>
:: 1 addressbook.deve www.addressbook.deve<br>
<br>
 ========================================<br>
<br>
-> redémarrer<br>
<br>
 ========================================<br>
<br>
-> Initialisation du schéma de la base de données: <br>
-> Se placer à la racine du projet puis :<br>
<br>
app/console doctrine:schema:update --force<br>
<br>
Rendez-vous sur : http://addressbook.deve/web/app_dev.php/<br>
<br>
Enjoy ! <br>
<br>
![Login Page](https://github.com/chawkijihane/addressbook/blob/master/wiki/login_page.PNG)
![Complete login Page](https://github.com/chawkijihane/addressbook/blob/master/wiki/complete_profil_login.PNG)
![Panel without data](https://github.com/chawkijihane/addressbook/blob/master/wiki/add_contact_empty.PNG)
![Add contact](https://github.com/chawkijihane/addressbook/blob/master/wiki/add_contact.PNG)
![Contact already exist](https://github.com/chawkijihane/addressbook/blob/master/wiki/contact_already_exist.PNG)
![Panel with data](https://github.com/chawkijihane/addressbook/blob/master/wiki/panel_membre_and_not.PNG)
![Contact show](https://github.com/chawkijihane/addressbook/blob/master/wiki/contact_detail.PNG)
![Update profil](https://github.com/chawkijihane/addressbook/blob/master/wiki/edit_profil.PNG)
![Template mail register](https://github.com/chawkijihane/addressbook/blob/master/wiki/template-mail-register.PNG)
![Template mail invitation](https://github.com/chawkijihane/addressbook/blob/master/wiki/template-mail-invitation.PNG)

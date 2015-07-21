# Cards Component for Joomla! & Nooku \(com_kadi\)
In following the Joomla tradition of using Swahili in terminology \(nomenclature of modules and components\). Kadi is both singular and plural for "cards". As this is a simple 'hello world' 
project for the Joomla and Nooku Frameworks, most likely, it will just render swatches on the front end; for quotes, advertisements or HTML5 'aside' simple and brief information snippets.

The Environment of this project is based on the services provided by [Moyo Web Architects](http://moyoweb.nl); namely the [Creative Construction Kit](https://github.com/kedweber/com_cck) that works with Joomla! 3.x and Koowa 0.9 or 1.0.

[Additional Learning Notes](https://github.com/kedweber/com_kadi/blob/master/NOTES.md).

## Requirements

   * Joomla 3.X .
   * Koowa 0.9 or 1.0 (as yet, Koowa 2 is not supported)
   * PHP 5.3.10 or better
   * Moyo Components
       * As of yet, I am not sure which components from the entourage of Moyo Components will be necessary to provide functionality to Kadi.

## Installation

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories
section:

```json
{
    "name": "kedweber/com_kadi",
    "type": "vcs",
    "url": "https://github.com/kedweber/com_kadi.git"
}
```

The require section of your `composer.json` file should contain the following lines:

```json
    "kedweber/com_kadi": "0.1.*",
```

Afterwards, one just needs to run the command `composer update` from the root of your Joomla project. This will 
effectively create a `composer.lock` file which will contain the collected dependencies and the hash codes for 
each latest release \(depending on the require section's format\) for each particular repo. Should installations 
problems occur due to a bad ordering of the dependencies, one may need to go into the lock file and manualy change 
the order of the components. Running `composer update` again will again cause a reordering of the lock file, beware of 
this factor when running an update. Thereafter, you can run the command `composer install`. 

If you have not setup an alias to use the command composer, then you will need to replace the word composer in the previous commands with the 
commands with `php composer.phar` followed by the desired action \(eg. update or install\).

### jsymlinker

Another option is to run the [jsymlink script](https://github.com/derjoachim/moyo-git-tools) in the root folder, available via the original Moyo developer, Joachim van de Haterd's repository, under 
the [Moyo Git Tools](https://github.com/derjoachim/moyo-git-tools).

#### License jsymlinker

The joomlatools/installer plugin is free and open-source software licensed under the [GPLv3 license](https://github.com/derjoachim/joomla-composer/blob/develop/gplv3-license).


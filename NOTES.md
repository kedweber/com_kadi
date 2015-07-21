# Joomla Environmental Notes

## [The package xml file](https://docs.joomla.org/Package)

Each Joomla component called by a browser begins from the index.php and attempts to load the equivalent path components/com_<name>/<name>.php
[Component Basics](https://docs.joomla.org/Absolute_Basics_of_How_a_Component_Functions)


Nice [Nookui](http://www.nooku.org/) Project: [Ohana](https://github.com/gagarine/ohanah/blob/master/site/components/com_ohanah/ohanah.php)



# NOOKU

## The Templating Process
 This is where Koowa (the internal name of the Nooku engine) renderer takes data from the models and fills the templates.
 This rendering process takes your 'template' from the 'templates' folder.
  
  
  Note: The standard Joomla way would have required an additional file in this context. The middle name required for every format you wished to download. With Nooku this is not necessary, as it
  prepares the file based on requested file extension.
   com_kadi/views/kadi/view.html.php
  
  
  The *KTemplateFilterAlias* provides the ability to type the following aliases in our templates 
   
    '@helper('      => '$this->renderHelper(',
    '@service('     => '$this->getService\(',
    '@date('        => '$this->renderHelper\(\'date.format\',',
    '@*overlay*\('     => '$this->renderHelper\(\'behavior.overlay\', ',
    '@*text*\('        => '$this->getHelper(\'translator\')->translate(',
    '@*template*\('    => '$this->loadIdentifier(',
    '@*route*\('       => '$this->getView()->createRoute(',
    '@*escape*\('      => '$this->getView()->escape(',
  An example of the PHP code to load a helper that will insert Nooku client-side javascript into the template would be as follows:
  ``<?= @helper('behavior.mootools'); ?>``
  


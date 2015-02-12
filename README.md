Alfred Bez :: use parent Media Files
=============================
[OXID eShop](https://github.com/OXID-eSales/oxideshop_ce/) module

If a variant has no media files the media files from the parent article will be used

Download
------------

There are several ways to download the module:
### Download-Option 1: Download via composer (recommended)
first you need [composer](https://getcomposer.org/download/)

add the module to your composer.json
 * via command line ```composer.phar require alfredbez/ab_useParentMediaFiles dev-master```
 * OR
 * manually
```
{
    "require": {
        "alfredbez/ab_useParentMediaFiles": "dev-master"
    }
}
```

### Download-Option 2: Download using git clone
```git clone https://github.com/alfredbez/ab_useParentMediaFiles.git```

### Download-Option 3: Download ZIP
[download](https://github.com/alfredbez/ab_useParentMediaFiles/archive/master.zip) and extract zip

----

If you downloaded the module manually or via git:
 * rename the folder to 'ab_useParentMediaFiles' if the folder name is 'ab_useParentMediaFiles-master'
 * you have to move the folder 'ab_useParentMediaFiles' to your 'modules'-folder.

----

**Don't forget to activate module in the OXID backend**

----

After uploading the module, your directory should look like this:

```
├── index.php
├── bootstrap.php
├── config.inc.php
├── ...
└── modules
    └── ab_useParentMediaFiles
        ├── README.md
        ├── metadata.php
        └── models
```
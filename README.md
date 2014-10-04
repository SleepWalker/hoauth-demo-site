# `hoauth` demo site

This is source code of the demo site at http://hoauth.hamstercms.com/yii-user

## Installation


### Prepare
* Install composer: https://getcomposer.org/doc/00-intro.md#installation-nix
* In console go to the parent directory of your future site and issue `git clone https://github.com/SleepWalker/hoauth-demo-site.git`
* Then `cd hoauth-demo-site`

### Install
* Run `composer install` or another composer command based on choosed composer installation
* Run `./protected/vendor/yiisoft/yii/framework/yiic webapp .` (**This was already run for you and included in repo**)
* Edit your db and app config based on [readme](https://github.com/SleepWalker/yii-user) (**for this repo you should specify only db config in protected/config/db.php**)
* Add `require_once(dirname(__FILE__).'/protected/vendor/autoload.php');` to your `index.php` file (**This was already done for you and included in repo**)
* Create `.htaccess` file if you using Apache (**Already done**)
* Run migration `./protected/yiic migrate --migrationPath=application.vendor.sleepwalker.yii-user.migrations`

### Integrate with `hoauth`
To integrate `hoauth` with `yii-user` there was created new views in `themes/classic/views/user`.
It was also created controllerMap in config of `yii-user` to overload the default login controller.
See "[Integration step](https://github.com/SleepWalker/hoauth-demo-site/commit/642f74a102f571bad065d882a8ce166a76889a58)" commit for reference.

## Setup the `hoauth`
Go to: `yoursite.com/user/login/oauthadmin` and set up the social networks and you are ready.
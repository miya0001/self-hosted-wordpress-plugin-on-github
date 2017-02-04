# gh-auto-updater-example

[![Build Status](https://travis-ci.org/miya0001/gh-auto-updater-example.svg?branch=master)](https://travis-ci.org/miya0001/gh-auto-updater-example)

This project is an example of WordPress plugin which enables automatic update from GitHub.

![](https://www.evernote.com/l/ABUN-UErKq5OUryilvVvE7Ufk_3yQtlRS3kB/image.png)

## How It Works

### Load the `miya/gh-auto-updater` library with composer.

https://github.com/miya0001/gh-auto-updater-example/blob/master/composer.json#L4

### Activate the automatic updater in your plugin.

https://github.com/miya0001/gh-auto-updater-example/blob/master/gh-auto-updater-example.php#L15-L21

### Activate the automatic release on Travis CI.

* https://github.com/miya0001/gh-auto-updater-example/blob/master/.travis.yml
* https://docs.travis-ci.com/user/deployment/releases/

Encrypted key will be saved automatically when you run `travis setup releases`.

### Update

Update your plugin like following.

```
$ git tag 2.0.0
$ git push origin 2.0.0
```

# Self-Hosted WordPress Plugin on GitHub with Automatic Update

[![Build Status](https://travis-ci.org/miya0001/gh-auto-updater-example.svg?branch=master)](https://travis-ci.org/miya0001/gh-auto-updater-example)

This project is an example of WordPress plugin which enables automatic update with GitHub API.

Please install [v1.0.0](https://github.com/miya0001/gh-auto-updater-example/releases/download/1.0.0/gh-auto-updater-example.zip) to your WordPress, then you can see notice of the new version like following.

![](https://www.evernote.com/l/ABUN-UErKq5OUryilvVvE7Ufk_3yQtlRS3kB/image.png)

If you can't see update notice, please try following.

```
$ wp cron event run --all
```

## How It Works

### 1. Load the `miya/gh-auto-updater` library with composer.

* https://github.com/miya0001/gh-auto-updater-example/blob/master/composer.json

My composer is [here](https://github.com/miya0001/gh-auto-updater).
It is in progress, but it looks woking fine as expected.

You need `"minimum-stability": "dev"` for now. :smile:

### 2. Activate the automatic updater in your plugin.

* https://github.com/miya0001/gh-auto-updater-example/blob/master/gh-auto-updater-example.php#L15-L21

### 3. Activate the automatic release on Travis CI.

* https://github.com/miya0001/gh-auto-updater-example/blob/master/.travis.yml#L18-L28
* https://docs.travis-ci.com/user/deployment/releases/

Encrypted key will be saved automatically when you run `travis setup releases`.

### 4. Update

Update your plugin like following.

```
$ git tag 2.0.0
$ git push origin 2.0.0
```

# Self-Hosted WordPress Plugin on GitHub with Automatic Update

[![Build Status](https://travis-ci.org/miya0001/gh-auto-updater-example.svg?branch=master)](https://travis-ci.org/miya0001/gh-auto-updater-example)

This project is an example of WordPress plugin which enables automatic update with GitHub API, using following library.
https://github.com/miya0001/gh-auto-updater

Please install [v1.0.0](https://github.com/miya0001/gh-auto-updater-example/releases/download/1.0.0/gh-auto-updater-example.zip) to your WordPress, then you can see notice of the new version like following.

![](https://www.evernote.com/l/ABUN-UErKq5OUryilvVvE7Ufk_3yQtlRS3kB/image.png)

If you can't see update notice, please try following.

```
$ wp cron event run --all
```

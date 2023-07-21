# Base WP Theme

[![License: GPL v2](https://img.shields.io/badge/License-GPL_v2-blue.svg)](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)
[![PluginTerritory](https://img.shields.io/badge/Plugin%20Territory-Free-blue.svg?logo=wordpress&logoColor=FAFAFA)]()

> The `develop` branch tracks development and it's not a stable code. For a stable version, use the [`master`](https://github.com/sarahcssiqueira/base-wp-theme/tree/master) branch the latest [release](https://github.com/sarahcssiqueira/base-wp-theme/releases).

Base WP Theme is a **starter** WordPress theme to use as a base to build WordPress themes from scratch.

Contains the configuration files for handling the assets files like Javascript, CSS, and images using [Webpack](https://webpack.js.org/) and also handles [WordPress Coding Standards](https://github.com/WordPress/WordPress-Coding-Standards) through [Composer](https://getcomposer.org/). Some topics:

- [Webpack](https://webpack.js.org/) for managing, compiling, and optimizing the theme's asset files;
- [ES6](https://babeljs.io/learn-es2015/) for JavaScript;
- [Eslint](https://eslint.org/);
- [Babel](https://babeljs.io/);
- [SASS](http://sass-lang.com/);
- [Stylelint](https://stylelint.io/);
- [WordPress Coding Standards](https://github.com/WordPress/WordPress-Coding-Standards);
- [PHP Namespaces](http://php.net/manual/pl/language.namespaces.php);
- [Autoload](https://www.php.net/manual/en/language.oop5.autoload.php);

## ✔️ Table of Contents

- [Introduction](#base-wp-theme)
- [Requirements](#requirements)
- [Usage](#usage)
- [WordPress Hierarchy](#wordpress-hierarchy)
- [Assets](#assets)
- [Scripts](#scripts)
- [Build](#build)
- [Deploy](#deploy)
- [Contributing and Support](#🤝-contributing-and-support)
- [Changelog](#changelog-📄)
- [License](#license)

## Requirements

Base WP Theme follows [WordPress recommended requirements](https://wordpress.org/about/requirements/). To work on this project you will need:

- WordPress >= 4.7
- PHP >= 7.4
- MySQL >= 5.7 or MariaDB >=10.3
- Nginx or Apache with mod_rewrite module
- HTTPS support

### ➕ Plus

- [Node.js](https://nodejs.org) for webpack and other dependencies;
- [Composer](https://getcomposer.org) for Coding standards;

For WordPress local development, I **strongly recommend using Docker**. To see how to create a Docker environment, check my repository [Docker WordPress](https://github.com/sarahcssiqueira/docker-wordpress). But feel free to work with the one you prefer, like XAMPP for example.

## Usage

Clone the repository with `git clone https://github.com/sarahcssiqueira/base-wp-theme` or download one of the latest [releases](https://github.com/sarahcssiqueira/base-wp-theme/releases). Paste in the **/wp-content/themes/** folder of your WordPress installation.
On the Base WP Theme root folder, run the following commands to install the required dependencies:

`npm install` &&

`composer install`

To use WPCS, we have to tell the PHP Code Sniffer about the WordPress Coding Standards. For that run the command:

`composer cstd`

### Reseting the theme

Remove the front-page.php and create your own, you can use the front-page-sample.php present in the root folder. Also, remove the front-page.scss partial. Remove the statement '/.front-page' of the index.scss file.

## WordPress Hierarchy

On the theme's root folder are the following WordPress **.php** files, on where you should work. On each file, you can see more info about their responsibilities. For additional information, please refer to [WordPress Template Hierarchy documentation](https://developer.wordpress.org/themes/basics/template-hierarchy/).

- index.php
- page.php
- privacy-policy.php
- single.php
- category.php
- tag.php
- author.php
- archive.php
- search.php
- 404.php
- attachment.php
- front-page.php
- header.php
- footer.php

## Assets

The assets folder keeps the javascript, css, and images. This project uses scss.

## Scripts

There are scripts on package.json and in composer.json to help us with common routines.

### Scripts to watch, lint, and fix assets

To watch the assets with webpack run the command `npm run dev`

To lint Javascript using eslint, run `npm run lint`

To automatically fix Javascript with eslint it's necessary to add the flag --fix, for that run `npm run lint:fix`

To lint CSS using stylelint, run `npm run lint-css`

To automatically fix CSS with stylelint it's necessary to add the flag --fix, run `npm run lint-css:fix`

### Scripts to PHP Sniffer and WordPress Coding Standards

To generate a report for PHP code standards violations run the command:

`composer cs`

To automatically fix the coding standards violations run the:

`composer cbf`

The coding standards are defined in the .phpcs.xml file.

## Build

To create an optimized version of the assets, run the command `npm run build`

The assets on the **build folder** are the ones enqueued on the **class-assets.php -> functions.php**.

## Deploy

The **Base WP Theme** is deployed in a [LAMP server on Digital Ocean](https://dev.to/sarahcssiqueira/setting-a-lamp-server-on-digital-ocean-ssl-55l0). The deployment is handled by GitHub Actions.
Update the [.github/worfklow/deployment.yml](https://github.com/sarahcssiqueira/base-wp-theme/blob/master/.github/workflows/deployment.yml) file according to your deployment needs.

In the Base WP Theme case, the deployment **workflow is triggered** when a **new tag** is added to the master branch, so the **deployed version** will always correspond to the [latest release](https://github.com/sarahcssiqueira/base-wp-theme/releases/latest) version.

You can set the trigger for your workflow on push, on pull requests, on issues opened, etc. Please refer to [GitHub documentation](https://docs.github.com/en/actions/using-workflows/triggering-a-workflow#about-workflow-triggers) for more details.

More for workflow samples go to [Reusable WordPress Workflows repository](https://github.com/sarahcssiqueira/reusable-wordpress-workflows).

## 🤝 Contributing and Support

Contribute informing about [issues](https://github.com/sarahcssiqueira/base-wp-theme/issues) or even through [pull requests](https://github.com/sarahcssiqueira/base-wp-theme/pulls) for improvements.

❤️ Support [buying me a coffee](https://www.buymeacoffee.com/sarahcssiqueira).

## Changelog 📄

[Changelog here](https://github.com/sarahcssiqueira/base-wp-theme/blob/main/CHANGELOG.md)

## License

The Base WP Theme is licensed under the [GPL v2](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html).

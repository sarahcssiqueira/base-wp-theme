# Base WP Theme

[![License: GPL v2](https://img.shields.io/badge/License-GPL_v2-blue.svg)](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)

Base WP Theme is a **skeleton** WordPress theme to use as a base to build WordPress themes from scratch.

Contains the configurations files for handling assets like Javascript files , CSS files, images and also handle WordPress Coding Standards and Autoload through composer.

- Webpack;
- Eslint;
- Babel;
- Stylelint;
- WordPress Coding Standards;
- Autoload;

## Table of Contents

- [Introduction](#base-wp-theme)
- Requirements
- [Usage](#usage)
  - Folders Structure
    - WordPress Hierarchy
    - Assets
    - Build
- [Contributing and Support](#contributing-and-support)

## Usage

Clone the repository `git clone https://github.com/sarahcssiqueira/base-wp-theme`. On the root folder run the following commands for install the required dependencies:

`npm install` && `composer install`

run

`composer cstd`

### Reset the theme

Remove the front-page and create your own, you can use the front-page-sample.php

### 📁 Folders Structure

#### WordPress Hierarchy

On project's root folder the php files. You can create others, please refer to [documentation](https://developer.wordpress.org/themes/basics/template-hierarchy/)

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

#### Assets

src/ folder for css, js and img.

For waching the assets run `npm run dev`

#### Build

run `npm run prod`

## 🤝 Contributing and Support

It's **work in progress.** Feel free to contribute informing about [issues](https://github.com/sarahcssiqueira/base-wp-theme/issues) or even through [pull requests](https://github.com/sarahcssiqueira/base-wp-theme/pulls) for improvements.

❤️ Support [buying me a coffee](https://www.buymeacoffee.com/sarahcssiqueira).

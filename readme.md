# Base WP Theme

[![License: GPL v2](https://img.shields.io/badge/License-GPL_v2-blue.svg)](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)

Base WP Theme is a **skeleton** WordPress theme to use as a base to build WordPress themes from scratch.

Contains the configurations files for handling assets and WordPress Coding Standards.

- Webpack;
- Eslint;
- Babel;
- Stylelint;
- WordPress Coding Standards;

## Usage

Clone the repository `git clone https://github.com/sarahcssiqueira/base-wp-theme`, on the root folder run the commands for install the required dependencies:

`npm install`

`composer install`

run

`composer cstd`

## 📁 Folders Structure

### WordPress Hierarchy

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

### Assets

src/ folder for css, js and img.

For waching the assets run `npm run dev`

### Build

run `npm run prod`

# brave-scaffold

[![Code Style](https://github.com/yardinternet/brave-scaffold/actions/workflows/format-php.yml/badge.svg?no-cache)](https://github.com/yardinternet/brave-scaffold/actions/workflows/format-php.yml)
[![PHPStan](https://github.com/yardinternet/brave-scaffold/actions/workflows/phpstan.yml/badge.svg?no-cache)](https://github.com/yardinternet/brave-scaffold/actions/workflows/phpstan.yml)
[![Tests](https://github.com/yardinternet/brave-scaffold/actions/workflows/run-tests.yml/badge.svg?no-cache)](https://github.com/yardinternet/brave-scaffold/actions/workflows/run-tests.yml)
[![Code Coverage Badge](https://github.com/yardinternet/brave-scaffold/blob/badges/coverage.svg)](https://github.com/yardinternet/brave-scaffold/actions/workflows/badges.yml)
[![Lines of Code Badge](https://github.com/yardinternet/brave-scaffold/blob/badges/lines-of-code.svg)](https://github.com/yardinternet/brave-scaffold/actions/workflows/badges.yml)

## Requirements

- [Sage](https://github.com/roots/sage) >= 10.0
- [Acorn](https://github.com/roots/acorn) >= 4.0

## Installation

To install this package using Composer, follow these steps:

1. Add the following to the `repositories` section of your `composer.json`:

    ```json
    {
      "type": "vcs",
      "url": "git@github.com:yardinternet/brave-scaffold.git"
    }
    ```

2. Install this package with Composer:

    ```sh
    composer require yard/brave-scaffold
    ```

3. Run the Acorn WP-CLI command to discover this package:

    ```shell
    wp acorn package:discover
    ```

## Usage

### Content types

This package provides a set of scaffolding commands to help you quickly set up common content types
in [Brave](https://github.com/yardinternet/brave):

```shell
wp acorn scaffold:knowledgebase
wp acorn scaffold:news
wp acorn scaffold:person
wp acorn scaffold:project
```

### Child Themes

To create a child theme you can run the following command. This will create a child theme directory in
`web/app/themes/{slug}` that has Sage as the parent theme.

```shell
 wp acorn scaffold:sage-child {slug}
 ```

More information about child themes can be found in [Brave](https://github.com/yardinternet/brave)
and [Sage Child Theme Support](https://github.com/yardinternet/sage-child-theme-support)

## About us

[![banner](https://raw.githubusercontent.com/yardinternet/.github/refs/heads/main/profile/assets/small-banner-github.svg)](https://www.yard.nl/werken-bij/)

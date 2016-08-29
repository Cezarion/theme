# Themosis framework And Roots Sage Front Workflow

## Roots 

### [Themosis](http://framework.themosis.com/)

The Themosis framework is a tool aimed to WordPress developers of any levels. But the better WordPress and PHP knowledge you have the easier it is to work with.

Themosis framework is a tool to help you develop websites and web applications faster using [WordPress](https://wordpress.org). Using an elegant and simple code syntax, Themosis framework helps you structure and organize your code and allows you to better manage and scale your WordPress websites and applications.

The framework was created by [Julien Lambé](http://www.themosis.com/), who continues to lead the development.

#### Contributing

Any help is appreciated. The project is open-source and we encourage you to participate. You can contribute to the project in multiple ways by:

- Reporting a bug issue
- Suggesting features
- Sending a pull request with code fix or feature
- Following the project on GitHub
- Following us on Twitter
- Sharing the project around your community

For details about contributing to the framework, please check the [contribution guide](http://framework.themosis.com/docs/contributing/).

#### License

The Themosis framework is open-source software licensed under [GPL-2+ license](http://www.gnu.org/licenses/gpl-2.0.html).

### [Sage](https://roots.io/sage/)


[![Build Status](https://travis-ci.org/roots/sage.svg)](https://travis-ci.org/roots/sage)
[![devDependency Status](https://david-dm.org/roots/sage/dev-status.svg)](https://david-dm.org/roots/sage#info=devDependencies)

Sage is a WordPress starter theme with a modern development workflow.

Write stylesheets with Sass, automatically check your JavaScript for errors, optimize images, enable synchronized browser testing, and more.

#### Documentation

Sage documentation is available at [https://roots.io/sage/docs/](https://roots.io/sage/docs/).

#### Contributing

Contributions are welcome from everyone. We have [contributing guidelines](https://github.com/roots/guidelines/blob/master/CONTRIBUTING.md) to help you get started.

#### Community

Keep track of development and community news.

* Participate on the [Roots Discourse](https://discourse.roots.io/)
* Follow [@rootswp on Twitter](https://twitter.com/rootswp)
* Read and subscribe to the [Roots Blog](https://roots.io/blog/)
* Subscribe to the [Roots Newsletter](https://roots.io/subscribe/)
* Listen to the [Roots Radio podcast](https://roots.io/podcast/)


## Theme structure

```shell
themes/theme-name/                     # → Root of your Sage based theme
├── composer.json                      # → Autoloading for `src/` files
├── composer.lock                      # → Composer lock file (never manually edit)
├── dist/                              # → Built theme assets (never manually edit)
├── functions.php                      # → Never manually edit
├── index.php                          # → Never manually edit
├── node_modules/                      # → Node.js packages (never manually edit)
├── package.json                       # → Node.js dependencies and scripts
├── screenshot.png                     # → Theme screenshot for WP admin
├── resources                          # → This is the main folder where you write your code for building your application/website's theme
│   ├── admin
│   │   ├── actions.php
│   │   ├── application.php            # → This folder is an extension of the classic functions.php file. You can add as many files as you want at its root
│   │   ├── assets.php                 # → Load assets files witch Themosis and Sage functions
│   │   ├── filters.php
│   │   └── helpers.php
│   ├── assets
│   │   ├── config.json                # → Settings for compiled assets
│   │   ├── fonts                      # → Theme fonts
│   │   ├── images                     # → Theme images
│   │   ├── scripts                    # → Theme JS
│   │   │   ├── customizer.js
│   │   │   ├── main.js
│   │   │   ├── routes
│   │   │   │   ├── About.js
│   │   │   │   ├── Common.js
│   │   │   │   └── Home.js
│   │   │   └── util
│   │   │       ├── public-path.js
│   │   │       └── router.js
│   │   └── styles                    # → Theme stylesheets
│   │       ├── common
│   │       │   ├── _global.scss
│   │       │   ├── _mixins.scss
│   │       │   └── _variables.scss
│   │       ├── components
│   │       │   ├── _buttons.scss
│   │       │   ├── _comments.scss
│   │       │   ├── _forms.scss
│   │       │   ├── _grid.scss
│   │       │   └── _wp-classes.scss
│   │       ├── layouts
│   │       │   ├── _footer.scss
│   │       │   ├── _header.scss
│   │       │   ├── _layouts.scss
│   │       │   ├── _pages.scss
│   │       │   ├── _posts.scss
│   │       │   ├── _sidebar.scss
│   │       │   └── _tinymce.scss
│   │       └── main.scss
│   ├── config                        # → Contains the theme configuration files: application, constants, images, loading, menus, sidebars, supports, templates
│   │   ├── application.config.php
│   │   ├── constants.config.php
│   │   ├── images.config.php
│   │   ├── loading.config.php
│   │   ├── menus.config.php
│   │   ├── sidebars.config.php
│   │   ├── supports.config.php
│   │   └── templates.config.php
│   ├── controllers                   # → This folder stores all your controller classes.
│   │   └── BaseController.php
│   ├── libraries                     # → Stores your model classes.
│   │   └── Sage
│   │       ├── Asset.php
│   │       └── Assets
│   │           ├── JsonManifest.php
│   │           └── ManifestInterface.php
│   ├── models                        # → Stores your model classes.
│   │   └── PostModel.php
│   ├── routes.php                    # → This file handles your website routes. The route system behaves like an "if" statement on steroids
│   ├── views                         # → Theme templates
│   │   ├── common                    # → Ccommon templates
│   │   │   ├── footer.scout.php
│   │   │   ├── head.scout.php
│   │   │   └── header.scout.php
│   │   ├── layouts                   # → Layouts templates
│   │   │   └── base.scout.php
│   │   ├── partials                  # → Partial templates
│   │   │   ├── footer.scout.php
│   │   │   ├── head.scout.php
│   │   │   └── header.scout.php
│   │   └── welcome.scout.php
│   └── widgets                       # → Contains your widget classes.
├── style.css                         # → Theme meta information
├── vendor/                           # → Composer packages (never manually edit)
├── watch.js                          # → Webpack/BrowserSync watch config
└── webpack.config.js                 # → Webpack config
```


## Features

* [Webpack](https://webpack.github.io/) is used as a build tool for compiling stylesheets, checking for JavaScript errors, optimizing images, and concatenating and minifying files
* [BrowserSync](http://www.browsersync.io/) for keeping multiple browsers and devices synchronized while testing, along with injecting updated CSS and JS into your browser while you're developing
* [Bootstrap](http://getbootstrap.com/)

Install the [Soil](https://roots.io/plugins/soil/) plugin to enable additional recommended features:

* Load jQuery from the jQuery CDN
* Cleaner WordPress markup
* Cleaner HTML output of navigation menus
* Root relative URLs
* Nice search
* Google Analytics snippet from [HTML5 Boilerplate](http://html5boilerplate.com/)
* Move all JS to the footer
* Disable trackbacks and pingbacks

See a complete working example in the [roots-example-project.com repo](https://github.com/roots/roots-example-project.com).

## Requirements

Make sure all dependencies have been installed before moving on:

* [PHP](http://php.net/manual/en/install.php) >= 5.5.x
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 0.12.x

## Theme installation

Then activate the theme via [wp-cli](http://wp-cli.org/commands/theme/activate/):

```shell
# @ example.com/site
$ wp theme activate your-theme-name
```

## Features

* [Webpack](https://webpack.github.io/) is used as a build tool for compiling stylesheets, checking for JavaScript errors, optimizing images, and concatenating and minifying files
* [BrowserSync](http://www.browsersync.io/) for keeping multiple browsers and devices synchronized while testing, along with injecting updated CSS and JS into your browser while you're developing
* [Bootstrap](http://getbootstrap.com/)
* Template inheritance with the [theme wrapper](https://roots.io/sage/docs/theme-wrapper/)
* ARIA roles and microformats
* Posts use the [hNews](http://microformats.org/wiki/hnews) microformat
* [Multilingual ready](https://roots.io/wpml/) and over 30 available [community translations](https://github.com/roots/sage-translations)

Install the [Soil](https://roots.io/plugins/soil/) plugin to enable additional recommended features:

* Load jQuery from the jQuery CDN
* Cleaner WordPress markup
* Cleaner HTML output of navigation menus
* Root relative URLs
* Nice search
* Google Analytics snippet from [HTML5 Boilerplate](http://html5boilerplate.com/)
* Move all JS to the footer
* Disable trackbacks and pingbacks

See a complete working example in the [roots-example-project.com repo](https://github.com/roots/roots-example-project.com).

## Theme setup

@TODO

## Theme development

Sage uses [Webpack](https://webpack.github.io/) as a build tool and [npm](https://www.npmjs.com/) to manage front-end packages.

### Install dependencies

From the command line on your host machine (not on your Vagrant development box), navigate to the theme directory then run `npm install`:

```shell
# @ example.com/site/web/app/themes/your-theme-name
$ npm install
```

You now have all the necessary dependencies to run the build process.

### Available build commands

* `npm run build` — Compile and optimize the files in your assets directory
* `npm run watch` — Compile assets when file changes are made, start BrowerSync session
* `npm run build:production` — Compile assets for production

### Using BrowserSync

To use BrowserSync during `npm watch` you need to update `devUrl` at the bottom of `assets/config.json` to reflect your local development hostname.

For example, if your local development URL is `https://project-name.dev` you would update the file to read:
```json
...
  "devUrl": "https://project-name.dev",
...
```


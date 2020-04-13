# Vtec Admin

[![Latest Version on NPM](https://img.shields.io/npm/v/vtec-admin.svg?style=flat-square)](https://www.npmjs.com/package/vtec-admin)
[![Total Downloads](https://img.shields.io/npm/dt/vtec-admin.svg?style=flat-square)](https://www.npmjs.com/package/vtec-admin)
[![License](https://img.shields.io/npm/l/vtec-admin.svg?style=flat-square)](https://www.npmjs.com/package/vtec-admin)

SPA admin crud builder running on top of REST APIs, based on Vuetify with Vue CLI plugin. Ready to use with Laravel thanks to [separate crud generator package](https://github.com/adr1enbe4udou1n/vtec-laravel-crud), but can be used on every backend of your choice with your own data and authentication providers.

See [full documentation](https://vtec.okami101.io)\
Check [online demo](https://vtec-bookstore-demo.okami101.io/admin) -> demo@example.com / password (read only)

## Features

* Powered by Vuetify, and come with optional nice [Material Theme by Creative Tim](https://github.com/creativetimofficial/vuetify-material-dashboard) if you use Vue CLI plugin
* Full SPA admin, with possibility of custom routes for your own particular admin pages
* Can be adapted to any backend (REST, GraphQL, SOAP, etc.) by writing your own data provider that follow specific data contract
* One 100% functional data provider included for Laravel
* Separate [Laravel api crud generator package](https://github.com/adr1enbe4udou1n/vtec-laravel-crud) provided for insane quick start and include many features as spa authentication, profile editing, impersonation, server-side translatable fields, media support, file manager thanks to [elFinder](https://github.com/Studio-42/elFinder) with Wysiwyg bridges, etc.
* Full feature bookstore-type demo application provided, from backend based on Laravel to spa admin, similar as [Api Platform Demo](https://github.com/api-platform/demo), with Docker support
* Complete documentation
* Full internationalization via Vue I18n, with english and french 100% supported, by default based on browser language
* Translatable fields by entity support by global create/edit language selection
* Crud pages admin generator with on Vue CLI plugin
* DSL spirit, absolutly minimal boilerplate Vue.js code needed for functional crud pages, while allowing large customization layout possibility thanks to Vue.js power
* Unique v-model context by form for minimal boilerplate code
* Server-side form validation support
* Autocomplete input with entity reference support
* Themeable thanks to Vuetify plugin
* Custom authentication supported by writing your own provider
* You want JWT based-auth ? Simply write your own provider that follow specific auth contract (check the one already included for more detail)
* One 100% functional auth provider included for [Laravel Sanctum](https://github.com/laravel/sanctum)
* Advanced permission supported
* Full-featured datagrid (sort, pagination, filters) with complete by-cell Vue slot template customization
* Data iterator decoupled from datagrid for total custom paginated list layout support
* Advanced filters support with many types: select, boolean, autocomplete, etc.
* Filter-as-you-type with live query string context support
* Custom actions (by row or bulk)
* Many components for various data types: select, enums, boolean, number, rich text, etc.
* Can be include to any Vue.js based application
* Vue CLI Support with dedicated plugin for even easier quick start
* Heavily Inspired by [React Admin](https://github.com/marmelab/react-admin/) by awesome [Marmelab Team](https://marmelab.com/)

## But why ?

[React Admin](https://github.com/marmelab/react-admin/) is by far the most cool and customizable admin panel i ever seen. Besides it's totally independent of any backend, and althought it isn't the more efficient way to build administrable app from top to bottom with backend included, this is in my opinion the true way to build admin apps as LEGO&copy; !

It seem's there is no really equivalent on Vue.js world which is my preferred UI library and this i why i wanted to try a make one just for fun (and hard training).

By its nature, React Admin doesn't propose any helpers for backend framework, although [Api Platform Demo](https://github.com/api-platform/demo) try to do awesome work for Symfony. I choose to make a [complete helper package](https://github.com/adr1enbe4udou1n/vtec-laravel-crud) for Laravel in order to have the best quick start experience possible, while respecting highly standard code.

## State

I tried to as close as possible to RA features, without some of them as client-side data cache, the optimistic UI wich necessit many work for something i don't really need (besides it kills server-side validation which i'm not really a fan of it).\
Contrary to RA, no specific relationships is included on list and show views for fields, because seems more logical on server-side to me.

This is a really alpha state package, use it only for adventure !

This app is of course far to be as sharp as React Admin which the admin panel i highly recommended you to use. Morever RA has really fast growing contributions and tends to be the "de facto" SPA admin.

## Similar inspiring projects

### SPA admin

* [React Admin](https://github.com/marmelab/react-admin/), by far the most cool and customizable admin panel, and totally independent of any backend. Just build admin panel as LEGO&copy; !

### Classic admin builder for Laravel and Symfony

* [EasyAdmin](https://github.com/EasyCorp/EasyAdminBundle)
* [Sonata Admin](https://github.com/sonata-project/SonataAdminBundle)
* [Voyager](https://github.com/the-control-group/voyager)

## Note on this main repo

[Vtec Admin Library](packages/admin)
[Vtec Admin Vue CLI Plugin](packages/cli)

## License

This project is open-sourced software licensed under the [MIT license](https://adr1enbe4udou1n.mit-license.org).

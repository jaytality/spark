# Spark Framework

> ### **Spark**
> ###### \ ˈspärk  \
>
> _Something that sets off a sudden force._
>
> <sub>[Merriam-Webster Definition #4](https://www.merriam-webster.com/dictionary/spark)</sub>
>

This project is a micro-framework, a router that responds to any defined method (GET, POST, PUT, DELETE, MYCUSTOMHTTPMETHOD) - ideal for API frameworks, or Request Reactive applications.

Deploy this project within the `/code` folder of a [Touchstone](https://github.com/jaytality/touchstone) deployment for quick deployment on [Keystone](https://github.com/jaytality/keystone)

-----

## Features

* Support for any defined/custom HTTP request method
* Now uses `Illuminate/Database` for Capsule Query building and Eloquetn ORM functionality
* Includes PHPMailer for mail functionality as needed too

## Usage

This repo doesn't contain any of the usual keystone/touchstone shell scripts - it's meant to be cloned straight into the `/code` folder of a [Touchstone](https://github.com/jaytality/touchstone) deployment, or placed in the www root of a server.

### Configuration

* Copy `.env.sample.yaml` to `.env.yaml`
* Fill in the details with valid yaml values
* You can **expand the config however you like** and you can refer to configuration values with `getConfig('root.node.subnode')`

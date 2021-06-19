## Installing ONLYOFFICE Document Server

You will need an instance of ONLYOFFICE Document Server that is resolvable and connectable both from HumHub and any end clients. ONLYOFFICE Document Server must also be able to POST to HumHub directly.

You can install free Community version of ONLYOFFICE Document Server or scalable enterprise-level Integration Edition.

To install free Community version, use [Docker](https://github.com/onlyoffice/Docker-DocumentServer) (recommended) or follow [these instructions](https://helpcenter.onlyoffice.com/server/linux/document/linux-installation.aspx) for Debian, Ubuntu, or derivatives.  

To install Integration Edition, follow instructions [here](https://helpcenter.onlyoffice.com/server/integration-edition/index.aspx).

Community Edition vs Integration Edition comparison can be found [here](#onlyoffice-document-server-editions).

## Installing HumHub ONLYOFFICE integration plugin

Either install it from [HumHub Marketplace](https://www.humhub.com/en/marketplace/onlyoffice/) or simply clone the repository inside one of the folder specified by `moduleAutoloadPaths` parameter. Please see [HumHub Documentation](https://docs.humhub.org/docs/develop/environment#module-loader-path) for more information.

## Configuring HumHub CONLYOFFICE integration plugin

Navigate to `Administration` -> `Modules` find the plugin under Installed tab and click `Configure`.


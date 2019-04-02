[titleEn]: <>(Plugin - Commands)
[wikiUrl]: <>(../internals/plugins/plugin-commands?category=platform-en/extending-the-platform/plugins)

## Listing
In this guide, you'll learn which `Plugin Commands` come with `Shopware` and what they are used for.
Below you'll find a list of each command and its usage.

| Command           | Arguments | Options             | Usage                                                                  |
|-------------------|-----------|---------------------|------------------------------------------------------------------------|
| plugin:install    | plugins   | activate, reinstall | Installs, re-installs and activates one or multiple plugins            |
| plugin:uninstall  | plugins   | keep-user-data      | Uninstalls one or multiple plugins                                     |
| plugin:activate   | plugins   | N/A                 | Activates one or multiple installed plugins                            |
| plugin:deactivate | plugins   | N/A                 | Deactivates one or multiple installed plugins                          |
| plugin:update     | plugins   | N/A                 | Updates one or multiple plugins                                        |
| plugin:list       | N/A       | filter              | Prints a list of all available plugins filtering with the given filter |
| plugin:refresh    | N/A       | skipPluginList      | Refreshes the plugin list                                              |

*List of all plugin commands*

Please note, that arguments are always required and options are optional.

## Examples

Below you'll find some examples for you to become more familiar with these commands.

```
$ ./bin/console plugin:list

$ ./bin/console plugin:list --filter YourPluginName
```
*Plugin list command*

The first command will list all plugins currently known to `Shopware`.
The second command will list all plugins containing the `YourPluginName` in the plugin name or label.

## Refreshing plugins

Refreshing your plugins is necessary every time you add a new plugin by hand.
Below you'll find a few examples how to use the `plugin:refresh` command.

```
$ ./bin/console plugin:refresh

$ ./bin/console plugin:refresh --skipPluginList

$ ./bin/console plugin:refresh -s
```
*Plugin refresh command*

The first command will refresh the available plugins and print out the refreshed plugin list.
The other two commands will refresh the available plugins without printing the plugin list.

## Installing/uninstalling plugins

You can either install or uninstall one plugin at a time or even a list of plugins at once.
Have a look at the example below to get an idea on how to use the `plugin:install` and `plugin:uninstall` command.

```
$ ./bin/console plugin:install YourPlugin
$ ./bin/console plugin:uninstall YourPlugin

$ ./bin/console plugin:install YourPlugin ThirdPartyPlugin
$ ./bin/console plugin:uninstall YourPlugin ThirdPartyPlugin
```
*Plugin un-, install command*

## Updating plugins

You can either update one plugin at a time or a list of plugins.

```
$ ./bin/console plugin:update YourPlugin

$ ./bin/console plugin:update YourPlugin ThirdPartyPlugin
```
*Plugin update command*

The first command updates the `YourPlugin` plugin if it exists.
The second command updates `YourPlugin` and `ThirdPartyPlugin` if they exist.

## Activating/Deactivating plugins

Activating and deactivating plugins works in a similar fashion.
You can either activate or deactivate one plugin at a time or a list of plugins at once.

```
$ ./bin/console plugin:activate YourPlugin
$ ./bin/console plugin:deactivate YourPlugin

$ ./bin/console plugin:activate YourPlugin ThirdPartyPlugin
$ ./bin/console plugin:deactivate YourPlugin ThirdPartyPlugin
```
*Plugin de-. activate command*
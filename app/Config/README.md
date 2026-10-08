<!-- local-learning-guide -->

# Application configuration

Path: `app/Config/` in `url-shortener`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Routes.php maps methods and paths; Filters.php maps filter aliases and execution rules. Database.php defines connections, App.php contains URL settings, Paths.php locates bootstrap directories, and Autoload.php controls namespaces/helpers. Environment values can override supported settings.

## Learn this folder in order

1. Read Routes.php and run php spark routes from the project root.
2. Compare filter aliases with route-group filter names.
3. Review Database.php default and tests connections before migrations or tests.
4. Change one local setting in .env and observe the effect without exposing credentials.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [App.php](App.php) | Controls base URL, index page, locale, timezone, and related HTTP application settings. |
| [Autoload.php](Autoload.php) | Maps namespaces and declares autoloaded files/helpers. |
| [Cache.php](Cache.php) | Chooses cache handlers, storage configuration, key prefixes, and expiry defaults. |
| [Constants.php](Constants.php) | Class: defined, member. |
| [ContentSecurityPolicy.php](ContentSecurityPolicy.php) | Class: ContentSecurityPolicy. |
| [Cookie.php](Cookie.php) | Class: Cookie. |
| [Cors.php](Cors.php) | Sets allowed origins, headers, methods, and credentials for cross-origin requests; configuration still requires applying the filter. |
| [CURLRequest.php](CURLRequest.php) | Class: CURLRequest. |
| [Database.php](Database.php) | Defines default and tests connections, driver settings, and environment-dependent database selection. |
| [DocTypes.php](DocTypes.php) | Class: DocTypes. |
| [Email.php](Email.php) | Sets email transport and sender configuration for email services. |
| [Encryption.php](Encryption.php) | Selects encryption driver/key settings used by the encrypter service. |
| [Events.php](Events.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [Exceptions.php](Exceptions.php) | Class: Exceptions. Methods: `handler()`. |
| [Feature.php](Feature.php) | Class: Feature. |
| [Filters.php](Filters.php) | Registers filter aliases and required/global/method/path filter execution. |
| [ForeignCharacters.php](ForeignCharacters.php) | Class: ForeignCharacters. |
| [Format.php](Format.php) | Class: Format. |
| [Generators.php](Generators.php) | Class: Generators. |
| [Honeypot.php](Honeypot.php) | Class: Honeypot. |
| [Hostnames.php](Hostnames.php) | Class: Hostnames. |
| [Images.php](Images.php) | Class: Images. |
| [Kint.php](Kint.php) | Class: Kint. |
| [Logger.php](Logger.php) | Controls logging thresholds, formats, and handlers. |
| [Migrations.php](Migrations.php) | Controls migration tracking and migration runner behavior. |
| [Mimes.php](Mimes.php) | Class: Mimes. Methods: `guessTypeFromExtension()`, `guessExtensionFromType()`. |
| [Modules.php](Modules.php) | Class: Modules. |
| [Optimize.php](Optimize.php) | Class: Optimize. |
| [Pager.php](Pager.php) | Configures pagination templates and page sizing defaults. |
| [Paths.php](Paths.php) | Locates system, application, writable, tests, and view directories during bootstrap. |
| [Publisher.php](Publisher.php) | Class: Publisher. |
| [Routes.php](Routes.php) | Maps HTTP methods/paths to handlers, parameters, namespaces, and attached filters. |
| [Routing.php](Routing.php) | Sets default routing behavior; explicit lesson routes are in Routes.php. |
| [Security.php](Security.php) | Configures CSRF handling and related security behavior. |
| [Services.php](Services.php) | Provides a place for application service factories; inspect uncommented methods for active overrides. |
| [Session.php](Session.php) | Chooses the session driver, cookie behavior, expiry, and storage path. |
| [Toolbar.php](Toolbar.php) | Chooses development debugging collectors and toolbar settings. |
| [UserAgents.php](UserAgents.php) | Class: UserAgents. |
| [Validation.php](Validation.php) | Sets validation rule sets and error templates/messages. |
| [View.php](View.php) | Configures view rendering and filters/plugins. |
| [WorkerMode.php](WorkerMode.php) | Class: WorkerMode. |

## Continue into child folders

- [Boot/](Boot/README.md)

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

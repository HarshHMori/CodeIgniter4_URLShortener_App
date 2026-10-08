<!-- local-learning-guide -->

# Browser error templates

Path: `app/Views/errors/html/` in `url-shortener`. [Project walkthrough](../../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

These PHP templates and debug assets present errors in a browser. error_404.php handles missing pages, error_exception.php displays exceptions, and production.php presents a limited production response where selected by the framework.

## Learn this folder in order

1. Read the exception template and identify which debug values it expects.
2. Compare the production template with the detailed development output.
3. Keep public error text concise and avoid rendering private configuration.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [debug.css](debug.css) | Browser presentation rules used by the matching view or HTML page. |
| [debug.js](debug.js) | Browser or tooling JavaScript; trace its importing page before modifying. |
| [error_400.php](error_400.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [error_404.php](error_404.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [error_exception.php](error_exception.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [production.php](production.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

<!-- local-learning-guide -->

# Terminal error templates

Path: `app/Views/errors/cli/` in `url-shortener`. [Project walkthrough](../../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

These templates format exceptions and missing-command errors for CLI execution, including Spark. They are not ordinary browser pages.

## Learn this folder in order

1. Read the CLI error templates.
2. Compare text formatting with sibling HTML templates.
3. Run php spark help from the project root and distinguish CLI output from HTTP output.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [error_404.php](error_404.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [error_exception.php](error_exception.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [production.php](production.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

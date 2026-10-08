<!-- local-learning-guide -->

# Environment boot settings

Path: `app/Config/Boot/` in `url-shortener`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

CodeIgniter loads development.php, production.php, or testing.php according to CI_ENVIRONMENT. These files configure error reporting/debug behavior rather than application routes.

## Learn this folder in order

1. Read the three environment files side by side.
2. Run the project in development locally and inspect a known error.
3. Explain why production should not expose debug details.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [development.php](development.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [production.php](production.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [testing.php](testing.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

<!-- local-learning-guide -->

# Application source

Path: `app/` in `url-shortener`. [Project walkthrough](../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

This is the project-specific MVC layer. Start with Config/Routes.php, follow a handler into Controllers, then inspect its database access and output.

## Learn this folder in order

1. Trace one route from URL to response.
2. Identify whether it returns a view, JSON, or a redirect.
3. Add a small field or response change and list every affected layer.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [Common.php](Common.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [index.html](index.html) | Directory placeholder; this is not the application front controller. |

## Continue into child folders

- [Config/](Config/README.md)
- [Controllers/](Controllers/README.md)
- [Database/](Database/README.md)
- [Filters/](Filters/README.md)
- [Helpers/](Helpers/README.md)
- [Language/](Language/README.md)
- [Libraries/](Libraries/README.md)
- [Models/](Models/README.md)
- [ThirdParty/](ThirdParty/README.md)
- [Views/](Views/README.md)

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

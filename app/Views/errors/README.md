<!-- local-learning-guide -->

# Error presentation

Path: `app/Views/errors/` in `url-shortener`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

CodeIgniter chooses HTML or CLI error templates according to the execution context. Production templates avoid detailed debugging output; development exceptions can show more information.

## Learn this folder in order

1. Follow the html and cli subfolders.
2. Compare exception, not-found, and production templates.
3. Explain which information should be available only during local development.

## Files in this folder

No lesson source files are present directly in this folder. It may be a placeholder, a runtime destination, or a container for the child folders below.

## Continue into child folders

- [cli/](cli/README.md)
- [html/](html/README.md)

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

<!-- local-learning-guide -->

# Database models

Path: `app/Models/` in `url-shortener`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Models connect application operations to table names, primary keys, allowedFields, result types, callbacks, and optional timestamps or soft deletes. allowedFields prevents writing unlisted fields; it is not input validation or authorization.

## Project context

Understand form submission, short-code storage, redirects, opened tracking, and the browser interface. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Compare each table and writable field with its migration.
2. Trace find(), first(), findAll(), insert()/save(), update(), and delete() from a controller.
3. Check array versus entity return types before reading properties.
4. If soft deletes or timestamps are enabled, confirm their columns exist.

## Files in this folder

No lesson source files are present directly in this folder. It may be a placeholder, a runtime destination, or a container for the child folders below.

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

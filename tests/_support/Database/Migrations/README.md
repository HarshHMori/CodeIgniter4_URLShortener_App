<!-- local-learning-guide -->

# Database migrations

Path: `tests/_support/Database/Migrations/` in `url-shortener`. [Project walkthrough](../../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

These are test fixtures under Tests\Support, not the application production migrations. Follow their callers in the starter tests and inspect the test database configuration before running them.

## Project context

Understand form submission, short-code storage, redirects, opened tracking, and the browser interface. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Read the fixture source and find its importing test.
2. Identify the configured test database and fixture lifecycle.
3. Run the corresponding test suite from the project root, keeping fixture operations separate from production migrations.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [2020-02-22-222222_example_migration.php](2020-02-22-222222_example_migration.php) | Class: ExampleMigration. Methods: `up()`, `down()`. Creates/alters: `factories`. Columns: `name`, `uid`, `class`, `icon`, `summary`, `created_at`, `updated_at`, `deleted_at`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

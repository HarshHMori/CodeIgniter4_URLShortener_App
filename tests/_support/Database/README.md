<!-- local-learning-guide -->

# Schema and sample data

Path: `tests/_support/Database/` in `url-shortener`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

These are test fixtures under Tests\Support, not the application production database. Follow their callers in the starter tests and inspect the test database configuration before running them.

## Learn this folder in order

1. Read the fixture source and find its importing test.
2. Identify the configured test database and fixture lifecycle.
3. Run the corresponding test suite from the project root, keeping fixture operations separate from production migrations.

## Files in this folder

No lesson source files are present directly in this folder. It may be a placeholder, a runtime destination, or a container for the child folders below.

## Continue into child folders

- [Migrations/](Migrations/README.md)
- [Seeds/](Seeds/README.md)

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

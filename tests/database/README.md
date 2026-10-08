<!-- local-learning-guide -->

# Database test examples

Path: `tests/database/` in `url-shortener`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Database tests use testing helpers and support migrations/fixtures. They can reset or seed a configured test database; inspect their configuration before running.

## Learn this folder in order

1. Read the test class traits and fixtures.
2. Check app/Config/Database.php tests connection and phpunit.dist.xml.
3. Run against a disposable test database and compare expected rows with fixture setup.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [ExampleDatabaseTest.php](ExampleDatabaseTest.php) | Class: ExampleDatabaseTest. Methods: `testModelFindAll()`, `testSoftDeleteLeavesRow()`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

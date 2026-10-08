<!-- local-learning-guide -->

# Shared test fixtures

Path: `tests/_support/` in `url-shortener`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Support classes provide example models, migrations, seeders, and configuration readers for tests. Composer autoload-dev maps Tests\Support to this folder; these classes are separate from application production code.

## Learn this folder in order

1. Follow each import from a test into this support folder.
2. Distinguish fixture schema from application schema.
3. Change a fixture expectation and explain the effect on the corresponding test.

## Files in this folder

No lesson source files are present directly in this folder. It may be a placeholder, a runtime destination, or a container for the child folders below.

## Continue into child folders

- [Database/](Database/README.md)
- [Libraries/](Libraries/README.md)
- [Models/](Models/README.md)

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

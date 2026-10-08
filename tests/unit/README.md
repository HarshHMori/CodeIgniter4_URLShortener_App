<!-- local-learning-guide -->

# Unit test examples

Path: `tests/unit/` in `url-shortener`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

HealthTest checks basic test/framework assumptions. A unit test should verify meaningful isolated behavior rather than merely repeat implementation code.

## Learn this folder in order

1. Read each test method and assertion.
2. Run the unit suite selected in phpunit.dist.xml.
3. Explain what the assertion proves and which application workflows it does not cover.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [HealthTest.php](HealthTest.php) | Class: HealthTest. Methods: `testIsDefinedAppPath()`, `testBaseUrlHasBeenSet()`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

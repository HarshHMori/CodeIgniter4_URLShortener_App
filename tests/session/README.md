<!-- local-learning-guide -->

# Session test example

Path: `tests/session/` in `url-shortener`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

ExampleSessionTest exercises session behavior through the framework test tools. This is distinct from writable/session, which stores runtime files.

## Learn this folder in order

1. Read the test setup and assertions.
2. Inspect phpunit.dist.xml and run the configured suite from the project root.
3. Compare the behavior asserted with any session code in the application.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [ExampleSessionTest.php](ExampleSessionTest.php) | Class: ExampleSessionTest. Methods: `testSessionSimple()`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

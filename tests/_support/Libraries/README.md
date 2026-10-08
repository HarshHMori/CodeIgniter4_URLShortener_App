<!-- local-learning-guide -->

# Test support libraries

Path: `tests/_support/Libraries/` in `url-shortener`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

ConfigReader is a helper used by the starter testing examples to read configuration behavior. This is test support, not an application HTTP controller.

## Learn this folder in order

1. Read the helper public methods.
2. Find its caller in tests.
3. Describe how it makes an assertion possible without routing a browser request.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [ConfigReader.php](ConfigReader.php) | Class: ConfigReader. Methods: `__construct()`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

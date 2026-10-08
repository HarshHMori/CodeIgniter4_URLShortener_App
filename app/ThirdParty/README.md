<!-- local-learning-guide -->

# Application-local third-party code

Path: `app/ThirdParty/` in `url-shortener`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

CodeIgniter reserves this folder for application-local external libraries. Composer packages normally live in vendor instead. A placeholder here does not indicate an active dependency.

## Learn this folder in order

1. Inspect the files and application autoload configuration.
2. Find a real caller before assuming any library is used.
3. Prefer the package installation mechanism already used by the project when adding a dependency.

## Files in this folder

No lesson source files are present directly in this folder. It may be a placeholder, a runtime destination, or a container for the child folders below.

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

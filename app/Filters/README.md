<!-- local-learning-guide -->

# Request filters

Path: `app/Filters/` in `url-shortener`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

before() runs before a matched controller; returning a response stops request execution. after() can inspect a completed response. Alias registration lives in app/Config/Filters.php, while protected groups are in Routes.php.

## Project context

Understand form submission, short-code storage, redirects, opened tracking, and the browser interface. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Read the header extraction and scheme validation.
2. Trace missing credentials, invalid credentials, and success.
3. Confirm the controller never runs when before() returns an error response.
4. Compare actual HTTP status codes and authenticator choice with the project guide.

## Files in this folder

No lesson source files are present directly in this folder. It may be a placeholder, a runtime destination, or a container for the child folders below.

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

<!-- local-learning-guide -->

# Request handlers

Path: `app/Controllers/` in `url-shortener`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Controllers read request data, call model/query operations, and choose a response. BaseController initializes shared helpers/services for its descendants. API controllers extending ResourceController use its model and JSON response helpers.

## Project context

Understand form submission, short-code storage, redirects, opened tracking, and the browser interface. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Find the active route for a method before executing it.
2. Identify getPost(), getVar(), or raw JSON parsing and supply matching input.
3. Trace validation, database operation, success response, and failure response.
4. Inspect hardcoded IDs and mutation methods before calling them.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [BaseController.php](BaseController.php) | Class: BaseController. Methods: `initController()`. |
| [Home.php](Home.php) | Class: Home. Methods: `index()`. |
| [URLController.php](URLController.php) | Class: URLController. Methods: `__construct()`, `urlShortener()`, `getURLShortCode()`, `handelShortURLs()`. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

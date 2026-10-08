<!-- local-learning-guide -->

# Database migrations

Path: `app/Database/Migrations/` in `url-shortener`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Migration filenames order changes. up() creates or alters tables; down() reverses that change. The migration tracking table records applied versions; running migrate again applies pending versions rather than recreating everything.

## Project context

Understand form submission, short-code storage, redirects, opened tracking, and the browser interface. Read the project guide for its exact request formats, endpoint sequence, and existing code issues before testing these files.

## Learn this folder in order

1. Read column type, length, nullability, defaults, keys, and relationships.
2. Compare exact column names with models/controllers.
3. Run php spark migrate from the project root after setup; Shield must create its users table before the custom user-column migration.
4. Inspect the resulting tables. Rollback can drop tables and data, so experiment only in a disposable database.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [2026-09-03-103655_CreateUrlsTable.php](2026-09-03-103655_CreateUrlsTable.php) | Class: CreateUrlsTable. Methods: `up()`, `down()`. Creates/alters: `urls`. Columns: `id`, `long_url`, `shortcode`, `is_opened`, `constraint`. `created_at` defaults to current database time. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

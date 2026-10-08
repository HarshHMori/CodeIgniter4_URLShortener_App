<!-- local-learning-guide -->

# Schema and sample data

Path: `app/Database/` in `url-shortener`. [Project walkthrough](../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Migrations describe repeatable schema changes; Seeds supplies optional demonstration rows. Schema creation is separate from handling HTTP requests.

## Learn this folder in order

1. Configure a separate database for this project.
2. Read migration up()/down() in timestamp order.
3. Apply pending migrations and inspect php spark migrate:status.
4. Read seeders before running them; repeated seeding may create duplicates.

## Files in this folder

No lesson source files are present directly in this folder. It may be a placeholder, a runtime destination, or a container for the child folders below.

## Continue into child folders

- [Migrations/](Migrations/README.md)
- [Seeds/](Seeds/README.md)

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

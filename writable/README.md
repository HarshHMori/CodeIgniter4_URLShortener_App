<!-- local-learning-guide -->

# Runtime storage

Path: `writable/` in `url-shortener`. [Project walkthrough](../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

The framework stores generated cache, sessions, logs, debug data, and application-managed uploads under writable. These are runtime artifacts, not source lessons; keep this directory outside the public document root.

## Learn this folder in order

1. Identify which configured service writes to each child folder.
2. Use the application and inspect which runtime files are created locally.
3. Read logs when diagnosing a failed lesson.
4. Give the runtime user write access without exposing the directory publicly.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [index.html](index.html) | Directory placeholder; this is not the application front controller. |

## Continue into child folders

- [cache/](cache/README.md)
- [debugbar/](debugbar/README.md)
- [logs/](logs/README.md)
- [session/](session/README.md)
- [uploads/](uploads/README.md)

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

<!-- local-learning-guide -->

# English validation messages

Path: `app/Language/en/` in `url-shortener`. [Project walkthrough](../../../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

Validation.php returns localized validation messages for the English locale. Message keys map to rule names rather than database fields.

## Learn this folder in order

1. Read the returned array.
2. Compare a message key with a validation rule in a controller.
3. Use an invalid input and observe whether a controller-specific message overrides the translation.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [Validation.php](Validation.php) | Sets validation rule sets and error templates/messages. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

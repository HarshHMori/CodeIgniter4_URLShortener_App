<!-- local-learning-guide -->

# Web entry point and static assets

Path: `public/` in `url-shortener`. [Project walkthrough](../README.md) · [Parent guide](../README.md)

## Purpose and place in the flow

index.php is the HTTP front controller. This folder is the intended web document root; files here can be requested directly. CSS, scripts, images, and uploaded files belong here only when they are intended to be public.

## Learn this folder in order

1. Read index.php and follow Paths.php to the framework bootstrap.
2. Match view asset URLs with actual files below.
3. Start the app with php spark serve from the project root.
4. Inspect asset requests and confirm .env/app/writable are outside the public document root.

## Files in this folder

| File | What to inspect |
| --- | --- |
| [index.php](index.php) | PHP template/configuration/helper. Read the returned array, markup, or functions in this file. |
| [robots.txt](robots.txt) | Static asset or supporting file. |
| [style.css](style.css) | Browser presentation rules used by the matching view or HTML page. |

## Check your understanding

Explain who uses this folder, which input or configuration reaches it, and what output or state it produces. Change one small value in a local exercise, observe the effect through the caller, and check the relevant error path. Run all Spark/Composer commands from the project root, not from this subfolder. The project walkthrough gives the setup and verification steps for the complete application.

# db.php

## Purpose

Creates the shared database connection for the project.

## Current active code

- Uses PDO.
- Connects to the `myself` database on `localhost`.
- Enables `PDO::ATTR_ERRMODE` with exceptions.

## Why this file matters

All insert and view files include this file first, so the app only needs one connection setup.

## If you switch styles

- Keep only one connection method active.
- Do not mix PDO, procedural MySQLi, and OOP MySQLi in the same request.

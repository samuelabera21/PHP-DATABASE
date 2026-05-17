# insert_project.php

## Purpose

Receives the project form and inserts the record into the `projects` table.

## Current flow

1. Includes `db.php`.
2. Reads POST values.
3. Builds the INSERT SQL.
4. Prepares and executes the query with PDO.

## Important note

The query is still built from raw POST values. For real PDO usage, switch this file to placeholders and bound parameters.

## Output

If the insert succeeds, it prints a success message.

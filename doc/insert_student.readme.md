# insert_student.php

## Purpose

Receives the submitted student form and inserts the record into the `students` table.

## Current flow

1. Includes `db.php`.
2. Reads POST values.
3. Builds the INSERT SQL.
4. Prepares and executes the query with PDO.

## Important note

The current code still interpolates user input directly into the SQL string. It works, but it is not secure. The better PDO version is to use placeholders and bind values.

## Output

If the insert succeeds, it prints a success message.

# view.php

## Purpose

Displays joined data from the `students` and `projects` tables in an HTML table.

## Current flow

1. Includes `db.php`.
2. Builds a JOIN query.
3. Prepares and executes the query with PDO.
4. Loops through the result set and prints rows.

## Notes

This file is the output page for the saved records.

## Dependency

It depends on both tables having matching `student_id` values.

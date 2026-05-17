# Project Overview

This project is a simple PHP + MySQL student/project app.

## Files

- `db.php` - opens the database connection.
- `student.php` - student input form.
- `insert_student.php` - saves a student row.
- `project.php` - project input form.
- `insert_project.php` - saves a project row.
- `view.php` - shows joined student/project data in a table.

## Current database style

The active database code is PDO.

## Flow

1. Open `student.php` or `project.php` in the browser.
2. Submit the form.
3. The form posts to the matching insert file.
4. `db.php` is included for the database connection.
5. `view.php` displays the joined result.

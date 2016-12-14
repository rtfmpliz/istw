-- scripts/schema.sqlite.sql
--
-- You will need load your database schema with this SQL.
 
CREATE TABLE karyawan (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    email VARCHAR(32) NOT NULL DEFAULT 'noemail@test.com',
    nama TEXT NULL,
    created DATETIME NOT NULL
);
 
CREATE INDEX "id" ON "karyawan" ("id");
/*
 * Hier habt ihr die Basis Datenbank struktur
 * Sie Ist aber ohne Werte
 * War zu faul die auch noch zu schreiben :P
*/
CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `vorname` text NOT NULL,
  `nachname` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;


ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;



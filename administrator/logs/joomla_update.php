#
#<?php die('Forbidden.'); ?>
#Date: 2025-03-31 19:22:06 UTC
#Software: Joomla! 5.1.0 Stable [ Kudumisha ] 16-April-2024 16:00 GMT

#Fields: datetime	priority clientip	category	message
2025-03-31T19:22:06+00:00	INFO ::1	update	Test logging
2025-03-31T19:22:06+00:00	INFO ::1	update	Update started by user Chaitanya (293). Old version is 5.1.0.
2025-03-31T19:22:09+00:00	INFO ::1	update	Downloading update file from https://update.joomla.org/releases/5.2.5/Joomla_5.2.5-Stable-Update_Package.zip.
2025-03-31T19:22:15+00:00	INFO ::1	update	File Joomla_5.2.5-Stable-Update_Package.zip downloaded.
2025-03-31T19:22:16+00:00	INFO ::1	update	Starting installation of new version.
2025-03-31T19:23:10+00:00	INFO ::1	update	Finalising installation.
2025-03-31T19:23:10+00:00	INFO ::1	update	Start of SQL updates.
2025-03-31T19:23:10+00:00	INFO ::1	update	The current database version (schema) is 5.1.0-2024-03-28.
2025-03-31T19:23:10+00:00	INFO ::1	update	Ran query from file 5.1.1-2024-04-18. Query text: UPDATE `#__template_styles` SET `params` = JSON_SET(`params`, '$.colorScheme', '.
2025-03-31T19:23:10+00:00	INFO ::1	update	Ran query from file 5.2.0-2024-07-02. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2025-03-31T19:23:10+00:00	INFO ::1	update	Ran query from file 5.2.0-2024-07-19. Query text: INSERT INTO `#__action_logs_extensions` (`extension`) VALUES ('com_guidedtours').
2025-03-31T19:23:10+00:00	INFO ::1	update	Ran query from file 5.2.0-2024-07-19. Query text: INSERT INTO `#__action_log_config` (`type_title`, `type_alias`, `id_holder`, `ti.
2025-03-31T19:23:10+00:00	INFO ::1	update	Ran query from file 5.2.0-2024-08-22. Query text: INSERT INTO `#__guidedtours` (`title`, `description`, `extensions`, `url`, `publ.
2025-03-31T19:23:10+00:00	INFO ::1	update	Ran query from file 5.2.0-2024-08-22. Query text: INSERT INTO `#__guidedtour_steps` (`title`, `description`, `position`, `target`,.
2025-03-31T19:23:10+00:00	INFO ::1	update	Ran query from file 5.2.0-2024-09-17. Query text: UPDATE `#__guidedtour_steps` SET `ordering` = `ordering` + 1 WHERE `title` IN ('.
2025-03-31T19:23:11+00:00	INFO ::1	update	Ran query from file 5.2.0-2024-09-17. Query text: INSERT INTO `#__guidedtour_steps` (`title`, `description`, `position`, `target`,.
2025-03-31T19:23:11+00:00	INFO ::1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'PUBLISH' WHERE `name` LIKE 'com_content.transi.
2025-03-31T19:23:11+00:00	INFO ::1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'UNPUBLISH' WHERE `name` LIKE 'com_content.tran.
2025-03-31T19:23:11+00:00	INFO ::1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'TRASH' WHERE `name` LIKE 'com_content.transiti.
2025-03-31T19:23:11+00:00	INFO ::1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'ARCHIVE' WHERE `name` LIKE 'com_content.transi.
2025-03-31T19:23:11+00:00	INFO ::1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'FEATURE' WHERE `name` LIKE 'com_content.transi.
2025-03-31T19:23:11+00:00	INFO ::1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'UNFEATURE' WHERE `name` LIKE 'com_content.tran.
2025-03-31T19:23:11+00:00	INFO ::1	update	Ran query from file 5.2.2-2024-09-24. Query text: UPDATE `#__assets` SET `title` = 'PUBLISH_AND_FEATURE' WHERE `name` LIKE 'com_co.
2025-03-31T19:23:11+00:00	INFO ::1	update	Ran query from file 5.2.3-2025-01-09. Query text: UPDATE `#__mail_templates` SET `params` = '{"tags":["messages","message","date",.
2025-03-31T19:23:11+00:00	INFO ::1	update	End of SQL updates.
2025-03-31T19:23:11+00:00	INFO ::1	update	Uninstalling extensions
2025-03-31T19:23:11+00:00	INFO ::1	update	Deleting removed files and folders.
2025-03-31T19:23:17+00:00	INFO ::1	update	Cleaning up after installation.
2025-03-31T19:23:17+00:00	INFO ::1	update	Update to version 5.2.5 is complete.

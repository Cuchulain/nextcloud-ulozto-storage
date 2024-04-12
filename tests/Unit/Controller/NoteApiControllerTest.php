<?php

declare(strict_types=1);
// SPDX-FileCopyrightText: Jan Čejka <posta@jancejka.cz>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\UloztoStorageProvider\Tests\Unit\Controller;

use OCA\UloztoStorageProvider\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}

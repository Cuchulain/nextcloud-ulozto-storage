<?php

declare(strict_types=1);
// SPDX-FileCopyrightText: Jan Čejka <posta@jancejka.cz>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\UloztoStorageProvider\Controller;

use OCA\UloztoStorageProvider\AppInfo\Application;
use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\IRequest;
use OCP\Util;

class PageController extends Controller {
	public function __construct(IRequest $request) {
		parent::__construct(Application::APP_ID, $request);
	}

	/**
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function index(): TemplateResponse {
		Util::addScript(Application::APP_ID, 'uloztostorageprovider-main');

		return new TemplateResponse(Application::APP_ID, 'main');
	}
}

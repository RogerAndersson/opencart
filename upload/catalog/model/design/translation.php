<?php
namespace Opencart\Catalog\Model\Design;
/**
 * Class Translation
 * 
 * Can be called from $this->load->model('design/translation');
 *
 * @package Opencart\Catalog\Model\Design
 */
class Translation extends \Opencart\System\Engine\Model {
	/**
	 * Get Translations
	 *
	 * @param string $route
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getTranslations(string $route): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "translation` WHERE `store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "' AND `route` = '" . $this->db->escape($route) . "'");

		return $query->rows;
	}
}

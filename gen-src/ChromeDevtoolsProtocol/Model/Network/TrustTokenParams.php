<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Determines what type of Trust Token operation is executed and depending on the type, some additional parameters.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TrustTokenParams implements \JsonSerializable
{
	/** @var string */
	public $type;

	/**
	 * Only set for "srr-token-redemption" type and determine whether to request a fresh SRR or use a still valid cached SRR.
	 *
	 * @var string
	 */
	public $refreshPolicy;

	/**
	 * Origins of issuers from whom to request tokens or redemption records.
	 *
	 * @var string[]|null
	 */
	public $issuers;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->refreshPolicy)) {
			$instance->refreshPolicy = (string)$data->refreshPolicy;
		}
		if (isset($data->issuers)) {
			$instance->issuers = [];
			foreach ($data->issuers as $item) {
				$instance->issuers[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->refreshPolicy !== null) {
			$data->refreshPolicy = $this->refreshPolicy;
		}
		if ($this->issuers !== null) {
			$data->issuers = [];
			foreach ($this->issuers as $item) {
				$data->issuers[] = $item;
			}
		}
		return $data;
	}
}

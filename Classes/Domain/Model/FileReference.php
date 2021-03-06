<?php
namespace Drcsystems\ProductAdvertisement\Domain\Model;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Class FileReference
 */
class FileReference extends \TYPO3\CMS\Extbase\Domain\Model\FileReference {

	/**
	 * Uid of a sys_file
	 *
	 * @var integer
	 */
	protected $originalFileIdentifier;

	/**
	 * Uid of a sys_file
	 *
	 * @var integer
	 */
	protected $uidLocal;

	/**
	 * @param \TYPO3\CMS\Core\Resource\FileReference $originalResource
	 */
	public function setOriginalResource(\TYPO3\CMS\Core\Resource\FileReference $originalResource) {
		$this->originalResource = $originalResource;
		$this->originalFileIdentifier = (int)$originalResource->getOriginalFile()->getUid();
		$this->uidLocal = (int)$originalResource->getOriginalFile()->getUid();
	}

	/**
	 * Returns the user
	 *
	 * @return int $uidLocal
	 */
	public function getOriginalFileIdentifier()
	{
		return $this->originalFileIdentifier;
	}

	/**
	 * Returns the user
	 *
	 * @return int $uidLocal
	 */
	public function getUidLocal()
	{
		return $this->uidLocal;
	}
	
	/**
	 * Sets the uidLocal
	 *
	 * @param int $uidLocal
	 * @return void
	 */
	public function setUidLocal($uidLocal)
	{
		$this->uidLocal = $uidLocal;
	}

	/**
	 * Sets the deleted
	 *
	 * @param int $deleted
	 * @return void
	 */
	public function setDeleted($deleted)
	{
		$this->deleted = $deleted;
	}
}

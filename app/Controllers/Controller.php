<?php

namespace App\Controllers;

class Controller {
	/**
	 * @var string
	 */
	private $baseDir;

	public function __construct($baseDir = '') {
		$this->baseDir = $baseDir;
	}

	public function index() {
		require $this->baseDir.'/views/index2.php';
	}

	/**
	 * @return string
	 */
	public function getBaseDir() {
		return $this->baseDir;
	}

	/**
	 * @param string $baseDir
	 */
	public function setBaseDir($baseDir) {
		$this->baseDir = $baseDir;
	}

    public function createAlbum($albumModel, $data) {
        return $albumModel->create($data);
    }
}